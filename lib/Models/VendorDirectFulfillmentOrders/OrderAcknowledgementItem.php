<?php
/**
 * OrderAcknowledgementItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Direct Fulfillment Orders
 *
 * The Selling Partner API for Direct Fulfillment Orders provides programmatic access to a direct fulfillment vendor's order data.
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * OrderAcknowledgementItem Class Doc Comment
 *
 * @category Class
 * @description Details of an individual order being acknowledged.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderAcknowledgementItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderAcknowledgementItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'purchase_order_number' => 'string',
        'vendor_order_number' => 'string',
        'acknowledgement_date' => '\DateTime',
        'acknowledgement_status' => '\Swagger\Client\Model\AcknowledgementStatus',
        'selling_party' => '\Swagger\Client\Model\PartyIdentification',
        'ship_from_party' => '\Swagger\Client\Model\PartyIdentification',
        'item_acknowledgements' => '\Swagger\Client\Model\OrderItemAcknowledgement[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'purchase_order_number' => null,
        'vendor_order_number' => null,
        'acknowledgement_date' => 'date-time',
        'acknowledgement_status' => null,
        'selling_party' => null,
        'ship_from_party' => null,
        'item_acknowledgements' => null
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
        'vendor_order_number' => 'vendorOrderNumber',
        'acknowledgement_date' => 'acknowledgementDate',
        'acknowledgement_status' => 'acknowledgementStatus',
        'selling_party' => 'sellingParty',
        'ship_from_party' => 'shipFromParty',
        'item_acknowledgements' => 'itemAcknowledgements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'vendor_order_number' => 'setVendorOrderNumber',
        'acknowledgement_date' => 'setAcknowledgementDate',
        'acknowledgement_status' => 'setAcknowledgementStatus',
        'selling_party' => 'setSellingParty',
        'ship_from_party' => 'setShipFromParty',
        'item_acknowledgements' => 'setItemAcknowledgements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'vendor_order_number' => 'getVendorOrderNumber',
        'acknowledgement_date' => 'getAcknowledgementDate',
        'acknowledgement_status' => 'getAcknowledgementStatus',
        'selling_party' => 'getSellingParty',
        'ship_from_party' => 'getShipFromParty',
        'item_acknowledgements' => 'getItemAcknowledgements'
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
        $this->container['purchase_order_number'] = isset($data['purchase_order_number']) ? $data['purchase_order_number'] : null;
        $this->container['vendor_order_number'] = isset($data['vendor_order_number']) ? $data['vendor_order_number'] : null;
        $this->container['acknowledgement_date'] = isset($data['acknowledgement_date']) ? $data['acknowledgement_date'] : null;
        $this->container['acknowledgement_status'] = isset($data['acknowledgement_status']) ? $data['acknowledgement_status'] : null;
        $this->container['selling_party'] = isset($data['selling_party']) ? $data['selling_party'] : null;
        $this->container['ship_from_party'] = isset($data['ship_from_party']) ? $data['ship_from_party'] : null;
        $this->container['item_acknowledgements'] = isset($data['item_acknowledgements']) ? $data['item_acknowledgements'] : null;
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
        if ($this->container['vendor_order_number'] === null) {
            $invalidProperties[] = "'vendor_order_number' can't be null";
        }
        if ($this->container['acknowledgement_date'] === null) {
            $invalidProperties[] = "'acknowledgement_date' can't be null";
        }
        if ($this->container['acknowledgement_status'] === null) {
            $invalidProperties[] = "'acknowledgement_status' can't be null";
        }
        if ($this->container['selling_party'] === null) {
            $invalidProperties[] = "'selling_party' can't be null";
        }
        if ($this->container['ship_from_party'] === null) {
            $invalidProperties[] = "'ship_from_party' can't be null";
        }
        if ($this->container['item_acknowledgements'] === null) {
            $invalidProperties[] = "'item_acknowledgements' can't be null";
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
     * @param string $purchase_order_number The purchase order number for this order. Formatting Notes: alpha-numeric code.
     *
     * @return $this
     */
    public function setPurchaseOrderNumber($purchase_order_number)
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets vendor_order_number
     *
     * @return string
     */
    public function getVendorOrderNumber()
    {
        return $this->container['vendor_order_number'];
    }

    /**
     * Sets vendor_order_number
     *
     * @param string $vendor_order_number The vendor's order number for this order.
     *
     * @return $this
     */
    public function setVendorOrderNumber($vendor_order_number)
    {
        $this->container['vendor_order_number'] = $vendor_order_number;

        return $this;
    }

    /**
     * Gets acknowledgement_date
     *
     * @return \DateTime
     */
    public function getAcknowledgementDate()
    {
        return $this->container['acknowledgement_date'];
    }

    /**
     * Sets acknowledgement_date
     *
     * @param \DateTime $acknowledgement_date The date and time when the order is acknowledged, in ISO-8601 date/time format. For example: 2018-07-16T23:00:00Z / 2018-07-16T23:00:00-05:00 / 2018-07-16T23:00:00-08:00.
     *
     * @return $this
     */
    public function setAcknowledgementDate($acknowledgement_date)
    {
        $this->container['acknowledgement_date'] = $acknowledgement_date;

        return $this;
    }

    /**
     * Gets acknowledgement_status
     *
     * @return \Swagger\Client\Model\AcknowledgementStatus
     */
    public function getAcknowledgementStatus()
    {
        return $this->container['acknowledgement_status'];
    }

    /**
     * Sets acknowledgement_status
     *
     * @param \Swagger\Client\Model\AcknowledgementStatus $acknowledgement_status Status of acknowledgement.
     *
     * @return $this
     */
    public function setAcknowledgementStatus($acknowledgement_status)
    {
        $this->container['acknowledgement_status'] = $acknowledgement_status;

        return $this;
    }

    /**
     * Gets selling_party
     *
     * @return \Swagger\Client\Model\PartyIdentification
     */
    public function getSellingParty()
    {
        return $this->container['selling_party'];
    }

    /**
     * Sets selling_party
     *
     * @param \Swagger\Client\Model\PartyIdentification $selling_party PartyID as vendor code.
     *
     * @return $this
     */
    public function setSellingParty($selling_party)
    {
        $this->container['selling_party'] = $selling_party;

        return $this;
    }

    /**
     * Gets ship_from_party
     *
     * @return \Swagger\Client\Model\PartyIdentification
     */
    public function getShipFromParty()
    {
        return $this->container['ship_from_party'];
    }

    /**
     * Sets ship_from_party
     *
     * @param \Swagger\Client\Model\PartyIdentification $ship_from_party PartyID as the vendor's warehouseId.
     *
     * @return $this
     */
    public function setShipFromParty($ship_from_party)
    {
        $this->container['ship_from_party'] = $ship_from_party;

        return $this;
    }

    /**
     * Gets item_acknowledgements
     *
     * @return \Swagger\Client\Model\OrderItemAcknowledgement[]
     */
    public function getItemAcknowledgements()
    {
        return $this->container['item_acknowledgements'];
    }

    /**
     * Sets item_acknowledgements
     *
     * @param \Swagger\Client\Model\OrderItemAcknowledgement[] $item_acknowledgements Item details including acknowledged quantity.
     *
     * @return $this
     */
    public function setItemAcknowledgements($item_acknowledgements)
    {
        $this->container['item_acknowledgements'] = $item_acknowledgements;

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


