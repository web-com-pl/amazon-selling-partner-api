<?php
/**
 * FeesEstimate
 *
 * PHP version 5
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ProductFeesApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Product Fees
 *
 * The Selling Partner API for Product Fees lets you programmatically retrieve estimated fees for a product. You can then account for those fees in your pricing.
 *
 * OpenAPI spec version: v0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.18
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\ProductFeesApi\Model;

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * FeesEstimate Class Doc Comment
 *
 * @category Class
 * @description The total estimated fees for an item and a list of details.
 * @package  Webcom\Amazon\Rest\ProductFeesApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FeesEstimate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FeesEstimate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'time_of_fees_estimation' => '\DateTime',
        'total_fees_estimate' => '\Webcom\Amazon\Rest\ProductFeesApi\Model\MoneyType',
        'fee_detail_list' => '\Webcom\Amazon\Rest\ProductFeesApi\Model\FeeDetailList'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'time_of_fees_estimation' => 'date-time',
        'total_fees_estimate' => null,
        'fee_detail_list' => null
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
        'time_of_fees_estimation' => 'TimeOfFeesEstimation',
        'total_fees_estimate' => 'TotalFeesEstimate',
        'fee_detail_list' => 'FeeDetailList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'time_of_fees_estimation' => 'setTimeOfFeesEstimation',
        'total_fees_estimate' => 'setTotalFeesEstimate',
        'fee_detail_list' => 'setFeeDetailList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'time_of_fees_estimation' => 'getTimeOfFeesEstimation',
        'total_fees_estimate' => 'getTotalFeesEstimate',
        'fee_detail_list' => 'getFeeDetailList'
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
        $this->container['time_of_fees_estimation'] = isset($data['time_of_fees_estimation']) ? $data['time_of_fees_estimation'] : null;
        $this->container['total_fees_estimate'] = isset($data['total_fees_estimate']) ? $data['total_fees_estimate'] : null;
        $this->container['fee_detail_list'] = isset($data['fee_detail_list']) ? $data['fee_detail_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['time_of_fees_estimation'] === null) {
            $invalidProperties[] = "'time_of_fees_estimation' can't be null";
        }
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
     * Gets time_of_fees_estimation
     *
     * @return \DateTime
     */
    public function getTimeOfFeesEstimation()
    {
        return $this->container['time_of_fees_estimation'];
    }

    /**
     * Sets time_of_fees_estimation
     *
     * @param \DateTime $time_of_fees_estimation The time for which the fees were estimated. This defaults to the time the request is made.
     *
     * @return $this
     */
    public function setTimeOfFeesEstimation($time_of_fees_estimation)
    {
        $this->container['time_of_fees_estimation'] = $time_of_fees_estimation;

        return $this;
    }

    /**
     * Gets total_fees_estimate
     *
     * @return \Webcom\Amazon\Rest\ProductFeesApi\Model\MoneyType
     */
    public function getTotalFeesEstimate()
    {
        return $this->container['total_fees_estimate'];
    }

    /**
     * Sets total_fees_estimate
     *
     * @param \Webcom\Amazon\Rest\ProductFeesApi\Model\MoneyType $total_fees_estimate Total estimated fees for a given item, price, and fulfillment channel.
     *
     * @return $this
     */
    public function setTotalFeesEstimate($total_fees_estimate)
    {
        $this->container['total_fees_estimate'] = $total_fees_estimate;

        return $this;
    }

    /**
     * Gets fee_detail_list
     *
     * @return \Webcom\Amazon\Rest\ProductFeesApi\Model\FeeDetailList
     */
    public function getFeeDetailList()
    {
        return $this->container['fee_detail_list'];
    }

    /**
     * Sets fee_detail_list
     *
     * @param \Webcom\Amazon\Rest\ProductFeesApi\Model\FeeDetailList $fee_detail_list fee_detail_list
     *
     * @return $this
     */
    public function setFeeDetailList($fee_detail_list)
    {
        $this->container['fee_detail_list'] = $fee_detail_list;

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


