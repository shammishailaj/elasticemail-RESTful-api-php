# EmailJobStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID number of your attachment | 
**status** | **string** | Name of status: submitted, complete, in_progress | 
**recipients_count** | **int** |  | 
**failed** | [**\Swagger\Client\Model\EmailJobFailedStatus[]**](EmailJobFailedStatus.md) |  | 
**failed_count** | **int** | Total emails failed. | 
**sent** | **string[]** |  | 
**sent_count** | **int** | Total emails sent. | 
**delivered** | **string[]** | Number of delivered messages | 
**delivered_count** | **int** |  | 
**pending** | **string[]** |  | 
**pending_count** | **int** |  | 
**opened** | **string[]** | Number of opened messages | 
**opened_count** | **int** | Total emails opened. | 
**clicked** | **string[]** | Number of clicked messages | 
**clicked_count** | **int** | Total emails clicked | 
**unsubscribed** | **string[]** | Number of unsubscribed messages | 
**unsubscribed_count** | **int** | Total emails unsubscribed | 
**abuse_reports** | **string[]** |  | 
**abuse_reports_count** | **int** |  | 
**message_i_ds** | **string[]** | List of all MessageIDs for this job. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


