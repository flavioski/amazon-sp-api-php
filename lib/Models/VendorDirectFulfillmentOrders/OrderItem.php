<?php
/**
 * OrderItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  ClouSale\AmazonSellingPartnerAPI
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

namespace ClouSale\AmazonSellingPartnerAPI\Models\VendorDirectFulfillmentOrders;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * OrderItem Class Doc Comment
 *
 * @category Class
 * @package  ClouSale\AmazonSellingPartnerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'item_sequence_number' => 'string',
        'buyer_product_identifier' => 'string',
        'vendor_product_identifier' => 'string',
        'title' => 'string',
        'ordered_quantity' => '\ClouSale\AmazonSellingPartnerAPI\Models\VendorDirectFulfillmentOrders\ItemQuantity',
        'scheduled_delivery_shipment' => '\ClouSale\AmazonSellingPartnerAPI\Models\VendorDirectFulfillmentOrders\ScheduledDeliveryShipment',
        'gift_details' => '\ClouSale\AmazonSellingPartnerAPI\Models\VendorDirectFulfillmentOrders\GiftDetails',
        'net_price' => '\ClouSale\AmazonSellingPartnerAPI\Models\VendorDirectFulfillmentOrders\Money',
        'tax_details' => '\ClouSale\AmazonSellingPartnerAPI\Models\VendorDirectFulfillmentOrders\OrderItemTaxDetails',
        'total_price' => '\ClouSale\AmazonSellingPartnerAPI\Models\VendorDirectFulfillmentOrders\Money'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'item_sequence_number' => null,
        'buyer_product_identifier' => null,
        'vendor_product_identifier' => null,
        'title' => null,
        'ordered_quantity' => null,
        'scheduled_delivery_shipment' => null,
        'gift_details' => null,
        'net_price' => null,
        'tax_details' => null,
        'total_price' => null
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
        'item_sequence_number' => 'itemSequenceNumber',
        'buyer_product_identifier' => 'buyerProductIdentifier',
        'vendor_product_identifier' => 'vendorProductIdentifier',
        'title' => 'title',
        'ordered_quantity' => 'orderedQuantity',
        'scheduled_delivery_shipment' => 'scheduledDeliveryShipment',
        'gift_details' => 'giftDetails',
        'net_price' => 'netPrice',
        'tax_details' => 'taxDetails',
        'total_price' => 'totalPrice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_sequence_number' => 'setItemSequenceNumber',
        'buyer_product_identifier' => 'setBuyerProductIdentifier',
        'vendor_product_identifier' => 'setVendorProductIdentifier',
        'title' => 'setTitle',
        'ordered_quantity' => 'setOrderedQuantity',
        'scheduled_delivery_shipment' => 'setScheduledDeliveryShipment',
        'gift_details' => 'setGiftDetails',
        'net_price' => 'setNetPrice',
        'tax_details' => 'setTaxDetails',
        'total_price' => 'setTotalPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_sequence_number' => 'getItemSequenceNumber',
        'buyer_product_identifier' => 'getBuyerProductIdentifier',
        'vendor_product_identifier' => 'getVendorProductIdentifier',
        'title' => 'getTitle',
        'ordered_quantity' => 'getOrderedQuantity',
        'scheduled_delivery_shipment' => 'getScheduledDeliveryShipment',
        'gift_details' => 'getGiftDetails',
        'net_price' => 'getNetPrice',
        'tax_details' => 'getTaxDetails',
        'total_price' => 'getTotalPrice'
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
        $this->container['item_sequence_number'] = isset($data['item_sequence_number']) ? $data['item_sequence_number'] : null;
        $this->container['buyer_product_identifier'] = isset($data['buyer_product_identifier']) ? $data['buyer_product_identifier'] : null;
        $this->container['vendor_product_identifier'] = isset($data['vendor_product_identifier']) ? $data['vendor_product_identifier'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['ordered_quantity'] = isset($data['ordered_quantity']) ? $data['ordered_quantity'] : null;
        $this->container['scheduled_delivery_shipment'] = isset($data['scheduled_delivery_shipment']) ? $data['scheduled_delivery_shipment'] : null;
        $this->container['gift_details'] = isset($data['gift_details']) ? $data['gift_details'] : null;
        $this->container['net_price'] = isset($data['net_price']) ? $data['net_price'] : null;
        $this->container['tax_details'] = isset($data['tax_details']) ? $data['tax_details'] : null;
        $this->container['total_price'] = isset($data['total_price']) ? $data['total_price'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['item_sequence_number'] === null) {
            $invalidProperties[] = "'item_sequence_number' can't be null";
        }
        if ($this->container['ordered_quantity'] === null) {
            $invalidProperties[] = "'ordered_quantity' can't be null";
        }
        if ($this->container['net_price'] === null) {
            $invalidProperties[] = "'net_price' can't be null";
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
     * Gets item_sequence_number
     *
     * @return string
     */
    public function getItemSequenceNumber()
    {
        return $this->container['item_sequence_number'];
    }

    /**
     * Sets item_sequence_number
     *
     * @param string $item_sequence_number Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on.
     *
     * @return $this
     */
    public function setItemSequenceNumber($item_sequence_number)
    {
        $this->container['item_sequence_number'] = $item_sequence_number;

        return $this;
    }

    /**
     * Gets buyer_product_identifier
     *
     * @return string
     */
    public function getBuyerProductIdentifier()
    {
        return $this->container['buyer_product_identifier'];
    }

    /**
     * Sets buyer_product_identifier
     *
     * @param string $buyer_product_identifier Buyer's standard identification number (ASIN) of an item.
     *
     * @return $this
     */
    public function setBuyerProductIdentifier($buyer_product_identifier)
    {
        $this->container['buyer_product_identifier'] = $buyer_product_identifier;

        return $this;
    }

    /**
     * Gets vendor_product_identifier
     *
     * @return string
     */
    public function getVendorProductIdentifier()
    {
        return $this->container['vendor_product_identifier'];
    }

    /**
     * Sets vendor_product_identifier
     *
     * @param string $vendor_product_identifier The vendor selected product identification of the item.
     *
     * @return $this
     */
    public function setVendorProductIdentifier($vendor_product_identifier)
    {
        $this->container['vendor_product_identifier'] = $vendor_product_identifier;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title for the item.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets ordered_quantity
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\VendorDirectFulfillmentOrders\ItemQuantity
     */
    public function getOrderedQuantity()
    {
        return $this->container['ordered_quantity'];
    }

    /**
     * Sets ordered_quantity
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\VendorDirectFulfillmentOrders\ItemQuantity $ordered_quantity Item quantity ordered.
     *
     * @return $this
     */
    public function setOrderedQuantity($ordered_quantity)
    {
        $this->container['ordered_quantity'] = $ordered_quantity;

        return $this;
    }

    /**
     * Gets scheduled_delivery_shipment
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\VendorDirectFulfillmentOrders\ScheduledDeliveryShipment
     */
    public function getScheduledDeliveryShipment()
    {
        return $this->container['scheduled_delivery_shipment'];
    }

    /**
     * Sets scheduled_delivery_shipment
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\VendorDirectFulfillmentOrders\ScheduledDeliveryShipment $scheduled_delivery_shipment Details for the scheduled delivery shipment.
     *
     * @return $this
     */
    public function setScheduledDeliveryShipment($scheduled_delivery_shipment)
    {
        $this->container['scheduled_delivery_shipment'] = $scheduled_delivery_shipment;

        return $this;
    }

    /**
     * Gets gift_details
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\VendorDirectFulfillmentOrders\GiftDetails
     */
    public function getGiftDetails()
    {
        return $this->container['gift_details'];
    }

    /**
     * Sets gift_details
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\VendorDirectFulfillmentOrders\GiftDetails $gift_details Gift message and wrapId details.
     *
     * @return $this
     */
    public function setGiftDetails($gift_details)
    {
        $this->container['gift_details'] = $gift_details;

        return $this;
    }

    /**
     * Gets net_price
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\VendorDirectFulfillmentOrders\Money
     */
    public function getNetPrice()
    {
        return $this->container['net_price'];
    }

    /**
     * Sets net_price
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\VendorDirectFulfillmentOrders\Money $net_price Net price (before tax) to vendor with currency details.
     *
     * @return $this
     */
    public function setNetPrice($net_price)
    {
        $this->container['net_price'] = $net_price;

        return $this;
    }

    /**
     * Gets tax_details
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\VendorDirectFulfillmentOrders\OrderItemTaxDetails
     */
    public function getTaxDetails()
    {
        return $this->container['tax_details'];
    }

    /**
     * Sets tax_details
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\VendorDirectFulfillmentOrders\OrderItemTaxDetails $tax_details tax_details
     *
     * @return $this
     */
    public function setTaxDetails($tax_details)
    {
        $this->container['tax_details'] = $tax_details;

        return $this;
    }

    /**
     * Gets total_price
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\VendorDirectFulfillmentOrders\Money
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\VendorDirectFulfillmentOrders\Money $total_price The price to Amazon each (cost).
     *
     * @return $this
     */
    public function setTotalPrice($total_price)
    {
        $this->container['total_price'] = $total_price;

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


