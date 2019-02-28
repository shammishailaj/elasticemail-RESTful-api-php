# AccountCore

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**public_account_id** | **string** | Public key for limited access to your account such as contact/add so you can use it safely on public websites. | 
**api_key** | **string** | ApiKey that gives you access to our SMTP and HTTP API&#39;s. | 
**is_sub** | **bool** | True, if account is a subaccount. Otherwise, false | 
**is_user** | **bool** |  | 
**status_number** | **int** | Number of status: 1 - Active | 
**status_formatted** | **string** | Account status: Active | 
**payment_form_url** | **string** | URL form for payments. | 
**enable_private_branding** | **bool** | True: Turn on or off ability to send mails under your brand. Otherwise, false | 
**support_link** | **string** | Address to your support. | 
**private_branding_url** | **string** | Subdomain for your rebranded service | 
**affiliate_link** | **string** | URL for affiliating. | 
**monthly_emails_sent** | **int** | Amount of emails sent from this account | [optional] 
**email_credits** | **int** | Amount of email credits | 
**price_per_email** | **float** | Amount of emails sent from this account | 
**account_payment_url** | **string** | URL for making payments. | 
**smtp** | **string** | Address of SMTP server. | 
**smtp_alternative** | **string** | Address of alternative SMTP server. | 
**auto_credit_status** | **string** | Status of automatic payments configuration. | 
**auto_credit_level** | **float** | When AutoCreditStatus is Enabled, the credit level that triggers the credit to be recharged. | 
**auto_credit_amount** | **float** | When AutoCreditStatus is Enabled, the amount of credit to be recharged. | 
**daily_send_limit** | **int** | Amount of emails account can send daily | 
**date_created** | [**\DateTime**](\DateTime.md) | Creation date. | 
**link_tracking** | **bool** | True, if you have enabled link tracking. Otherwise, false | 
**content_transfer_encoding** | **string** | Type of content encoding | 
**needs_sms_verification** | **bool** |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


