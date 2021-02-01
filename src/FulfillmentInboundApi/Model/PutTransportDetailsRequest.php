<?php
/**
 * PutTransportDetailsRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace Webcom\Amazon\Rest\FulfillmentInboundApi\Model;

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * PutTransportDetailsRequest Class Doc Comment
 *
 * @category Class
 * @description The request schema for a putTransportDetails operation.
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PutTransportDetailsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PutTransportDetailsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_partnered' => 'bool',
        'shipment_type' => '\Webcom\Amazon\Rest\FulfillmentInboundApi\Model\ShipmentType',
        'transport_details' => '\Webcom\Amazon\Rest\FulfillmentInboundApi\Model\TransportDetailInput'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_partnered' => null,
        'shipment_type' => null,
        'transport_details' => null
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
        'is_partnered' => 'IsPartnered',
        'shipment_type' => 'ShipmentType',
        'transport_details' => 'TransportDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_partnered' => 'setIsPartnered',
        'shipment_type' => 'setShipmentType',
        'transport_details' => 'setTransportDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_partnered' => 'getIsPartnered',
        'shipment_type' => 'getShipmentType',
        'transport_details' => 'getTransportDetails'
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
        $this->container['is_partnered'] = isset($data['is_partnered']) ? $data['is_partnered'] : null;
        $this->container['shipment_type'] = isset($data['shipment_type']) ? $data['shipment_type'] : null;
        $this->container['transport_details'] = isset($data['transport_details']) ? $data['transport_details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['is_partnered'] === null) {
            $invalidProperties[] = "'is_partnered' can't be null";
        }
        if ($this->container['shipment_type'] === null) {
            $invalidProperties[] = "'shipment_type' can't be null";
        }
        if ($this->container['transport_details'] === null) {
            $invalidProperties[] = "'transport_details' can't be null";
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
     * Gets is_partnered
     *
     * @return bool
     */
    public function getIsPartnered()
    {
        return $this->container['is_partnered'];
    }

    /**
     * Sets is_partnered
     *
     * @param bool $is_partnered Indicates whether a putTransportDetails request is for an Amazon-partnered carrier.
     *
     * @return $this
     */
    public function setIsPartnered($is_partnered)
    {
        $this->container['is_partnered'] = $is_partnered;

        return $this;
    }

    /**
     * Gets shipment_type
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApi\Model\ShipmentType
     */
    public function getShipmentType()
    {
        return $this->container['shipment_type'];
    }

    /**
     * Sets shipment_type
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApi\Model\ShipmentType $shipment_type shipment_type
     *
     * @return $this
     */
    public function setShipmentType($shipment_type)
    {
        $this->container['shipment_type'] = $shipment_type;

        return $this;
    }

    /**
     * Gets transport_details
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApi\Model\TransportDetailInput
     */
    public function getTransportDetails()
    {
        return $this->container['transport_details'];
    }

    /**
     * Sets transport_details
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApi\Model\TransportDetailInput $transport_details Information required to create an Amazon-partnered carrier shipping estimate, or to alert the Amazon fulfillment center to the arrival of an inbound shipment by a non-Amazon-partnered carrier.
     *
     * @return $this
     */
    public function setTransportDetails($transport_details)
    {
        $this->container['transport_details'] = $transport_details;

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


