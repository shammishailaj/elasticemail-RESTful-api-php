# EmailStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | Email address this email was sent from. | 
**to** | **string** | Email address this email was sent to. | 
**date** | [**\DateTime**](\DateTime.md) | Date the email was submitted. | 
**status** | **string** | Value of email&#39;s status | 
**status_name** | **string** | Name of email&#39;s status | 
**status_change_date** | [**\DateTime**](\DateTime.md) | Date of last status change. | 
**date_sent** | [**\DateTime**](\DateTime.md) | Date when the email was sent | 
**date_opened** | [**\DateTime**](\DateTime.md) | Date when the email changed the status to &#39;opened&#39; | [optional] 
**date_clicked** | [**\DateTime**](\DateTime.md) | Date when the email changed the status to &#39;clicked&#39; | [optional] 
**error_message** | **string** | Detailed error or bounced message. | 
**transaction_id** | **string** | ID number of transaction | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


