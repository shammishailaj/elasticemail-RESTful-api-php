# QuickAddPayload

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contacts** | [**\Swagger\Client\Model\ContactPayload[]**](ContactPayload.md) |  | 
**list_name** | **string** | Name of your list. | 
**status** | **string** | Name of status: Active, Engaged, Inactive, Abuse, Bounced, Unsubscribed. | 
**notify_email** | **string** | Emails, separated by semicolon, to which the notification about contact subscribing should be sent to | 
**consent_date** | [**\DateTime**](\DateTime.md) | Date of consent to send this contact(s) your email. If not provided current date is used for consent. | [optional] 
**consent_ip** | **string** | IP address of consent to send this contact(s) your email. If not provided your current public IP address is used for consent. | 
**consent_tracking** | **string** |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


