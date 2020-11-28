<?php
/**
 * TssV2TransactionsGet200ResponseProcessorInformation
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
 * TssV2TransactionsGet200ResponseProcessorInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TssV2TransactionsGet200ResponseProcessorInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tssV2TransactionsGet200Response_processorInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'processor' => '\CyberSource\Model\TssV2TransactionsGet200ResponseProcessorInformationProcessor',
        'multiProcessorRouting' => '\CyberSource\Model\TssV2TransactionsGet200ResponseProcessorInformationMultiProcessorRouting[]',
        'transactionId' => 'string',
        'networkTransactionId' => 'string',
        'responseId' => 'string',
        'providerTransactionId' => 'string',
        'approvalCode' => 'string',
        'responseCode' => 'string',
        'avs' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseProcessorInformationAvs',
        'cardVerification' => '\CyberSource\Model\Riskv1decisionsProcessorInformationCardVerification',
        'achVerification' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseProcessorInformationAchVerification',
        'electronicVerificationResults' => '\CyberSource\Model\TssV2TransactionsGet200ResponseProcessorInformationElectronicVerificationResults',
        'systemTraceAuditNumber' => 'string',
        'responseCodeSource' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'processor' => null,
        'multiProcessorRouting' => null,
        'transactionId' => null,
        'networkTransactionId' => null,
        'responseId' => null,
        'providerTransactionId' => null,
        'approvalCode' => null,
        'responseCode' => null,
        'avs' => null,
        'cardVerification' => null,
        'achVerification' => null,
        'electronicVerificationResults' => null,
        'systemTraceAuditNumber' => null,
        'responseCodeSource' => null
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
        'processor' => 'processor',
        'multiProcessorRouting' => 'multiProcessorRouting',
        'transactionId' => 'transactionId',
        'networkTransactionId' => 'networkTransactionId',
        'responseId' => 'responseId',
        'providerTransactionId' => 'providerTransactionId',
        'approvalCode' => 'approvalCode',
        'responseCode' => 'responseCode',
        'avs' => 'avs',
        'cardVerification' => 'cardVerification',
        'achVerification' => 'achVerification',
        'electronicVerificationResults' => 'electronicVerificationResults',
        'systemTraceAuditNumber' => 'systemTraceAuditNumber',
        'responseCodeSource' => 'responseCodeSource'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'processor' => 'setProcessor',
        'multiProcessorRouting' => 'setMultiProcessorRouting',
        'transactionId' => 'setTransactionId',
        'networkTransactionId' => 'setNetworkTransactionId',
        'responseId' => 'setResponseId',
        'providerTransactionId' => 'setProviderTransactionId',
        'approvalCode' => 'setApprovalCode',
        'responseCode' => 'setResponseCode',
        'avs' => 'setAvs',
        'cardVerification' => 'setCardVerification',
        'achVerification' => 'setAchVerification',
        'electronicVerificationResults' => 'setElectronicVerificationResults',
        'systemTraceAuditNumber' => 'setSystemTraceAuditNumber',
        'responseCodeSource' => 'setResponseCodeSource'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'processor' => 'getProcessor',
        'multiProcessorRouting' => 'getMultiProcessorRouting',
        'transactionId' => 'getTransactionId',
        'networkTransactionId' => 'getNetworkTransactionId',
        'responseId' => 'getResponseId',
        'providerTransactionId' => 'getProviderTransactionId',
        'approvalCode' => 'getApprovalCode',
        'responseCode' => 'getResponseCode',
        'avs' => 'getAvs',
        'cardVerification' => 'getCardVerification',
        'achVerification' => 'getAchVerification',
        'electronicVerificationResults' => 'getElectronicVerificationResults',
        'systemTraceAuditNumber' => 'getSystemTraceAuditNumber',
        'responseCodeSource' => 'getResponseCodeSource'
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
        $this->container['processor'] = isset($data['processor']) ? $data['processor'] : null;
        $this->container['multiProcessorRouting'] = isset($data['multiProcessorRouting']) ? $data['multiProcessorRouting'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['networkTransactionId'] = isset($data['networkTransactionId']) ? $data['networkTransactionId'] : null;
        $this->container['responseId'] = isset($data['responseId']) ? $data['responseId'] : null;
        $this->container['providerTransactionId'] = isset($data['providerTransactionId']) ? $data['providerTransactionId'] : null;
        $this->container['approvalCode'] = isset($data['approvalCode']) ? $data['approvalCode'] : null;
        $this->container['responseCode'] = isset($data['responseCode']) ? $data['responseCode'] : null;
        $this->container['avs'] = isset($data['avs']) ? $data['avs'] : null;
        $this->container['cardVerification'] = isset($data['cardVerification']) ? $data['cardVerification'] : null;
        $this->container['achVerification'] = isset($data['achVerification']) ? $data['achVerification'] : null;
        $this->container['electronicVerificationResults'] = isset($data['electronicVerificationResults']) ? $data['electronicVerificationResults'] : null;
        $this->container['systemTraceAuditNumber'] = isset($data['systemTraceAuditNumber']) ? $data['systemTraceAuditNumber'] : null;
        $this->container['responseCodeSource'] = isset($data['responseCodeSource']) ? $data['responseCodeSource'] : null;
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
     * Gets processor
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponseProcessorInformationProcessor
     */
    public function getProcessor()
    {
        return $this->container['processor'];
    }

    /**
     * Sets processor
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponseProcessorInformationProcessor $processor
     * @return $this
     */
    public function setProcessor($processor)
    {
        $this->container['processor'] = $processor;

        return $this;
    }

    /**
     * Gets multiProcessorRouting
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponseProcessorInformationMultiProcessorRouting[]
     */
    public function getMultiProcessorRouting()
    {
        return $this->container['multiProcessorRouting'];
    }

    /**
     * Sets multiProcessorRouting
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponseProcessorInformationMultiProcessorRouting[] $multiProcessorRouting An array of object that contains the list of acquirer response codes & reasons if a transaction is routed to multiple acquirers.
     * @return $this
     */
    public function setMultiProcessorRouting($multiProcessorRouting)
    {
        $this->container['multiProcessorRouting'] = $multiProcessorRouting;

        return $this;
    }

    /**
     * Gets transactionId
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     * @param string $transactionId Network transaction identifier (TID). You can use this value to identify a specific transaction when you are discussing the transaction with your processor. Not all processors provide this value.  Returned by the authorization service.  #### PIN debit Transaction identifier generated by the processor.  Returned by PIN debit credit.  #### GPX Processor transaction ID.  #### Cielo For Cielo, this value is the non-sequential unit (NSU) and is supported for all transactions. The value is generated by Cielo or the issuing bank.  #### Comercio Latino For Comercio Latino, this value is the proof of sale or non-sequential unit (NSU) number generated by the acquirers Cielo and Rede, or the issuing bank.  #### CyberSource through VisaNet and GPN For details about this value for CyberSource through VisaNet and GPN, see \"Network Transaction Identifiers\" in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  #### Moneris This value identifies the transaction on a host system. It contains the following information: - Terminal used to process the transaction - Shift during which the transaction took place - Batch number - Transaction number within the batch You must store this value. If you give the customer a receipt, display this value on the receipt.  **Example** For the value 66012345001069003: - Terminal ID = 66012345 - Shift number = 001 - Batch number = 069 - Transaction number = 003
     * @return $this
     */
    public function setTransactionId($transactionId)
    {

        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets networkTransactionId
     * @return string
     */
    public function getNetworkTransactionId()
    {
        return $this->container['networkTransactionId'];
    }

    /**
     * Sets networkTransactionId
     * @param string $networkTransactionId The description for this field is not available.
     * @return $this
     */
    public function setNetworkTransactionId($networkTransactionId)
    {
        $this->container['networkTransactionId'] = $networkTransactionId;

        return $this;
    }

    /**
     * Gets responseId
     * @return string
     */
    public function getResponseId()
    {
        return $this->container['responseId'];
    }

    /**
     * Sets responseId
     * @param string $responseId Response ID sent from the processor.
     * @return $this
     */
    public function setResponseId($responseId)
    {
        $this->container['responseId'] = $responseId;

        return $this;
    }

    /**
     * Gets providerTransactionId
     * @return string
     */
    public function getProviderTransactionId()
    {
        return $this->container['providerTransactionId'];
    }

    /**
     * Sets providerTransactionId
     * @param string $providerTransactionId The description for this field is not available.
     * @return $this
     */
    public function setProviderTransactionId($providerTransactionId)
    {
        $this->container['providerTransactionId'] = $providerTransactionId;

        return $this;
    }

    /**
     * Gets approvalCode
     * @return string
     */
    public function getApprovalCode()
    {
        return $this->container['approvalCode'];
    }

    /**
     * Sets approvalCode
     * @param string $approvalCode Authorization code. Returned only when the processor returns this value.  The length of this value depends on your processor.  Returned by authorization service.  #### PIN debit Authorization code that is returned by the processor.  Returned by PIN debit credit.  #### Elavon Encrypted Account Number Program The returned value is OFFLINE.  #### TSYS Acquiring Solutions The returned value for a successful zero amount authorization is 000000.
     * @return $this
     */
    public function setApprovalCode($approvalCode)
    {
        $this->container['approvalCode'] = $approvalCode;

        return $this;
    }

    /**
     * Gets responseCode
     * @return string
     */
    public function getResponseCode()
    {
        return $this->container['responseCode'];
    }

    /**
     * Sets responseCode
     * @param string $responseCode For most processors, this is the error message sent directly from the bank. Returned only when the processor returns this value.  **Important** Do not use this field to evaluate the result of the authorization.  #### PIN debit Response value that is returned by the processor or bank. **Important** Do not use this field to evaluate the results of the transaction request.  Returned by PIN debit credit, PIN debit purchase, and PIN debit reversal.  #### AIBMS If this value is `08`, you can accept the transaction if the customer provides you with identification.  #### Atos This value is the response code sent from Atos and it might also include the response code from the bank. Format: `aa,bb` with the two values separated by a comma and where: - `aa` is the two-digit error message from Atos. - `bb` is the optional two-digit error message from the bank.  #### Comercio Latino This value is the status code and the error or response code received from the processor separated by a colon. Format: [status code]:E[error code] or [status code]:R[response code] Example `2:R06`  #### JCN Gateway Processor-defined detail error code. The associated response category code is in the `processorInformation.responseCategoryCode` field. String (3)
     * @return $this
     */
    public function setResponseCode($responseCode)
    {

        $this->container['responseCode'] = $responseCode;

        return $this;
    }

    /**
     * Gets avs
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseProcessorInformationAvs
     */
    public function getAvs()
    {
        return $this->container['avs'];
    }

    /**
     * Sets avs
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseProcessorInformationAvs $avs
     * @return $this
     */
    public function setAvs($avs)
    {
        $this->container['avs'] = $avs;

        return $this;
    }

    /**
     * Gets cardVerification
     * @return \CyberSource\Model\Riskv1decisionsProcessorInformationCardVerification
     */
    public function getCardVerification()
    {
        return $this->container['cardVerification'];
    }

    /**
     * Sets cardVerification
     * @param \CyberSource\Model\Riskv1decisionsProcessorInformationCardVerification $cardVerification
     * @return $this
     */
    public function setCardVerification($cardVerification)
    {
        $this->container['cardVerification'] = $cardVerification;

        return $this;
    }

    /**
     * Gets achVerification
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseProcessorInformationAchVerification
     */
    public function getAchVerification()
    {
        return $this->container['achVerification'];
    }

    /**
     * Sets achVerification
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseProcessorInformationAchVerification $achVerification
     * @return $this
     */
    public function setAchVerification($achVerification)
    {
        $this->container['achVerification'] = $achVerification;

        return $this;
    }

    /**
     * Gets electronicVerificationResults
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponseProcessorInformationElectronicVerificationResults
     */
    public function getElectronicVerificationResults()
    {
        return $this->container['electronicVerificationResults'];
    }

    /**
     * Sets electronicVerificationResults
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponseProcessorInformationElectronicVerificationResults $electronicVerificationResults
     * @return $this
     */
    public function setElectronicVerificationResults($electronicVerificationResults)
    {
        $this->container['electronicVerificationResults'] = $electronicVerificationResults;

        return $this;
    }

    /**
     * Gets systemTraceAuditNumber
     * @return string
     */
    public function getSystemTraceAuditNumber()
    {
        return $this->container['systemTraceAuditNumber'];
    }

    /**
     * Sets systemTraceAuditNumber
     * @param string $systemTraceAuditNumber This field is returned only for **American Express Direct** and **CyberSource through VisaNet**. Returned by authorization and incremental authorization services.  #### American Express Direct  System trace audit number (STAN). This value identifies the transaction and is useful when investigating a chargeback dispute.  #### CyberSource through VisaNet  System trace number that must be printed on the customer’s receipt.
     * @return $this
     */
    public function setSystemTraceAuditNumber($systemTraceAuditNumber)
    {

        $this->container['systemTraceAuditNumber'] = $systemTraceAuditNumber;

        return $this;
    }

    /**
     * Gets responseCodeSource
     * @return string
     */
    public function getResponseCodeSource()
    {
        return $this->container['responseCodeSource'];
    }

    /**
     * Sets responseCodeSource
     * @param string $responseCodeSource Used by Visa only and contains the response source/reason code that identifies the source of the response decision.
     * @return $this
     */
    public function setResponseCodeSource($responseCodeSource)
    {

        $this->container['responseCodeSource'] = $responseCodeSource;

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


