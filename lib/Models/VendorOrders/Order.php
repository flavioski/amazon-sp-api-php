<?php
/**
 * Order
 *
 * PHP version 5
 *
 * @category Class
 * @package  ClouSale\AmazonSellingPartnerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Retail Procurement Orders
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.22-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\VendorOrders;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * Order Class Doc Comment
 *
 * @category Class
 * @package  ClouSale\AmazonSellingPartnerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Order implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'purchase_order_number' => 'string',
        'purchase_order_state' => 'string',
        'order_details' => '\ClouSale\AmazonSellingPartnerAPI\Models\VendorOrders\OrderDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'purchase_order_number' => null,
        'purchase_order_state' => null,
        'order_details' => null
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
        'purchase_order_number' => 'purchaseOrderNumber',
        'purchase_order_state' => 'purchaseOrderState',
        'order_details' => 'orderDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'purchase_order_state' => 'setPurchaseOrderState',
        'order_details' => 'setOrderDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'purchase_order_state' => 'getPurchaseOrderState',
        'order_details' => 'getOrderDetails'
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

    const PURCHASE_ORDER_STATE__NEW = 'New';
    const PURCHASE_ORDER_STATE_ACKNOWLEDGED = 'Acknowledged';
    const PURCHASE_ORDER_STATE_CLOSED = 'Closed';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPurchaseOrderStateAllowableValues()
    {
        return [
            self::PURCHASE_ORDER_STATE__NEW,
            self::PURCHASE_ORDER_STATE_ACKNOWLEDGED,
            self::PURCHASE_ORDER_STATE_CLOSED,
        ];
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
        $this->container['purchase_order_number'] = isset($data['purchase_order_number']) ? $data['purchase_order_number'] : null;
        $this->container['purchase_order_state'] = isset($data['purchase_order_state']) ? $data['purchase_order_state'] : null;
        $this->container['order_details'] = isset($data['order_details']) ? $data['order_details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['purchase_order_number'] === null) {
            $invalidProperties[] = "'purchase_order_number' can't be null";
        }
        if ($this->container['purchase_order_state'] === null) {
            $invalidProperties[] = "'purchase_order_state' can't be null";
        }
        $allowedValues = $this->getPurchaseOrderStateAllowableValues();
        if (!is_null($this->container['purchase_order_state']) && !in_array($this->container['purchase_order_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'purchase_order_state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets purchase_order_number
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number
     *
     * @param string $purchase_order_number The purchase order number for this order. Formatting Notes: 8-character alpha-numeric code.
     *
     * @return $this
     */
    public function setPurchaseOrderNumber($purchase_order_number)
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets purchase_order_state
     *
     * @return string
     */
    public function getPurchaseOrderState()
    {
        return $this->container['purchase_order_state'];
    }

    /**
     * Sets purchase_order_state
     *
     * @param string $purchase_order_state This field will contain the current state of the purchase order.
     *
     * @return $this
     */
    public function setPurchaseOrderState($purchase_order_state)
    {
        $allowedValues = $this->getPurchaseOrderStateAllowableValues();
        if (!in_array($purchase_order_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'purchase_order_state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['purchase_order_state'] = $purchase_order_state;

        return $this;
    }

    /**
     * Gets order_details
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\VendorOrders\OrderDetails
     */
    public function getOrderDetails()
    {
        return $this->container['order_details'];
    }

    /**
     * Sets order_details
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\VendorOrders\OrderDetails $order_details Details of an order.
     *
     * @return $this
     */
    public function setOrderDetails($order_details)
    {
        $this->container['order_details'] = $order_details;

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


