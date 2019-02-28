# MoveToListPayload

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**new_list_name** | **string** | Name of your list if you want to change it. | 
**statuses** | **string[]** | List of comma separated message statuses: 0 for all, 1 for ReadyToSend, 2 for InProgress, 4 for Bounced, 5 for Sent, 6 for Opened, 7 for Clicked, 8 for Unsubscribed, 9 for Abuse Report | 
**emails** | **string[]** | Comma delimited list of contact emails | 
**all_contacts** | **bool** | True: Include every Contact in your Account. Otherwise, false | [optional] 
**rule** | **string** | Query used for filtering. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


