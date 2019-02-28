# SubAccount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**public_account_id** | **string** | Public key for limited access to your account such as contact/add so you can use it safely on public websites. | 
**api_key** | **string** | ApiKey that gives you access to our SMTP and HTTP API&#39;s. | 
**email** | **string** | Proper email address. | 
**pool_name** | **string** | Name of your custom IP Pool to be used in the sending process | 
**last_activity** | **string** | Date of last activity on account | 
**email_credits** | **string** | Amount of email credits | 
**requires_email_credits** | **bool** | True, if account needs credits to send emails. Otherwise, false | 
**monthly_refill_credits** | **double** | Amount of credits added to account automatically | 
**enable_private_ip_request** | **bool** | True, if account can request for private IP on its own. Otherwise, false | 
**total_emails_sent** | **int** | Amount of emails sent from this account | 
**unknown_users_percent** | **double** | Percent of Unknown users - users that couldn&#39;t be found | 
**abuse_percent** | **double** | Percent of Complaining users - those, who do not want to receive email from you. | 
**failed_spam_percent** | **double** | Percent of Bounced users | 
**reputation** | **double** | Numeric reputation | 
**daily_send_limit** | **int** | Amount of emails account can send daily | 
**status** | **string** | Name of account&#39;s status: Deleted, Disabled, UnderReview, NoPaymentsAllowed, NeverSignedIn, Active, SystemPaused | 
**email_size_limit** | **int** | Maximum size of email including attachments in MB&#39;s | 
**max_contacts** | **int** | Maximum number of contacts the account can have | 
**sending_permission** | **string** | Sending permission setting for account | 
**has_modify2_fa** | **bool** |  | 
**contacts_count** | **int** |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


