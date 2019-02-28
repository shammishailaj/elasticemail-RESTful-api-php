# ContactUpdatePayload

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Proper email address. | 
**first_name** | **string** | First name. | 
**activate** | **bool** | True, if Contact should be activated. Otherwise, false | [optional] 
**last_name** | **string** | Last name. | 
**field** | **map[string,string]** |  | 
**custom_fields** | **string** | Custom contact field like firstname, lastname, city etc. JSON serialized text like { \&quot;city\&quot;:\&quot;london\&quot; } | 
**clear_rest_of_fields** | **bool** | States if the fields that were omitted in this request are to be reset or should they be left with their current value | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


