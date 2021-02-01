<?php

namespace Webcom\Amazon\Rest;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use Psr\Http\Message\RequestInterface;

/**
 * Class AmazonTransportClient
 * @author Łukasz Wątor
 */
class AmazonTransportClient extends Client
{
    private ?RequestSigner $requestSigner = null;

    /**
     * AmazonTransportClient constructor.
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $handlerStack = HandlerStack::create();
        $handlerStack->push(
            function (callable $handler) use ($handlerStack) {
                return function (RequestInterface $request, array $options) use ($handlerStack, $handler) {
                    return $this->signRequest($request, $options, $handler);
                };
            }
        );
        $config = array_merge_recursive(
            $config,
            [
                'handler' => $handlerStack,
            ]
        );
        parent::__construct($config);
    }

    /**
     * @return RequestSigner|null
     */
    public function getRequestSigner(): ?RequestSigner
    {
        return $this->requestSigner;
    }

    /**
     * @param RequestSigner|null $requestSigner
     * @return self
     */
    public function setRequestSigner(?RequestSigner $requestSigner): self
    {
        $this->requestSigner = $requestSigner;
        return $this;
    }

    /**
     * @param RequestInterface $request
     * @param array $options
     * @param callable $handler
     * @return mixed
     */
    private function signRequest(RequestInterface $request, array $options, callable $handler)
    {
        if ($this->requestSigner) {
            $request = $request->withHeader('user-agent', 'ErpBox.pl/1.0 (Language=PHP/' . PHP_VERSION . ')');
            // if isn't authorization request, attach access token
            if ($this->requestSigner->getCredentials()->getAccessToken() && $request->getUri()->getHost() !== 'api.amazon.com' && substr(
                    $request->getUri()->getPath(),
                    0,
                    15
                ) !== '/authorization/') {
                $request = $request->withHeader('x-amz-access-token', [$this->requestSigner->getCredentials()->getAccessToken()]);
            }
            $request = $this->requestSigner->signRequest($request);
        }

//        dump($request);

        return $handler($request, $options);
    }
}
