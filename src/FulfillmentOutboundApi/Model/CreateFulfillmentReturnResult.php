<?php
/**
 * CreateFulfillmentReturnResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FulfillmentOutboundApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: 2020-07-01
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.18
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\FulfillmentOutboundApi\Model;

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * CreateFulfillmentReturnResult Class Doc Comment
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FulfillmentOutboundApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateFulfillmentReturnResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateFulfillmentReturnResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'return_items' => '\Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\ReturnItemList',
        'invalid_return_items' => '\Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\InvalidReturnItemList',
        'return_authorizations' => '\Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\ReturnAuthorizationList'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'return_items' => null,
        'invalid_return_items' => null,
        'return_authorizations' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'return_items' => 'returnItems',
        'invalid_return_items' => 'invalidReturnItems',
        'return_authorizations' => 'returnAuthorizations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'return_items' => 'setReturnItems',
        'invalid_return_items' => 'setInvalidReturnItems',
        'return_authorizations' => 'setReturnAuthorizations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'return_items' => 'getReturnItems',
        'invalid_return_items' => 'getInvalidReturnItems',
        'return_authorizations' => 'getReturnAuthorizations'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['return_items'] = isset($data['return_items']) ? $data['return_items'] : null;
        $this->container['invalid_return_items'] = isset($data['invalid_return_items']) ? $data['invalid_return_items'] : null;
        $this->container['return_authorizations'] = isset($data['return_authorizations']) ? $data['return_authorizations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets return_items
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\ReturnItemList
     */
    public function getReturnItems()
    {
        return $this->container['return_items'];
    }

    /**
     * Sets return_items
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\ReturnItemList $return_items return_items
     *
     * @return $this
     */
    public function setReturnItems($return_items)
    {
        $this->container['return_items'] = $return_items;

        return $this;
    }

    /**
     * Gets invalid_return_items
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\InvalidReturnItemList
     */
    public function getInvalidReturnItems()
    {
        return $this->container['invalid_return_items'];
    }

    /**
     * Sets invalid_return_items
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\InvalidReturnItemList $invalid_return_items invalid_return_items
     *
     * @return $this
     */
    public function setInvalidReturnItems($invalid_return_items)
    {
        $this->container['invalid_return_items'] = $invalid_return_items;

        return $this;
    }

    /**
     * Gets return_authorizations
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\ReturnAuthorizationList
     */
    public function getReturnAuthorizations()
    {
        return $this->container['return_authorizations'];
    }

    /**
     * Sets return_authorizations
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\ReturnAuthorizationList $return_authorizations return_authorizations
     *
     * @return $this
     */
    public function setReturnAuthorizations($return_authorizations)
    {
        $this->container['return_authorizations'] = $return_authorizations;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


