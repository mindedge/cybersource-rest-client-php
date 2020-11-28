<?php
/**
 * VasV2PaymentsPost201ResponseOrderInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * VasV2PaymentsPost201ResponseOrderInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class VasV2PaymentsPost201ResponseOrderInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'vasV2PaymentsPost201Response_orderInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'exemptAmount' => 'string',
        'taxableAmount' => 'string',
        'taxAmount' => 'string',
        'lineItems' => '\CyberSource\Model\VasV2PaymentsPost201ResponseOrderInformationLineItems[]',
        'taxDetails' => '\CyberSource\Model\VasV2PaymentsPost201ResponseOrderInformationTaxDetails[]',
        'amountDetails' => '\CyberSource\Model\Ptsv2paymentsidreversalsReversalInformationAmountDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'exemptAmount' => null,
        'taxableAmount' => null,
        'taxAmount' => null,
        'lineItems' => null,
        'taxDetails' => null,
        'amountDetails' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'exemptAmount' => 'exemptAmount',
        'taxableAmount' => 'taxableAmount',
        'taxAmount' => 'taxAmount',
        'lineItems' => 'lineItems',
        'taxDetails' => 'taxDetails',
        'amountDetails' => 'amountDetails'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'exemptAmount' => 'setExemptAmount',
        'taxableAmount' => 'setTaxableAmount',
        'taxAmount' => 'setTaxAmount',
        'lineItems' => 'setLineItems',
        'taxDetails' => 'setTaxDetails',
        'amountDetails' => 'setAmountDetails'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'exemptAmount' => 'getExemptAmount',
        'taxableAmount' => 'getTaxableAmount',
        'taxAmount' => 'getTaxAmount',
        'lineItems' => 'getLineItems',
        'taxDetails' => 'getTaxDetails',
        'amountDetails' => 'getAmountDetails'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['exemptAmount'] = isset($data['exemptAmount']) ? $data['exemptAmount'] : null;
        $this->container['taxableAmount'] = isset($data['taxableAmount']) ? $data['taxableAmount'] : null;
        $this->container['taxAmount'] = isset($data['taxAmount']) ? $data['taxAmount'] : null;
        $this->container['lineItems'] = isset($data['lineItems']) ? $data['lineItems'] : null;
        $this->container['taxDetails'] = isset($data['taxDetails']) ? $data['taxDetails'] : null;
        $this->container['amountDetails'] = isset($data['amountDetails']) ? $data['amountDetails'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets exemptAmount
     * @return string
     */
    public function getExemptAmount()
    {
        return $this->container['exemptAmount'];
    }

    /**
     * Sets exemptAmount
     * @param string $exemptAmount Total amount of tax exempt amounts. This value is the sum of the values for all the `orderInformation.lineItems[].exemptAmount` fields in the tax calculation request.
     * @return $this
     */
    public function setExemptAmount($exemptAmount)
    {

        $this->container['exemptAmount'] = $exemptAmount;

        return $this;
    }

    /**
     * Gets taxableAmount
     * @return string
     */
    public function getTaxableAmount()
    {
        return $this->container['taxableAmount'];
    }

    /**
     * Sets taxableAmount
     * @param string $taxableAmount Total amount of all taxable amounts. This value is the sum of the values for all the `orderInformation.lineItems[].taxAmount` fields in the tax calculation request.
     * @return $this
     */
    public function setTaxableAmount($taxableAmount)
    {

        $this->container['taxableAmount'] = $taxableAmount;

        return $this;
    }

    /**
     * Gets taxAmount
     * @return string
     */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     * @param string $taxAmount Total amount of tax for all lineItems in the tax calculation request.
     * @return $this
     */
    public function setTaxAmount($taxAmount)
    {

        $this->container['taxAmount'] = $taxAmount;

        return $this;
    }

    /**
     * Gets lineItems
     * @return \CyberSource\Model\VasV2PaymentsPost201ResponseOrderInformationLineItems[]
     */
    public function getLineItems()
    {
        return $this->container['lineItems'];
    }

    /**
     * Sets lineItems
     * @param \CyberSource\Model\VasV2PaymentsPost201ResponseOrderInformationLineItems[] $lineItems
     * @return $this
     */
    public function setLineItems($lineItems)
    {
        $this->container['lineItems'] = $lineItems;

        return $this;
    }

    /**
     * Gets taxDetails
     * @return \CyberSource\Model\VasV2PaymentsPost201ResponseOrderInformationTaxDetails[]
     */
    public function getTaxDetails()
    {
        return $this->container['taxDetails'];
    }

    /**
     * Sets taxDetails
     * @param \CyberSource\Model\VasV2PaymentsPost201ResponseOrderInformationTaxDetails[] $taxDetails
     * @return $this
     */
    public function setTaxDetails($taxDetails)
    {
        $this->container['taxDetails'] = $taxDetails;

        return $this;
    }

    /**
     * Gets amountDetails
     * @return \CyberSource\Model\Ptsv2paymentsidreversalsReversalInformationAmountDetails
     */
    public function getAmountDetails()
    {
        return $this->container['amountDetails'];
    }

    /**
     * Sets amountDetails
     * @param \CyberSource\Model\Ptsv2paymentsidreversalsReversalInformationAmountDetails $amountDetails
     * @return $this
     */
    public function setAmountDetails($amountDetails)
    {
        $this->container['amountDetails'] = $amountDetails;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


