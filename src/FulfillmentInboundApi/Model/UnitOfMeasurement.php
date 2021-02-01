<?php
/**
 * UnitOfMeasurement
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
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * UnitOfMeasurement Class Doc Comment
 *
 * @category Class
 * @description Indicates the unit of measurement.
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UnitOfMeasurement
{
    /**
     * Possible values of this enum
     */
    const INCHES = 'inches';
    const CENTIMETERS = 'centimeters';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INCHES,
            self::CENTIMETERS,
        ];
    }
}


