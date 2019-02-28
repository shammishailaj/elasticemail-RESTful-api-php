# SubAccountSettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Proper email address. | 
**requires_email_credits** | **bool** | True, if account needs credits to send emails. Otherwise, false | 
**monthly_refill_credits** | **double** | Amount of credits added to account automatically | 
**email_size_limit** | **int** | Maximum size of email including attachments in MB&#39;s | 
**daily_send_limit** | **int** | Amount of emails account can send daily | 
**max_contacts** | **int** | Maximum number of contacts the account can have | 
**enable_private_ip_request** | **bool** | True, if account can request for private IP on its own. Otherwise, false | 
**enable_contact_features** | **bool** | True, if you want to use Contact Delivery Tools.  Otherwise, false | 
**sending_permission** | **string** | Sending permission setting for account | 
**pool_name** | **string** | Name of your custom IP Pool to be used in the sending process | 
**public_account_id** | **string** | Public key for limited access to your account such as contact/add so you can use it safely on public websites. | 
**allow2_fa** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


