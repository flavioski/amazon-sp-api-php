# OrderDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_order_date** | [**\DateTime**](\DateTime.md) | The date the purchase order was placed. Must be in ISO-8601 date/time format. | 
**purchase_order_changed_date** | [**\DateTime**](\DateTime.md) | The date when purchase order was last changed by Amazon after the order was placed. This date will be greater than &#39;purchaseOrderDate&#39;. This means the PO data was changed on that date and vendors are required to fulfill the  updated PO. The PO changes can be related to Item Quantity, Ship to Location, Ship Window etc. This field will not be present in orders that have not changed after creation. Must be in ISO-8601 date/time format. | [optional] 
**purchase_order_state_changed_date** | [**\DateTime**](\DateTime.md) | The date when current purchase order state was changed. Current purchase order state is available in the field &#39;purchaseOrderState&#39;. Must be in ISO-8601 date/time format. | 
**purchase_order_type** | **string** | Type of purchase order. | [optional] 
**import_details** | [**\Swagger\Client\Model\ImportDetails**](ImportDetails.md) | If the purchase order is an import order, the details for the import order. | [optional] 
**deal_code** | **string** | If requested by the recipient, this field will contain a promotional/deal number. The discount code line is optional. It is used to obtain a price discount on items on the order. | [optional] 
**payment_method** | **string** | Payment method used. | [optional] 
**buying_party** | [**\Swagger\Client\Model\PartyIdentification**](PartyIdentification.md) | Name/Address and tax details of the buying party. | [optional] 
**selling_party** | [**\Swagger\Client\Model\PartyIdentification**](PartyIdentification.md) | Name/Address and tax details of the selling party. | [optional] 
**ship_to_party** | [**\Swagger\Client\Model\PartyIdentification**](PartyIdentification.md) | Name/Address and tax details of the ship to party. | [optional] 
**bill_to_party** | [**\Swagger\Client\Model\PartyIdentification**](PartyIdentification.md) | Name/Address and tax details of the bill to party. | [optional] 
**ship_window** | [**\Swagger\Client\Model\DateTimeInterval**](DateTimeInterval.md) | This indicates the ship window. Format is start and end date separated by double hyphen (--). For example, 2007-03-01T13:00:00Z--2007-03-11T15:30:00Z. | [optional] 
**delivery_window** | [**\Swagger\Client\Model\DateTimeInterval**](DateTimeInterval.md) | This indicates the delivery window. Format is start and end date separated by double hyphen (--). For example, 2007-03-01T13:00:00Z--2007-03-11T15:30:00Z. | [optional] 
**items** | [**\Swagger\Client\Model\OrderItem[]**](OrderItem.md) | A list of items in this purchase order. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


