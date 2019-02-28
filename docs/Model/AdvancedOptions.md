# AdvancedOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enable_click_tracking** | **bool** | True, if you want to track clicks. Otherwise, false | 
**enable_link_click_tracking** | **bool** | True, if you want to track by link tracking. Otherwise, false | 
**enable_template_scripting** | **bool** | True, if you want to use template scripting in your emails {{}}. Otherwise, false | 
**auto_text_format** | **bool** | True, if text BODY of message should be created automatically. Otherwise, false | 
**email_notification_for_error** | **bool** | True, if you want bounce notifications returned. Otherwise, false | 
**low_credit_notification** | **bool** | True, if you want to receive low credit email notifications. Otherwise, false | 
**is_sub_account** | **bool** | True, if this account is a sub-account. Otherwise, false | 
**is_owned_by_reseller** | **bool** | True, if this account resells Elastic Email. Otherwise, false. | 
**enable_unsubscribe_header** | **bool** | True, if you want to enable list-unsubscribe header. Otherwise, false | 
**manage_subscriptions** | **bool** | True, if you want to display your labels on your unsubscribe form. Otherwise, false | 
**manage_subscribed_only** | **bool** | True, if you want to only display labels that the contact is subscribed to on your unsubscribe form. Otherwise, false | 
**transactional_on_unsubscribe** | **bool** | True, if you want to display an option for the contact to opt into transactional email only on your unsubscribe form. Otherwise, false | 
**consent_tracking_on_unsubscribe** | **bool** |  | 
**preview_message_id** | **string** |  | 
**allow_custom_headers** | **bool** | True, if you want to apply custom headers to your emails. Otherwise, false | 
**bcc_email** | **string** | Email address to send a copy of all email to. | 
**content_transfer_encoding** | **string** | Type of content encoding | 
**email_notification** | **string** | True, if you want to receive bounce email notifications. Otherwise, false | 
**notifications_emails** | **string** | Email addresses to send a copy of all notifications from our system. Separated by semicolon | 
**unsubscribe_notification_emails** | **string** | Emails, separated by semicolon, to which the notification about contact unsubscribing should be sent to | 
**enable_ui_tooltips** | **bool** | True, if account has tooltips active. Otherwise, false | 
**enable_contact_features** | **bool** | True, if you want to use Contact Delivery Tools.  Otherwise, false | 
**logo_url** | **string** | URL to your logo image. | 
**stale_contact_score** | **int** | (0 means this functionality is NOT enabled) Score, depending on the number of times you have sent to a recipient, at which the given recipient should be moved to the Stale status | 
**stale_contact_inactive_days** | **int** | (0 means this functionality is NOT enabled) Number of days of inactivity for a contact after which the given recipient should be moved to the Stale status | 
**delivery_reason** | **string** | Why your clients are receiving your emails. | 
**tutorials_enabled** | **bool** | True, if you want to enable Dashboard Tutotials | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


