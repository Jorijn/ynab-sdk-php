<?php
/**
 * SubTransaction
 *
 * PHP version 5
 *
 * @category Class
 * @package  YNAB
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * YNAB API Endpoints
 *
 * Our API uses a REST based design, leverages the JSON data format, and relies upon HTTPS for transport. We respond with meaningful HTTP response codes and if an error occurs, we include error details in the response body.  API Documentation is at https://api.youneedabudget.com
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace YNAB\Model;

use \ArrayAccess;
use \YNAB\ObjectSerializer;

/**
 * SubTransaction Class Doc Comment
 *
 * @category Class
 * @package  YNAB
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'transactionId' => 'string',
        'amount' => 'float',
        'payeeId' => 'string',
        'categoryId' => 'string',
        'transferAccountId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'transactionId' => 'uuid',
        'amount' => '1234000',
        'payeeId' => 'uuid',
        'categoryId' => 'uuid',
        'transferAccountId' => 'uuid'
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
        'id' => 'id',
        'transactionId' => 'transaction_id',
        'amount' => 'amount',
        'payeeId' => 'payee_id',
        'categoryId' => 'category_id',
        'transferAccountId' => 'transfer_account_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'transactionId' => 'setTransactionId',
        'amount' => 'setAmount',
        'payeeId' => 'setPayeeId',
        'categoryId' => 'setCategoryId',
        'transferAccountId' => 'setTransferAccountId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'transactionId' => 'getTransactionId',
        'amount' => 'getAmount',
        'payeeId' => 'getPayeeId',
        'categoryId' => 'getCategoryId',
        'transferAccountId' => 'getTransferAccountId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['payeeId'] = isset($data['payeeId']) ? $data['payeeId'] : null;
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['transferAccountId'] = isset($data['transferAccountId']) ? $data['transferAccountId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['transactionId'] === null) {
            $invalidProperties[] = "'transactionId' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['payeeId'] === null) {
            $invalidProperties[] = "'payeeId' can't be null";
        }
        if ($this->container['categoryId'] === null) {
            $invalidProperties[] = "'categoryId' can't be null";
        }
        if ($this->container['transferAccountId'] === null) {
            $invalidProperties[] = "'transferAccountId' can't be null";
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['transactionId'] === null) {
            return false;
        }
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['payeeId'] === null) {
            return false;
        }
        if ($this->container['categoryId'] === null) {
            return false;
        }
        if ($this->container['transferAccountId'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets transactionId
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     *
     * @param string $transactionId transactionId
     *
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount The subtransaction amount in milliunits format
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets payeeId
     *
     * @return string
     */
    public function getPayeeId()
    {
        return $this->container['payeeId'];
    }

    /**
     * Sets payeeId
     *
     * @param string $payeeId payeeId
     *
     * @return $this
     */
    public function setPayeeId($payeeId)
    {
        $this->container['payeeId'] = $payeeId;

        return $this;
    }

    /**
     * Gets categoryId
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
     * Sets categoryId
     *
     * @param string $categoryId categoryId
     *
     * @return $this
     */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;

        return $this;
    }

    /**
     * Gets transferAccountId
     *
     * @return string
     */
    public function getTransferAccountId()
    {
        return $this->container['transferAccountId'];
    }

    /**
     * Sets transferAccountId
     *
     * @param string $transferAccountId If a transfer, the account_id which the subtransaction transfers to
     *
     * @return $this
     */
    public function setTransferAccountId($transferAccountId)
    {
        $this->container['transferAccountId'] = $transferAccountId;

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


