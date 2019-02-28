# CampaignTemplate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Filename | 
**status** | **string** | Name of status: Active, Engaged, Inactive, Abuse, Bounced, Unsubscribed. | 
**poolname** | **string** | Name of your custom IP Pool to be used in the sending process | 
**template_name** | **string** | Name of template. | 
**utm** | [**\Swagger\Client\Model\UtmTracking**](UtmTracking.md) |  | 
**body** | [**\Swagger\Client\Model\CampaignBody**](CampaignBody.md) |  | 
**sender** | [**\Swagger\Client\Model\Sender**](Sender.md) |  | 
**attachments** | [**\Swagger\Client\Model\MessageAttachment[]**](MessageAttachment.md) | Attachment files. These files should be provided with the POST multipart file upload, not directly in the request&#39;s URL. Should also include merge CSV file | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


