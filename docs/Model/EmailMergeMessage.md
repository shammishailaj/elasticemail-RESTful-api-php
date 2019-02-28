# EmailMergeMessage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recipients** | [**\Swagger\Client\Model\MergeRecipient**](MergeRecipient.md) |  | 
**body** | [**\Swagger\Client\Model\Body**](Body.md) |  | 
**sender** | [**\Swagger\Client\Model\Sender**](Sender.md) |  | 
**template_name** | **string** | Name of template. | 
**attachments** | [**\Swagger\Client\Model\MessageAttachment[]**](MessageAttachment.md) | Attachment files. These files should be provided with the POST multipart file upload, not directly in the request&#39;s URL. Should also include merge CSV file | 
**tracking** | [**\Swagger\Client\Model\TrackingOptions**](TrackingOptions.md) |  | 
**merge_fields** | **map[string,string]** |  | 
**headers** | **map[string,string]** |  | 
**postback** | **string** |  | 
**encoding** | [**\Swagger\Client\Model\EncodingSettings**](EncodingSettings.md) |  | 
**options** | [**\Swagger\Client\Model\Options**](Options.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


