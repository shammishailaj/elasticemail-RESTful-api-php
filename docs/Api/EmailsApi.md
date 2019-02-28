# Swagger\Client\EmailsApi

All URIs are relative to *https://api.elasticemail.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**emailsMergePost**](EmailsApi.md#emailsMergePost) | **POST** /emails/merge | Send bulk merge email
[**emailsMsgidViewGet**](EmailsApi.md#emailsMsgidViewGet) | **GET** /emails/{msgid}/view | View email
[**emailsTransactionalPost**](EmailsApi.md#emailsTransactionalPost) | **POST** /emails/transactional | Send transactional message (recipients will be known to each other)
[**emailsTransactionidCancelPost**](EmailsApi.md#emailsTransactionidCancelPost) | **POST** /emails/{transactionid}/cancel | Cancels emails that are waiting to be sent.
[**emailsTransactionidStatusGet**](EmailsApi.md#emailsTransactionidStatusGet) | **GET** /emails/{transactionid}/status | Get email batch status


# **emailsMergePost**
> \Swagger\Client\Model\EmailSend emailsMergePost($body)

Send bulk merge email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EmailMergeMessage(); // \Swagger\Client\Model\EmailMergeMessage | Content of message, HTML encoded

try {
    $result = $apiInstance->emailsMergePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->emailsMergePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EmailMergeMessage**](../Model/EmailMergeMessage.md)| Content of message, HTML encoded |

### Return type

[**\Swagger\Client\Model\EmailSend**](../Model/EmailSend.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailsMsgidViewGet**
> \Swagger\Client\Model\Email emailsMsgidViewGet($msgid)

View email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$msgid = "msgid_example"; // string | Message identifier

try {
    $result = $apiInstance->emailsMsgidViewGet($msgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->emailsMsgidViewGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **msgid** | **string**| Message identifier |

### Return type

[**\Swagger\Client\Model\Email**](../Model/Email.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailsTransactionalPost**
> \Swagger\Client\Model\EmailSend emailsTransactionalPost($body)

Send transactional message (recipients will be known to each other)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EmailTransactionalMessage(); // \Swagger\Client\Model\EmailTransactionalMessage | Content of message, HTML encoded

try {
    $result = $apiInstance->emailsTransactionalPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->emailsTransactionalPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EmailTransactionalMessage**](../Model/EmailTransactionalMessage.md)| Content of message, HTML encoded |

### Return type

[**\Swagger\Client\Model\EmailSend**](../Model/EmailSend.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailsTransactionidCancelPost**
> emailsTransactionidCancelPost($transactionid)

Cancels emails that are waiting to be sent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transactionid = "transactionid_example"; // string | ID number of transaction

try {
    $apiInstance->emailsTransactionidCancelPost($transactionid);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->emailsTransactionidCancelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactionid** | **string**| ID number of transaction |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailsTransactionidStatusGet**
> \Swagger\Client\Model\EmailJobStatus emailsTransactionidStatusGet($transactionid, $show_failed, $show_sent, $show_delivered, $show_pending, $show_opened, $show_clicked, $show_abuse, $show_unsubscribed, $show_errors, $show_message_i_ds)

Get email batch status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transactionid = "transactionid_example"; // string | Transaction identifier
$show_failed = False; // bool | Include Bounced email addresses.
$show_sent = False; // bool | Include Sent email addresses.
$show_delivered = False; // bool | Include all delivered email addresses.
$show_pending = False; // bool | Include Ready to send email addresses.
$show_opened = False; // bool | Include Opened email addresses.
$show_clicked = False; // bool | Include Clicked email addresses.
$show_abuse = False; // bool | Include Reported as abuse email addresses.
$show_unsubscribed = False; // bool | Include Unsubscribed email addresses.
$show_errors = False; // bool | Include error messages for bounced emails.
$show_message_i_ds = False; // bool | Include all MessageIDs for this transaction

try {
    $result = $apiInstance->emailsTransactionidStatusGet($transactionid, $show_failed, $show_sent, $show_delivered, $show_pending, $show_opened, $show_clicked, $show_abuse, $show_unsubscribed, $show_errors, $show_message_i_ds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->emailsTransactionidStatusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactionid** | **string**| Transaction identifier |
 **show_failed** | **bool**| Include Bounced email addresses. | [optional] [default to False]
 **show_sent** | **bool**| Include Sent email addresses. | [optional] [default to False]
 **show_delivered** | **bool**| Include all delivered email addresses. | [optional] [default to False]
 **show_pending** | **bool**| Include Ready to send email addresses. | [optional] [default to False]
 **show_opened** | **bool**| Include Opened email addresses. | [optional] [default to False]
 **show_clicked** | **bool**| Include Clicked email addresses. | [optional] [default to False]
 **show_abuse** | **bool**| Include Reported as abuse email addresses. | [optional] [default to False]
 **show_unsubscribed** | **bool**| Include Unsubscribed email addresses. | [optional] [default to False]
 **show_errors** | **bool**| Include error messages for bounced emails. | [optional] [default to False]
 **show_message_i_ds** | **bool**| Include all MessageIDs for this transaction | [optional] [default to False]

### Return type

[**\Swagger\Client\Model\EmailJobStatus**](../Model/EmailJobStatus.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

