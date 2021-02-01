<?php
/**
 * Shipment
 *
 * PHP version 5
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ShippingApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Shipping
 *
 * Provides programmatic access to Amazon Shipping APIs.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.18
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\ShippingApi\Model;

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * Shipment Class Doc Comment
 *
 * @category Class
 * @description The shipment related data.
 * @package  Webcom\Amazon\Rest\ShippingApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Shipment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipment_id' => '\Webcom\Amazon\Rest\ShippingApi\Model\ShipmentId',
        'client_reference_id' => '\Webcom\Amazon\Rest\ShippingApi\Model\ClientReferenceId',
        'ship_from' => '\Webcom\Amazon\Rest\ShippingApi\Model\Address',
        'ship_to' => '\Webcom\Amazon\Rest\ShippingApi\Model\Address',
        'accepted_rate' => '\Webcom\Amazon\Rest\ShippingApi\Model\AcceptedRate',
        'shipper' => '\Webcom\Amazon\Rest\ShippingApi\Model\Party',
        'containers' => '\Webcom\Amazon\Rest\ShippingApi\Model\ContainerList'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipment_id' => null,
        'client_reference_id' => null,
        'ship_from' => null,
        'ship_to' => null,
        'accepted_rate' => null,
        'shipper' => null,
        'containers' => null
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
        'shipment_id' => 'shipmentId',
        'client_reference_id' => 'clientReferenceId',
        'ship_from' => 'shipFrom',
        'ship_to' => 'shipTo',
        'accepted_rate' => 'acceptedRate',
        'shipper' => 'shipper',
        'containers' => 'containers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_id' => 'setShipmentId',
        'client_reference_id' => 'setClientReferenceId',
        'ship_from' => 'setShipFrom',
        'ship_to' => 'setShipTo',
        'accepted_rate' => 'setAcceptedRate',
        'shipper' => 'setShipper',
        'containers' => 'setContainers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_id' => 'getShipmentId',
        'client_reference_id' => 'getClientReferenceId',
        'ship_from' => 'getShipFrom',
        'ship_to' => 'getShipTo',
        'accepted_rate' => 'getAcceptedRate',
        'shipper' => 'getShipper',
        'containers' => 'getContainers'
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
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['client_reference_id'] = isset($data['client_reference_id']) ? $data['client_reference_id'] : null;
        $this->container['ship_from'] = isset($data['ship_from']) ? $data['ship_from'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
        $this->container['accepted_rate'] = isset($data['accepted_rate']) ? $data['accepted_rate'] : null;
        $this->container['shipper'] = isset($data['shipper']) ? $data['shipper'] : null;
        $this->container['containers'] = isset($data['containers']) ? $data['containers'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipment_id'] === null) {
            $invalidProperties[] = "'shipment_id' can't be null";
        }
        if ($this->container['client_reference_id'] === null) {
            $invalidProperties[] = "'client_reference_id' can't be null";
        }
        if ($this->container['ship_from'] === null) {
            $invalidProperties[] = "'ship_from' can't be null";
        }
        if ($this->container['ship_to'] === null) {
            $invalidProperties[] = "'ship_to' can't be null";
        }
        if ($this->container['containers'] === null) {
            $invalidProperties[] = "'containers' can't be null";
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
     * Gets shipment_id
     *
     * @return \Webcom\Amazon\Rest\ShippingApi\Model\ShipmentId
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param \Webcom\Amazon\Rest\ShippingApi\Model\ShipmentId $shipment_id shipment_id
     *
     * @return $this
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets client_reference_id
     *
     * @return \Webcom\Amazon\Rest\ShippingApi\Model\ClientReferenceId
     */
    public function getClientReferenceId()
    {
        return $this->container['client_reference_id'];
    }

    /**
     * Sets client_reference_id
     *
     * @param \Webcom\Amazon\Rest\ShippingApi\Model\ClientReferenceId $client_reference_id client_reference_id
     *
     * @return $this
     */
    public function setClientReferenceId($client_reference_id)
    {
        $this->container['client_reference_id'] = $client_reference_id;

        return $this;
    }

    /**
     * Gets ship_from
     *
     * @return \Webcom\Amazon\Rest\ShippingApi\Model\Address
     */
    public function getShipFrom()
    {
        return $this->container['ship_from'];
    }

    /**
     * Sets ship_from
     *
     * @param \Webcom\Amazon\Rest\ShippingApi\Model\Address $ship_from ship_from
     *
     * @return $this
     */
    public function setShipFrom($ship_from)
    {
        $this->container['ship_from'] = $ship_from;

        return $this;
    }

    /**
     * Gets ship_to
     *
     * @return \Webcom\Amazon\Rest\ShippingApi\Model\Address
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param \Webcom\Amazon\Rest\ShippingApi\Model\Address $ship_to ship_to
     *
     * @return $this
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }

    /**
     * Gets accepted_rate
     *
     * @return \Webcom\Amazon\Rest\ShippingApi\Model\AcceptedRate
     */
    public function getAcceptedRate()
    {
        return $this->container['accepted_rate'];
    }

    /**
     * Sets accepted_rate
     *
     * @param \Webcom\Amazon\Rest\ShippingApi\Model\AcceptedRate $accepted_rate accepted_rate
     *
     * @return $this
     */
    public function setAcceptedRate($accepted_rate)
    {
        $this->container['accepted_rate'] = $accepted_rate;

        return $this;
    }

    /**
     * Gets shipper
     *
     * @return \Webcom\Amazon\Rest\ShippingApi\Model\Party
     */
    public function getShipper()
    {
        return $this->container['shipper'];
    }

    /**
     * Sets shipper
     *
     * @param \Webcom\Amazon\Rest\ShippingApi\Model\Party $shipper shipper
     *
     * @return $this
     */
    public function setShipper($shipper)
    {
        $this->container['shipper'] = $shipper;

        return $this;
    }

    /**
     * Gets containers
     *
     * @return \Webcom\Amazon\Rest\ShippingApi\Model\ContainerList
     */
    public function getContainers()
    {
        return $this->container['containers'];
    }

    /**
     * Sets containers
     *
     * @param \Webcom\Amazon\Rest\ShippingApi\Model\ContainerList $containers containers
     *
     * @return $this
     */
    public function setContainers($containers)
    {
        $this->container['containers'] = $containers;

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


