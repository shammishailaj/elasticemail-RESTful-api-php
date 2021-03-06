# SwaggerClient-php
Send your emails with ElasticEmail API

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 3.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->accountsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.elasticemail.com/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**accountsGet**](docs/Api/AccountsApi.md#accountsget) | **GET** /accounts | Loads your account. Returns detailed information about your account.
*AccountsApi* | [**accountsPut**](docs/Api/AccountsApi.md#accountsput) | **PUT** /accounts | Update your Account
*AuthApi* | [**authPost**](docs/Api/AuthApi.md#authpost) | **POST** /auth | Log into your account
*CampaignsApi* | [**campaignsAbsplitGet**](docs/Api/CampaignsApi.md#campaignsabsplitget) | **GET** /campaigns/absplit | List all of your A/X campaigns
*CampaignsApi* | [**campaignsAbsplitNameDelete**](docs/Api/CampaignsApi.md#campaignsabsplitnamedelete) | **DELETE** /campaigns/absplit/{name} | 
*CampaignsApi* | [**campaignsAbsplitNameGet**](docs/Api/CampaignsApi.md#campaignsabsplitnameget) | **GET** /campaigns/absplit/{name} | 
*CampaignsApi* | [**campaignsAbsplitNamePut**](docs/Api/CampaignsApi.md#campaignsabsplitnameput) | **PUT** /campaigns/absplit/{name} | Updates a previously added campaign.  Only Active and Paused campaigns can be updated.
*CampaignsApi* | [**campaignsAbsplitPost**](docs/Api/CampaignsApi.md#campaignsabsplitpost) | **POST** /campaigns/absplit | 
*CampaignsApi* | [**campaignsAllGet**](docs/Api/CampaignsApi.md#campaignsallget) | **GET** /campaigns/all | 
*CampaignsApi* | [**campaignsAutomatedGet**](docs/Api/CampaignsApi.md#campaignsautomatedget) | **GET** /campaigns/automated | List all of your automated campaigns
*CampaignsApi* | [**campaignsAutomatedNameDelete**](docs/Api/CampaignsApi.md#campaignsautomatednamedelete) | **DELETE** /campaigns/automated/{name} | 
*CampaignsApi* | [**campaignsAutomatedNameGet**](docs/Api/CampaignsApi.md#campaignsautomatednameget) | **GET** /campaigns/automated/{name} | 
*CampaignsApi* | [**campaignsAutomatedNamePut**](docs/Api/CampaignsApi.md#campaignsautomatednameput) | **PUT** /campaigns/automated/{name} | Updates a previously added campaign.  Only Active and Paused campaigns can be updated.
*CampaignsApi* | [**campaignsAutomatedPost**](docs/Api/CampaignsApi.md#campaignsautomatedpost) | **POST** /campaigns/automated | 
*CampaignsApi* | [**campaignsNameCancelPost**](docs/Api/CampaignsApi.md#campaignsnamecancelpost) | **POST** /campaigns/{name}/cancel | Cancels emails that are waiting to be sent.
*CampaignsApi* | [**campaignsSendnowGet**](docs/Api/CampaignsApi.md#campaignssendnowget) | **GET** /campaigns/sendnow | List all of your instant campaigns
*CampaignsApi* | [**campaignsSendnowNameDelete**](docs/Api/CampaignsApi.md#campaignssendnownamedelete) | **DELETE** /campaigns/sendnow/{name} | 
*CampaignsApi* | [**campaignsSendnowNameGet**](docs/Api/CampaignsApi.md#campaignssendnownameget) | **GET** /campaigns/sendnow/{name} | Retrieves an existing campaign.
*CampaignsApi* | [**campaignsSendnowNamePut**](docs/Api/CampaignsApi.md#campaignssendnownameput) | **PUT** /campaigns/sendnow/{name} | Updates a previously added campaign.  Only Active and Paused campaigns can be updated.
*CampaignsApi* | [**campaignsSendnowPost**](docs/Api/CampaignsApi.md#campaignssendnowpost) | **POST** /campaigns/sendnow | 
*CampaignsApi* | [**campaignsTasksExportGet**](docs/Api/CampaignsApi.md#campaignstasksexportget) | **GET** /campaigns/tasks/export | Export selected campaigns to chosen file format.
*ChannelsApi* | [**channelsGet**](docs/Api/ChannelsApi.md#channelsget) | **GET** /channels | List all of your channels
*ChannelsApi* | [**channelsNameCancelPost**](docs/Api/ChannelsApi.md#channelsnamecancelpost) | **POST** /channels/{name}/cancel | Cancel the emails being sent with this channel
*ChannelsApi* | [**channelsNameDelete**](docs/Api/ChannelsApi.md#channelsnamedelete) | **DELETE** /channels/{name} | Delete the channel.
*ChannelsApi* | [**channelsNameGet**](docs/Api/ChannelsApi.md#channelsnameget) | **GET** /channels/{name} | Retrieve an existing channel.
*ChannelsApi* | [**channelsNamePut**](docs/Api/ChannelsApi.md#channelsnameput) | **PUT** /channels/{name} | Rename an existing channel.
*ChannelsApi* | [**channelsPost**](docs/Api/ChannelsApi.md#channelspost) | **POST** /channels | Manually add a channel to your account to group email
*ChannelsApi* | [**channelsTasksExportGet**](docs/Api/ChannelsApi.md#channelstasksexportget) | **GET** /channels/tasks/export | Export selected channels to chosen file format.
*ContactsApi* | [**contactsDelete**](docs/Api/ContactsApi.md#contactsdelete) | **DELETE** /contacts | Permanantly deletes the contacts provided.  You can provide either a qualified rule or a list of emails (comma separated string).
*ContactsApi* | [**contactsEmailGet**](docs/Api/ContactsApi.md#contactsemailget) | **GET** /contacts/{email} | Load detailed contact information
*ContactsApi* | [**contactsEmailHistoryGet**](docs/Api/ContactsApi.md#contactsemailhistoryget) | **GET** /contacts/{email}/history | Shows detailed history of chosen Contact.
*ContactsApi* | [**contactsEmailPut**](docs/Api/ContactsApi.md#contactsemailput) | **PUT** /contacts/{email} | Update selected contact. Omitted contact&#39;s fields will be reset by default (see the clearRestOfFields parameter)
*ContactsApi* | [**contactsGet**](docs/Api/ContactsApi.md#contactsget) | **GET** /contacts | List of all contacts. If you have not specified RULE, all Contacts will be listed.
*ContactsApi* | [**contactsPost**](docs/Api/ContactsApi.md#contactspost) | **POST** /contacts | Add new Contact to one of your Lists.
*ContactsApi* | [**contactsStatsGet**](docs/Api/ContactsApi.md#contactsstatsget) | **GET** /contacts/stats | Returns number of Contacts, RULE specifies contact Status.
*ContactsApi* | [**contactsTasksExportGet**](docs/Api/ContactsApi.md#contactstasksexportget) | **GET** /contacts/tasks/export | Export selected Contacts to file.
*ContactsApi* | [**contactsTasksImportPost**](docs/Api/ContactsApi.md#contactstasksimportpost) | **POST** /contacts/tasks/import | Upload contacts from a file.
*DomainsApi* | [**domainsDomainDelete**](docs/Api/DomainsApi.md#domainsdomaindelete) | **DELETE** /domains/{domain} | Deletes configured domain from account
*DomainsApi* | [**domainsDomainGet**](docs/Api/DomainsApi.md#domainsdomainget) | **GET** /domains/{domain} | Retrieve a domain configured for this account.
*DomainsApi* | [**domainsDomainPut**](docs/Api/DomainsApi.md#domainsdomainput) | **PUT** /domains/{domain} | Update the selected Domain
*DomainsApi* | [**domainsDomainVerificationPut**](docs/Api/DomainsApi.md#domainsdomainverificationput) | **PUT** /domains/{domain}/verification | Verification of domain records
*DomainsApi* | [**domainsGet**](docs/Api/DomainsApi.md#domainsget) | **GET** /domains | Lists all domains configured for this account.
*DomainsApi* | [**domainsPost**](docs/Api/DomainsApi.md#domainspost) | **POST** /domains | Add new domain to account
*EmailsApi* | [**emailsMergePost**](docs/Api/EmailsApi.md#emailsmergepost) | **POST** /emails/merge | Send bulk merge email
*EmailsApi* | [**emailsMsgidViewGet**](docs/Api/EmailsApi.md#emailsmsgidviewget) | **GET** /emails/{msgid}/view | View email
*EmailsApi* | [**emailsTransactionalPost**](docs/Api/EmailsApi.md#emailstransactionalpost) | **POST** /emails/transactional | Send transactional message (recipients will be known to each other)
*EmailsApi* | [**emailsTransactionidCancelPost**](docs/Api/EmailsApi.md#emailstransactionidcancelpost) | **POST** /emails/{transactionid}/cancel | Cancels emails that are waiting to be sent.
*EmailsApi* | [**emailsTransactionidStatusGet**](docs/Api/EmailsApi.md#emailstransactionidstatusget) | **GET** /emails/{transactionid}/status | Get email batch status
*FilesApi* | [**filesFilenameDelete**](docs/Api/FilesApi.md#filesfilenamedelete) | **DELETE** /files/{filename} | Permanently deletes the file from your account
*FilesApi* | [**filesFilenameGet**](docs/Api/FilesApi.md#filesfilenameget) | **GET** /files/{filename} | Gets content of the chosen File
*FilesApi* | [**filesFilenameInfoGet**](docs/Api/FilesApi.md#filesfilenameinfoget) | **GET** /files/{filename}/info | Gets chosen File info
*FilesApi* | [**filesGet**](docs/Api/FilesApi.md#filesget) | **GET** /files | Lists all your available files
*FilesApi* | [**filesPost**](docs/Api/FilesApi.md#filespost) | **POST** /files | Uploads selected file to the server using http form upload format (MIME multipart/form-data) or PUT method.
*ListsApi* | [**listsFromcampaignPost**](docs/Api/ListsApi.md#listsfromcampaignpost) | **POST** /lists/fromcampaign | Create a new list from the recipients of the given campaign, using the given statuses of Messages
*ListsApi* | [**listsGet**](docs/Api/ListsApi.md#listsget) | **GET** /lists | Shows all your existing lists
*ListsApi* | [**listsListnameContactsDelete**](docs/Api/ListsApi.md#listslistnamecontactsdelete) | **DELETE** /lists/{listname}/contacts | Remove selected Contacts from your list
*ListsApi* | [**listsListnameContactsMovePut**](docs/Api/ListsApi.md#listslistnamecontactsmoveput) | **PUT** /lists/{listname}/contacts/move | Move selected contacts from one List to another
*ListsApi* | [**listsListnameContactsPut**](docs/Api/ListsApi.md#listslistnamecontactsput) | **PUT** /lists/{listname}/contacts | Add existing Contacts to chosen list
*ListsApi* | [**listsListnameDelete**](docs/Api/ListsApi.md#listslistnamedelete) | **DELETE** /lists/{listname} | Deletes List and removes all the Contacts from it (does not delete Contacts).
*ListsApi* | [**listsListnameGet**](docs/Api/ListsApi.md#listslistnameget) | **GET** /lists/{listname} | Returns detailed information about specific list.
*ListsApi* | [**listsListnamePut**](docs/Api/ListsApi.md#listslistnameput) | **PUT** /lists/{listname} | Update existing list
*ListsApi* | [**listsPost**](docs/Api/ListsApi.md#listspost) | **POST** /lists | Create new list, based on filtering rule or list of IDs
*ListsApi* | [**listsRandomPost**](docs/Api/ListsApi.md#listsrandompost) | **POST** /lists/random | Create a new list with randomized contacts from an existing list or segment
*PoolsApi* | [**poolsGet**](docs/Api/PoolsApi.md#poolsget) | **GET** /pools | Retrieve a list of Pools
*ReportsApi* | [**reportsBouncedGet**](docs/Api/ReportsApi.md#reportsbouncedget) | **GET** /reports/bounced | Returns bounced logs filtered by specified parameters.
*ReportsApi* | [**reportsEmailcreditsHistoryGet**](docs/Api/ReportsApi.md#reportsemailcreditshistoryget) | **GET** /reports/emailcredits/history | Lists email credits history
*ReportsApi* | [**reportsEventlogGet**](docs/Api/ReportsApi.md#reportseventlogget) | **GET** /reports/eventlog | Returns log of delivery events filtered by specified parameters.
*ReportsApi* | [**reportsEventsExportGet**](docs/Api/ReportsApi.md#reportseventsexportget) | **GET** /reports/events/export | Export delivery events log information to the specified file format.
*ReportsApi* | [**reportsExportGet**](docs/Api/ReportsApi.md#reportsexportget) | **GET** /reports/export | Export email log information to the specified file format.
*ReportsApi* | [**reportsGet**](docs/Api/ReportsApi.md#reportsget) | **GET** /reports | Returns logs filtered by specified parameters.
*ReportsApi* | [**reportsLinktrackingsExportGet**](docs/Api/ReportsApi.md#reportslinktrackingsexportget) | **GET** /reports/linktrackings/export | Export detailed link tracking information to the specified file format.
*ReportsApi* | [**reportsNotificationsGet**](docs/Api/ReportsApi.md#reportsnotificationsget) | **GET** /reports/notifications | Returns notification logs filtered by specified parameters.
*ReportsApi* | [**reportsPaymentsHistoryGet**](docs/Api/ReportsApi.md#reportspaymentshistoryget) | **GET** /reports/payments/history | Lists all payments
*ReportsApi* | [**reportsReferralsGet**](docs/Api/ReportsApi.md#reportsreferralsget) | **GET** /reports/referrals | Shows information about your referral details
*ReportsApi* | [**reportsReferralsPayoutHistoryGet**](docs/Api/ReportsApi.md#reportsreferralspayouthistoryget) | **GET** /reports/referrals/payout/history | Lists all referral payout history
*ReportsApi* | [**reportsReputationHistoryGet**](docs/Api/ReportsApi.md#reportsreputationhistoryget) | **GET** /reports/reputation/history | Shows latest changes in your sending reputation
*ReportsApi* | [**reportsSpamchecksHistoryGet**](docs/Api/ReportsApi.md#reportsspamcheckshistoryget) | **GET** /reports/spamchecks/history | Returns detailed spam check.
*ReportsApi* | [**reportsSummaryGet**](docs/Api/ReportsApi.md#reportssummaryget) | **GET** /reports/summary | Loads summary information about activity in chosen date range.
*SMSApi* | [**smsPost**](docs/Api/SMSApi.md#smspost) | **POST** /sms | Send a short SMS Message (maximum of 1600 characters) to any mobile phone.
*SecurityApi* | [**securityAccesstokensGet**](docs/Api/SecurityApi.md#securityaccesstokensget) | **GET** /security/accesstokens | Get AccessToken list.
*SecurityApi* | [**securityAccesstokensNameDelete**](docs/Api/SecurityApi.md#securityaccesstokensnamedelete) | **DELETE** /security/accesstokens/{name} | Permanently delete AccessToken.
*SecurityApi* | [**securityAccesstokensNameGet**](docs/Api/SecurityApi.md#securityaccesstokensnameget) | **GET** /security/accesstokens/{name} | Get AccessToken.
*SecurityApi* | [**securityAccesstokensNamePut**](docs/Api/SecurityApi.md#securityaccesstokensnameput) | **PUT** /security/accesstokens/{name} | Edit AccessToken.
*SecurityApi* | [**securityAccesstokensPost**](docs/Api/SecurityApi.md#securityaccesstokenspost) | **POST** /security/accesstokens | Add new AccessToken
*SegmentsApi* | [**segmentsGet**](docs/Api/SegmentsApi.md#segmentsget) | **GET** /segments | Lists all your available Segments
*SegmentsApi* | [**segmentsNameDelete**](docs/Api/SegmentsApi.md#segmentsnamedelete) | **DELETE** /segments/{name} | Delete existing segment.
*SegmentsApi* | [**segmentsNameGet**](docs/Api/SegmentsApi.md#segmentsnameget) | **GET** /segments/{name} | Lists your available Segment using the provided name
*SegmentsApi* | [**segmentsNamePut**](docs/Api/SegmentsApi.md#segmentsnameput) | **PUT** /segments/{name} | Rename or change RULE for your segment
*SegmentsApi* | [**segmentsPost**](docs/Api/SegmentsApi.md#segmentspost) | **POST** /segments | Create new segment, based on specified RULE.
*SubaccountsApi* | [**subaccountsEmailCreditsDelete**](docs/Api/SubaccountsApi.md#subaccountsemailcreditsdelete) | **DELETE** /subaccounts/{email}/credits | Remove email, template or litmus credits from a sub-account
*SubaccountsApi* | [**subaccountsEmailCreditsPost**](docs/Api/SubaccountsApi.md#subaccountsemailcreditspost) | **POST** /subaccounts/{email}/credits | Add email credits to a sub-account
*SubaccountsApi* | [**subaccountsEmailDelete**](docs/Api/SubaccountsApi.md#subaccountsemaildelete) | **DELETE** /subaccounts/{email} | Deletes specified Subaccount
*SubaccountsApi* | [**subaccountsEmailGet**](docs/Api/SubaccountsApi.md#subaccountsemailget) | **GET** /subaccounts/{email} | Retrieve info about one of your subaccounts
*SubaccountsApi* | [**subaccountsEmailSettingsGet**](docs/Api/SubaccountsApi.md#subaccountsemailsettingsget) | **GET** /subaccounts/{email}/settings | Loads settings of subaccount
*SubaccountsApi* | [**subaccountsEmailSettingsPut**](docs/Api/SubaccountsApi.md#subaccountsemailsettingsput) | **PUT** /subaccounts/{email}/settings | Updates settings of specified subaccount
*SubaccountsApi* | [**subaccountsGet**](docs/Api/SubaccountsApi.md#subaccountsget) | **GET** /subaccounts | Lists all of your subaccounts
*SubaccountsApi* | [**subaccountsPost**](docs/Api/SubaccountsApi.md#subaccountspost) | **POST** /subaccounts | Create new subaccount and provide most important data about it.
*TasksApi* | [**tasksGet**](docs/Api/TasksApi.md#tasksget) | **GET** /tasks | Returns a list of all background tasks data.
*TasksApi* | [**tasksIdDelete**](docs/Api/TasksApi.md#tasksiddelete) | **DELETE** /tasks/{id} | Delete the specified background task.
*TasksApi* | [**tasksIdStatusGet**](docs/Api/TasksApi.md#tasksidstatusget) | **GET** /tasks/{id}/status | Check the current status of the background task.
*TemplatesApi* | [**templatesNameDelete**](docs/Api/TemplatesApi.md#templatesnamedelete) | **DELETE** /templates/{name} | Delete template with the specified ID
*TemplatesApi* | [**templatesNameGet**](docs/Api/TemplatesApi.md#templatesnameget) | **GET** /templates/{name} | Load template with content
*TemplatesApi* | [**templatesNamePut**](docs/Api/TemplatesApi.md#templatesnameput) | **PUT** /templates/{name} | Update existing template, overwriting existing data.
*TemplatesApi* | [**templatesPost**](docs/Api/TemplatesApi.md#templatespost) | **POST** /templates | Create new Template. Needs to be sent using POST method
*TemplatesApi* | [**templatesTagsGet**](docs/Api/TemplatesApi.md#templatestagsget) | **GET** /templates/tags | Retrieve a list of your Tags
*TemplatesApi* | [**templatesTagsNameDelete**](docs/Api/TemplatesApi.md#templatestagsnamedelete) | **DELETE** /templates/tags/{name} | Delete a tag, removing it from all Templates
*TemplatesApi* | [**templatesTagsPost**](docs/Api/TemplatesApi.md#templatestagspost) | **POST** /templates/tags | Create a new Tag to be used in your Templates
*TemplatesApi* | [**templatesTypeListGet**](docs/Api/TemplatesApi.md#templatestypelistget) | **GET** /templates/{type}/list | Load a list of templates of a specified type
*WebhooksApi* | [**webhooksGet**](docs/Api/WebhooksApi.md#webhooksget) | **GET** /webhooks | Load notifications webhooks
*WebhooksApi* | [**webhooksPost**](docs/Api/WebhooksApi.md#webhookspost) | **POST** /webhooks | Add notifications webhook
*WebhooksApi* | [**webhooksPublicidDelete**](docs/Api/WebhooksApi.md#webhookspubliciddelete) | **DELETE** /webhooks/{publicid} | Delete notifications webhook
*WebhooksApi* | [**webhooksPublicidGet**](docs/Api/WebhooksApi.md#webhookspublicidget) | **GET** /webhooks/{publicid} | Load notifications webhook
*WebhooksApi* | [**webhooksPublicidPut**](docs/Api/WebhooksApi.md#webhookspublicidput) | **PUT** /webhooks/{publicid} | Update notification webhook


## Documentation For Models

 - [AccessToken](docs/Model/AccessToken.md)
 - [Account](docs/Model/Account.md)
 - [AccountCore](docs/Model/AccountCore.md)
 - [AccountOverview](docs/Model/AccountOverview.md)
 - [AdvancedOptions](docs/Model/AdvancedOptions.md)
 - [Automated](docs/Model/Automated.md)
 - [Body](docs/Model/Body.md)
 - [BodyPart](docs/Model/BodyPart.md)
 - [BouncedCategorySummary](docs/Model/BouncedCategorySummary.md)
 - [Campaign](docs/Model/Campaign.md)
 - [CampaignBody](docs/Model/CampaignBody.md)
 - [CampaignListPayload](docs/Model/CampaignListPayload.md)
 - [CampaignOptions](docs/Model/CampaignOptions.md)
 - [CampaignRecipient](docs/Model/CampaignRecipient.md)
 - [CampaignTemplate](docs/Model/CampaignTemplate.md)
 - [Channel](docs/Model/Channel.md)
 - [Contact](docs/Model/Contact.md)
 - [ContactHistory](docs/Model/ContactHistory.md)
 - [ContactPayload](docs/Model/ContactPayload.md)
 - [ContactStats](docs/Model/ContactStats.md)
 - [ContactUnsubscribeReasonCounts](docs/Model/ContactUnsubscribeReasonCounts.md)
 - [ContactUpdatePayload](docs/Model/ContactUpdatePayload.md)
 - [DailyLogStatusSummary](docs/Model/DailyLogStatusSummary.md)
 - [DomainDetail](docs/Model/DomainDetail.md)
 - [DomainPayload](docs/Model/DomainPayload.md)
 - [Email](docs/Model/Email.md)
 - [EmailCredits](docs/Model/EmailCredits.md)
 - [EmailJobFailedStatus](docs/Model/EmailJobFailedStatus.md)
 - [EmailJobStatus](docs/Model/EmailJobStatus.md)
 - [EmailMergeMessage](docs/Model/EmailMergeMessage.md)
 - [EmailSend](docs/Model/EmailSend.md)
 - [EmailStatus](docs/Model/EmailStatus.md)
 - [EmailTransactionalMessage](docs/Model/EmailTransactionalMessage.md)
 - [EmailView](docs/Model/EmailView.md)
 - [EmailsPayload](docs/Model/EmailsPayload.md)
 - [EncodingSettings](docs/Model/EncodingSettings.md)
 - [EventLog](docs/Model/EventLog.md)
 - [Export](docs/Model/Export.md)
 - [ExportLink](docs/Model/ExportLink.md)
 - [File](docs/Model/File.md)
 - [InboundOptions](docs/Model/InboundOptions.md)
 - [ListPayload](docs/Model/ListPayload.md)
 - [ListUpdatePayload](docs/Model/ListUpdatePayload.md)
 - [Log](docs/Model/Log.md)
 - [LogStatusSummary](docs/Model/LogStatusSummary.md)
 - [LogSummary](docs/Model/LogSummary.md)
 - [LoginPayload](docs/Model/LoginPayload.md)
 - [LoginResponse](docs/Model/LoginResponse.md)
 - [MergeRecipient](docs/Model/MergeRecipient.md)
 - [MessageAttachment](docs/Model/MessageAttachment.md)
 - [ModelList](docs/Model/ModelList.md)
 - [MoveToListPayload](docs/Model/MoveToListPayload.md)
 - [NameTypeCampaign](docs/Model/NameTypeCampaign.md)
 - [Options](docs/Model/Options.md)
 - [Payment](docs/Model/Payment.md)
 - [Pool](docs/Model/Pool.md)
 - [Profile](docs/Model/Profile.md)
 - [QuickAddPayload](docs/Model/QuickAddPayload.md)
 - [RandomListPayload](docs/Model/RandomListPayload.md)
 - [Recipient](docs/Model/Recipient.md)
 - [RecipientEvent](docs/Model/RecipientEvent.md)
 - [Referral](docs/Model/Referral.md)
 - [ReputationDetail](docs/Model/ReputationDetail.md)
 - [ReputationHistory](docs/Model/ReputationHistory.md)
 - [ReputationImpact](docs/Model/ReputationImpact.md)
 - [SMS](docs/Model/SMS.md)
 - [Segment](docs/Model/Segment.md)
 - [SegmentHistory](docs/Model/SegmentHistory.md)
 - [SegmentPayload](docs/Model/SegmentPayload.md)
 - [Sender](docs/Model/Sender.md)
 - [SpamCheck](docs/Model/SpamCheck.md)
 - [SpamRule](docs/Model/SpamRule.md)
 - [SplitCampaign](docs/Model/SplitCampaign.md)
 - [SplitOptions](docs/Model/SplitOptions.md)
 - [SubAccount](docs/Model/SubAccount.md)
 - [SubAccountSettings](docs/Model/SubAccountSettings.md)
 - [SubaccountCreditsPayload](docs/Model/SubaccountCreditsPayload.md)
 - [SubaccountPayload](docs/Model/SubaccountPayload.md)
 - [Template](docs/Model/Template.md)
 - [TemplateTag](docs/Model/TemplateTag.md)
 - [TemplateTagList](docs/Model/TemplateTagList.md)
 - [TrackingOptions](docs/Model/TrackingOptions.md)
 - [TransactionalRecipient](docs/Model/TransactionalRecipient.md)
 - [TriggerData](docs/Model/TriggerData.md)
 - [TriggerOptions](docs/Model/TriggerOptions.md)
 - [UsageData](docs/Model/UsageData.md)
 - [UtmTracking](docs/Model/UtmTracking.md)
 - [Webhook](docs/Model/Webhook.md)
 - [WebhookPayload](docs/Model/WebhookPayload.md)


## Documentation For Authorization


## apikey

- **Type**: API key
- **API key parameter name**: X-ElasticEmail-ApiKey
- **Location**: HTTP header


## Author

support@elasticemail.com


