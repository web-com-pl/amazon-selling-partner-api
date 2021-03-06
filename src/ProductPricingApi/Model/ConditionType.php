<?php
/**
 * ConditionType
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ProductPricingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\ProductPricingApi\Model;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * ConditionType Class Doc Comment
 *
 * @category Class
 * @description Indicates the condition of the item. Possible values: New, Used, Collectible, Refurbished, Club.
 * @package  Webcom\Amazon\Rest\ProductPricingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConditionType
{
    /**
     * Possible values of this enum
     */
    const _NEW = 'New';
    const USED = 'Used';
    const COLLECTIBLE = 'Collectible';
    const REFURBISHED = 'Refurbished';
    const CLUB = 'Club';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_NEW,
            self::USED,
            self::COLLECTIBLE,
            self::REFURBISHED,
            self::CLUB,
        ];
    }
}


