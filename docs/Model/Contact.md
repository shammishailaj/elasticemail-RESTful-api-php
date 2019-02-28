# Contact

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact_score** | **int** |  | 
**date_added** | [**\DateTime**](\DateTime.md) | Date of creation in YYYY-MM-DDThh:ii:ss format | 
**email** | **string** | Proper email address. | 
**first_name** | **string** | First name. | 
**last_name** | **string** | Last name. | 
**status** | **string** | Name of status: Active, Engaged, Inactive, Abuse, Bounced, Unsubscribed. | 
**bounced_error_code** | **int** | RFC Error code | [optional] 
**bounced_error_message** | **string** | RFC error message | 
**total_sent** | **int** | Total emails sent. | 
**total_failed** | **int** | Total emails failed. | 
**total_opened** | **int** | Total emails opened. | 
**total_clicked** | **int** | Total emails clicked | 
**first_failed_date** | [**\DateTime**](\DateTime.md) | Date of first failed message | [optional] 
**last_failed_count** | **int** | Number of fails in sending to this Contact | 
**date_updated** | [**\DateTime**](\DateTime.md) | Last change date | 
**source** | **string** | Source of URL of payment | 
**error_code** | **int** | RFC Error code | [optional] 
**friendly_error_message** | **string** | RFC error message | 
**created_from_ip** | **string** | IP address | 
**consent_ip** | **string** | IP address of consent to send this contact(s) your email. If not provided your current public IP address is used for consent. | 
**consent_date** | [**\DateTime**](\DateTime.md) | Date of consent to send this contact(s) your email. If not provided current date is used for consent. | [optional] 
**consent_tracking** | **string** |  | 
**unsubscribed_date** | [**\DateTime**](\DateTime.md) | Unsubscribed date in YYYY-MM-DD format | [optional] 
**notes** | **string** | Free form field of notes | 
**website_url** | **string** | Website of contact | 
**last_opened** | [**\DateTime**](\DateTime.md) | Date this contact last opened an email | [optional] 
**last_clicked** | [**\DateTime**](\DateTime.md) |  | [optional] 
**custom_fields** | **map[string,string]** |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


