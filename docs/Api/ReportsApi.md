# Swagger\Client\ReportsApi

All URIs are relative to *https://api.elasticemail.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportsBouncedGet**](ReportsApi.md#reportsBouncedGet) | **GET** /reports/bounced | Returns bounced logs filtered by specified parameters.
[**reportsEmailcreditsHistoryGet**](ReportsApi.md#reportsEmailcreditsHistoryGet) | **GET** /reports/emailcredits/history | Lists email credits history
[**reportsEventlogGet**](ReportsApi.md#reportsEventlogGet) | **GET** /reports/eventlog | Returns log of delivery events filtered by specified parameters.
[**reportsEventsExportGet**](ReportsApi.md#reportsEventsExportGet) | **GET** /reports/events/export | Export delivery events log information to the specified file format.
[**reportsExportGet**](ReportsApi.md#reportsExportGet) | **GET** /reports/export | Export email log information to the specified file format.
[**reportsGet**](ReportsApi.md#reportsGet) | **GET** /reports | Returns logs filtered by specified parameters.
[**reportsLinktrackingsExportGet**](ReportsApi.md#reportsLinktrackingsExportGet) | **GET** /reports/linktrackings/export | Export detailed link tracking information to the specified file format.
[**reportsNotificationsGet**](ReportsApi.md#reportsNotificationsGet) | **GET** /reports/notifications | Returns notification logs filtered by specified parameters.
[**reportsPaymentsHistoryGet**](ReportsApi.md#reportsPaymentsHistoryGet) | **GET** /reports/payments/history | Lists all payments
[**reportsReferralsGet**](ReportsApi.md#reportsReferralsGet) | **GET** /reports/referrals | Shows information about your referral details
[**reportsReferralsPayoutHistoryGet**](ReportsApi.md#reportsReferralsPayoutHistoryGet) | **GET** /reports/referrals/payout/history | Lists all referral payout history
[**reportsReputationHistoryGet**](ReportsApi.md#reportsReputationHistoryGet) | **GET** /reports/reputation/history | Shows latest changes in your sending reputation
[**reportsSpamchecksHistoryGet**](ReportsApi.md#reportsSpamchecksHistoryGet) | **GET** /reports/spamchecks/history | Returns detailed spam check.
[**reportsSummaryGet**](ReportsApi.md#reportsSummaryGet) | **GET** /reports/summary | Loads summary information about activity in chosen date range.


# **reportsBouncedGet**
> \Swagger\Client\Model\Log reportsBouncedGet($message_categories, $from, $to, $channel_name, $limit, $offset, $include_email, $include_sms, $email, $ipaddress)

Returns bounced logs filtered by specified parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_categories = array("message_categories_example"); // string[] | 
$from = "from_example"; // string | Starting date for search in YYYY-MM-DDThh:mm:ss format.
$to = "to_example"; // string | Ending date for search in YYYY-MM-DDThh:mm:ss format.
$channel_name = "channel_name_example"; // string | Name of selected channel.
$limit = 0; // int | Maximum of loaded items.
$offset = 0; // int | How many items should be loaded ahead.
$include_email = True; // bool | True: Search includes emails. Otherwise, false.
$include_sms = True; // bool | True: Search includes SMS. Otherwise, false.
$email = "email_example"; // string | Proper email address.
$ipaddress = "ipaddress_example"; // string | Search for recipients that we sent through this IP address

try {
    $result = $apiInstance->reportsBouncedGet($message_categories, $from, $to, $channel_name, $limit, $offset, $include_email, $include_sms, $email, $ipaddress);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsBouncedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_categories** | [**string[]**](../Model/string.md)|  |
 **from** | **string**| Starting date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **to** | **string**| Ending date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **channel_name** | **string**| Name of selected channel. | [optional]
 **limit** | **int**| Maximum of loaded items. | [optional] [default to 0]
 **offset** | **int**| How many items should be loaded ahead. | [optional] [default to 0]
 **include_email** | **bool**| True: Search includes emails. Otherwise, false. | [optional] [default to True]
 **include_sms** | **bool**| True: Search includes SMS. Otherwise, false. | [optional] [default to True]
 **email** | **string**| Proper email address. | [optional]
 **ipaddress** | **string**| Search for recipients that we sent through this IP address | [optional]

### Return type

[**\Swagger\Client\Model\Log**](../Model/Log.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsEmailcreditsHistoryGet**
> \Swagger\Client\Model\EmailCredits[] reportsEmailcreditsHistoryGet()

Lists email credits history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->reportsEmailcreditsHistoryGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsEmailcreditsHistoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\EmailCredits[]**](../Model/EmailCredits.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsEventlogGet**
> \Swagger\Client\Model\EventLog reportsEventlogGet($statuses, $from, $to, $channel_name, $limit, $offset)

Returns log of delivery events filtered by specified parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$statuses = array("statuses_example"); // string[] | List of comma separated message statuses: 0 for all, 1 for ReadyToSend, 2 for InProgress, 4 for Bounced, 5 for Sent, 6 for Opened, 7 for Clicked, 8 for Unsubscribed, 9 for Abuse Report
$from = "from_example"; // string | Starting date for search in YYYY-MM-DDThh:mm:ss format.
$to = "to_example"; // string | Ending date for search in YYYY-MM-DDThh:mm:ss format.
$channel_name = "channel_name_example"; // string | Name of selected channel.
$limit = 0; // int | Maximum of loaded items.
$offset = 0; // int | How many items should be loaded ahead.

try {
    $result = $apiInstance->reportsEventlogGet($statuses, $from, $to, $channel_name, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsEventlogGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **statuses** | [**string[]**](../Model/string.md)| List of comma separated message statuses: 0 for all, 1 for ReadyToSend, 2 for InProgress, 4 for Bounced, 5 for Sent, 6 for Opened, 7 for Clicked, 8 for Unsubscribed, 9 for Abuse Report | [optional]
 **from** | **string**| Starting date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **to** | **string**| Ending date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **channel_name** | **string**| Name of selected channel. | [optional]
 **limit** | **int**| Maximum of loaded items. | [optional] [default to 0]
 **offset** | **int**| How many items should be loaded ahead. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\EventLog**](../Model/EventLog.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsEventsExportGet**
> \Swagger\Client\Model\ExportLink reportsEventsExportGet($statuses, $from, $to, $channel_name, $file_format, $compression_format, $file_name)

Export delivery events log information to the specified file format.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$statuses = array("statuses_example"); // string[] | List of comma separated message statuses: 0 for all, 1 for ReadyToSend, 2 for InProgress, 4 for Bounced, 5 for Sent, 6 for Opened, 7 for Clicked, 8 for Unsubscribed, 9 for Abuse Report
$from = "from_example"; // string | Starting date for search in YYYY-MM-DDThh:mm:ss format.
$to = "to_example"; // string | Ending date for search in YYYY-MM-DDThh:mm:ss format.
$channel_name = "channel_name_example"; // string | Name of selected channel.
$file_format = "Csv"; // string | Format of the exported file
$compression_format = "None"; // string | FileResponse compression format. None or Zip.
$file_name = "file_name_example"; // string | Name of your file.

try {
    $result = $apiInstance->reportsEventsExportGet($statuses, $from, $to, $channel_name, $file_format, $compression_format, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsEventsExportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **statuses** | [**string[]**](../Model/string.md)| List of comma separated message statuses: 0 for all, 1 for ReadyToSend, 2 for InProgress, 4 for Bounced, 5 for Sent, 6 for Opened, 7 for Clicked, 8 for Unsubscribed, 9 for Abuse Report | [optional]
 **from** | **string**| Starting date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **to** | **string**| Ending date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **channel_name** | **string**| Name of selected channel. | [optional]
 **file_format** | **string**| Format of the exported file | [optional] [default to Csv]
 **compression_format** | **string**| FileResponse compression format. None or Zip. | [optional] [default to None]
 **file_name** | **string**| Name of your file. | [optional]

### Return type

[**\Swagger\Client\Model\ExportLink**](../Model/ExportLink.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsExportGet**
> \Swagger\Client\Model\ExportLink reportsExportGet($statuses, $file_format, $from, $to, $channel_name, $include_email, $include_sms, $message_category, $compression_format, $file_name, $email)

Export email log information to the specified file format.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$statuses = array("statuses_example"); // string[] | List of comma separated message statuses: 0 for all, 1 for ReadyToSend, 2 for InProgress, 4 for Bounced, 5 for Sent, 6 for Opened, 7 for Clicked, 8 for Unsubscribed, 9 for Abuse Report
$file_format = "Csv"; // string | Format of the exported file
$from = "from_example"; // string | Start date.
$to = "to_example"; // string | End date.
$channel_name = "channel_name_example"; // string | Name of selected channel.
$include_email = True; // bool | True: Search includes emails. Otherwise, false.
$include_sms = True; // bool | True: Search includes SMS. Otherwise, false.
$message_category = array("message_category_example"); // string[] | ID of message category
$compression_format = "None"; // string | FileResponse compression format. None or Zip.
$file_name = "file_name_example"; // string | Name of your file.
$email = "email_example"; // string | Proper email address.

try {
    $result = $apiInstance->reportsExportGet($statuses, $file_format, $from, $to, $channel_name, $include_email, $include_sms, $message_category, $compression_format, $file_name, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsExportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **statuses** | [**string[]**](../Model/string.md)| List of comma separated message statuses: 0 for all, 1 for ReadyToSend, 2 for InProgress, 4 for Bounced, 5 for Sent, 6 for Opened, 7 for Clicked, 8 for Unsubscribed, 9 for Abuse Report |
 **file_format** | **string**| Format of the exported file | [optional] [default to Csv]
 **from** | **string**| Start date. | [optional]
 **to** | **string**| End date. | [optional]
 **channel_name** | **string**| Name of selected channel. | [optional]
 **include_email** | **bool**| True: Search includes emails. Otherwise, false. | [optional] [default to True]
 **include_sms** | **bool**| True: Search includes SMS. Otherwise, false. | [optional] [default to True]
 **message_category** | [**string[]**](../Model/string.md)| ID of message category | [optional]
 **compression_format** | **string**| FileResponse compression format. None or Zip. | [optional] [default to None]
 **file_name** | **string**| Name of your file. | [optional]
 **email** | **string**| Proper email address. | [optional]

### Return type

[**\Swagger\Client\Model\ExportLink**](../Model/ExportLink.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsGet**
> \Swagger\Client\Model\Log reportsGet($statuses, $from, $to, $channel_name, $limit, $offset, $include_email, $include_sms, $email, $ipaddress)

Returns logs filtered by specified parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$statuses = array("statuses_example"); // string[] | List of comma separated message statuses: 0 for all, 1 for ReadyToSend, 2 for InProgress, 4 for Bounced, 5 for Sent, 6 for Opened, 7 for Clicked, 8 for Unsubscribed, 9 for Abuse Report
$from = "from_example"; // string | Starting date for search in YYYY-MM-DDThh:mm:ss format.
$to = "to_example"; // string | Ending date for search in YYYY-MM-DDThh:mm:ss format.
$channel_name = "channel_name_example"; // string | Name of selected channel.
$limit = 0; // int | Maximum of loaded items.
$offset = 0; // int | How many items should be loaded ahead.
$include_email = True; // bool | True: Search includes emails. Otherwise, false.
$include_sms = True; // bool | True: Search includes SMS. Otherwise, false.
$email = "email_example"; // string | Proper email address.
$ipaddress = "ipaddress_example"; // string | Search for recipients that we sent through this IP address

try {
    $result = $apiInstance->reportsGet($statuses, $from, $to, $channel_name, $limit, $offset, $include_email, $include_sms, $email, $ipaddress);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **statuses** | [**string[]**](../Model/string.md)| List of comma separated message statuses: 0 for all, 1 for ReadyToSend, 2 for InProgress, 4 for Bounced, 5 for Sent, 6 for Opened, 7 for Clicked, 8 for Unsubscribed, 9 for Abuse Report |
 **from** | **string**| Starting date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **to** | **string**| Ending date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **channel_name** | **string**| Name of selected channel. | [optional]
 **limit** | **int**| Maximum of loaded items. | [optional] [default to 0]
 **offset** | **int**| How many items should be loaded ahead. | [optional] [default to 0]
 **include_email** | **bool**| True: Search includes emails. Otherwise, false. | [optional] [default to True]
 **include_sms** | **bool**| True: Search includes SMS. Otherwise, false. | [optional] [default to True]
 **email** | **string**| Proper email address. | [optional]
 **ipaddress** | **string**| Search for recipients that we sent through this IP address | [optional]

### Return type

[**\Swagger\Client\Model\Log**](../Model/Log.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsLinktrackingsExportGet**
> \Swagger\Client\Model\ExportLink reportsLinktrackingsExportGet($from, $to, $channel_name, $file_format, $limit, $offset, $compression_format, $file_name)

Export detailed link tracking information to the specified file format.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Starting date for search in YYYY-MM-DDThh:mm:ss format.
$to = "to_example"; // string | Ending date for search in YYYY-MM-DDThh:mm:ss format.
$channel_name = "channel_name_example"; // string | Name of selected channel.
$file_format = "Csv"; // string | Format of the exported file
$limit = 0; // int | Maximum of loaded items.
$offset = 0; // int | How many items should be loaded ahead.
$compression_format = "None"; // string | FileResponse compression format. None or Zip.
$file_name = "file_name_example"; // string | Name of your file.

try {
    $result = $apiInstance->reportsLinktrackingsExportGet($from, $to, $channel_name, $file_format, $limit, $offset, $compression_format, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsLinktrackingsExportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Starting date for search in YYYY-MM-DDThh:mm:ss format. |
 **to** | **string**| Ending date for search in YYYY-MM-DDThh:mm:ss format. |
 **channel_name** | **string**| Name of selected channel. | [optional]
 **file_format** | **string**| Format of the exported file | [optional] [default to Csv]
 **limit** | **int**| Maximum of loaded items. | [optional] [default to 0]
 **offset** | **int**| How many items should be loaded ahead. | [optional] [default to 0]
 **compression_format** | **string**| FileResponse compression format. None or Zip. | [optional] [default to None]
 **file_name** | **string**| Name of your file. | [optional]

### Return type

[**\Swagger\Client\Model\ExportLink**](../Model/ExportLink.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsNotificationsGet**
> \Swagger\Client\Model\Log reportsNotificationsGet($statuses, $from, $to, $limit, $offset, $notification_type)

Returns notification logs filtered by specified parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$statuses = array("statuses_example"); // string[] | List of comma separated message statuses: 0 for all, 1 for ReadyToSend, 2 for InProgress, 4 for Bounced, 5 for Sent, 6 for Opened, 7 for Clicked, 8 for Unsubscribed, 9 for Abuse Report
$from = "from_example"; // string | Starting date for search in YYYY-MM-DDThh:mm:ss format.
$to = "to_example"; // string | Ending date for search in YYYY-MM-DDThh:mm:ss format.
$limit = 0; // int | Maximum of loaded items.
$offset = 0; // int | How many items should be loaded ahead.
$notification_type = "All"; // string | 

try {
    $result = $apiInstance->reportsNotificationsGet($statuses, $from, $to, $limit, $offset, $notification_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsNotificationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **statuses** | [**string[]**](../Model/string.md)| List of comma separated message statuses: 0 for all, 1 for ReadyToSend, 2 for InProgress, 4 for Bounced, 5 for Sent, 6 for Opened, 7 for Clicked, 8 for Unsubscribed, 9 for Abuse Report |
 **from** | **string**| Starting date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **to** | **string**| Ending date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **limit** | **int**| Maximum of loaded items. | [optional] [default to 0]
 **offset** | **int**| How many items should be loaded ahead. | [optional] [default to 0]
 **notification_type** | **string**|  | [optional] [default to All]

### Return type

[**\Swagger\Client\Model\Log**](../Model/Log.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsPaymentsHistoryGet**
> \Swagger\Client\Model\Payment[] reportsPaymentsHistoryGet($limit, $offset, $from_date, $to_date)

Lists all payments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Maximum of loaded items.
$offset = 56; // int | How many items should be loaded ahead.
$from_date = "from_date_example"; // string | Starting date for search in YYYY-MM-DDThh:mm:ss format.
$to_date = "to_date_example"; // string | Ending date for search in YYYY-MM-DDThh:mm:ss format.

try {
    $result = $apiInstance->reportsPaymentsHistoryGet($limit, $offset, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsPaymentsHistoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum of loaded items. |
 **offset** | **int**| How many items should be loaded ahead. |
 **from_date** | **string**| Starting date for search in YYYY-MM-DDThh:mm:ss format. |
 **to_date** | **string**| Ending date for search in YYYY-MM-DDThh:mm:ss format. |

### Return type

[**\Swagger\Client\Model\Payment[]**](../Model/Payment.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsReferralsGet**
> \Swagger\Client\Model\Referral reportsReferralsGet()

Shows information about your referral details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->reportsReferralsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsReferralsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Referral**](../Model/Referral.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsReferralsPayoutHistoryGet**
> \Swagger\Client\Model\Payment[] reportsReferralsPayoutHistoryGet()

Lists all referral payout history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->reportsReferralsPayoutHistoryGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsReferralsPayoutHistoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Payment[]**](../Model/Payment.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsReputationHistoryGet**
> \Swagger\Client\Model\ReputationHistory[] reportsReputationHistoryGet($limit, $offset)

Shows latest changes in your sending reputation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 20; // int | Maximum of loaded items.
$offset = 0; // int | How many items should be loaded ahead.

try {
    $result = $apiInstance->reportsReputationHistoryGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsReputationHistoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum of loaded items. | [optional] [default to 20]
 **offset** | **int**| How many items should be loaded ahead. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\ReputationHistory[]**](../Model/ReputationHistory.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSpamchecksHistoryGet**
> \Swagger\Client\Model\SpamCheck[] reportsSpamchecksHistoryGet($limit, $offset)

Returns detailed spam check.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 20; // int | Maximum of loaded items.
$offset = 0; // int | How many items should be loaded ahead.

try {
    $result = $apiInstance->reportsSpamchecksHistoryGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSpamchecksHistoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum of loaded items. | [optional] [default to 20]
 **offset** | **int**| How many items should be loaded ahead. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\SpamCheck[]**](../Model/SpamCheck.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSummaryGet**
> \Swagger\Client\Model\LogSummary reportsSummaryGet($from, $to, $channel_name, $interval, $transaction_id)

Loads summary information about activity in chosen date range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Starting date for search in YYYY-MM-DDThh:mm:ss format.
$to = "to_example"; // string | Ending date for search in YYYY-MM-DDThh:mm:ss format.
$channel_name = "channel_name_example"; // string | Name of selected channel.
$interval = "Summary"; // string | 'Hourly' for detailed information, 'summary' for daily overview
$transaction_id = "transaction_id_example"; // string | ID number of transaction

try {
    $result = $apiInstance->reportsSummaryGet($from, $to, $channel_name, $interval, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSummaryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Starting date for search in YYYY-MM-DDThh:mm:ss format. |
 **to** | **string**| Ending date for search in YYYY-MM-DDThh:mm:ss format. |
 **channel_name** | **string**| Name of selected channel. | [optional]
 **interval** | **string**| &#39;Hourly&#39; for detailed information, &#39;summary&#39; for daily overview | [optional] [default to Summary]
 **transaction_id** | **string**| ID number of transaction | [optional]

### Return type

[**\Swagger\Client\Model\LogSummary**](../Model/LogSummary.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

