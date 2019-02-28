# Recipient

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_sms** | **bool** | True, if message is SMS. Otherwise, false | 
**msg_id** | **string** | ID number of selected message. | 
**to** | **string** | Ending date for search in YYYY-MM-DDThh:mm:ss format. | 
**status** | **string** | Name of recipient&#39;s status: Submitted, ReadyToSend, WaitingToRetry, Sending, Bounced, Sent, Opened, Clicked, Unsubscribed, AbuseReport | 
**channel** | **string** | Name of selected Channel. | 
**date** | **string** | Creation date | 
**date_sent** | **string** | Date when the email was sent | 
**date_opened** | **string** | Date when the email changed the status to &#39;opened&#39; | 
**date_clicked** | **string** | Date when the email changed the status to &#39;clicked&#39; | 
**message** | **string** | Content of message, HTML encoded | 
**show_category** | **bool** | True, if message category should be shown. Otherwise, false | 
**message_category** | **string** | Name of message category | 
**message_category_id** | **string** | ID of message category | [optional] 
**status_change_date** | **string** | Date of last status change. | 
**next_try_on** | **string** | Date of next try | 
**subject** | **string** | Default subject of email. | 
**from_email** | **string** | Default From: email address. | 
**envelope_from** | **string** |  | 
**job_id** | **string** | ID of certain mail job | 
**sms_update_required** | **bool** | True, if message is a SMS and status is not yet confirmed. Otherwise, false | 
**text_message** | **string** | Content of message | 
**message_sid** | **string** | Comma separated ID numbers of messages. | 
**contact_last_error** | **string** | Recipient&#39;s last bounce error because of which this e-mail was suppressed | 
**ip_address** | **string** |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


