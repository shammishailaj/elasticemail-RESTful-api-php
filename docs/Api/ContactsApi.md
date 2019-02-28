# Swagger\Client\ContactsApi

All URIs are relative to *https://api.elasticemail.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contactsDelete**](ContactsApi.md#contactsDelete) | **DELETE** /contacts | Permanantly deletes the contacts provided.  You can provide either a qualified rule or a list of emails (comma separated string).
[**contactsEmailGet**](ContactsApi.md#contactsEmailGet) | **GET** /contacts/{email} | Load detailed contact information
[**contactsEmailHistoryGet**](ContactsApi.md#contactsEmailHistoryGet) | **GET** /contacts/{email}/history | Shows detailed history of chosen Contact.
[**contactsEmailPut**](ContactsApi.md#contactsEmailPut) | **PUT** /contacts/{email} | Update selected contact. Omitted contact&#39;s fields will be reset by default (see the clearRestOfFields parameter)
[**contactsGet**](ContactsApi.md#contactsGet) | **GET** /contacts | List of all contacts. If you have not specified RULE, all Contacts will be listed.
[**contactsPost**](ContactsApi.md#contactsPost) | **POST** /contacts | Add new Contact to one of your Lists.
[**contactsStatsGet**](ContactsApi.md#contactsStatsGet) | **GET** /contacts/stats | Returns number of Contacts, RULE specifies contact Status.
[**contactsTasksExportGet**](ContactsApi.md#contactsTasksExportGet) | **GET** /contacts/tasks/export | Export selected Contacts to file.
[**contactsTasksImportPost**](ContactsApi.md#contactsTasksImportPost) | **POST** /contacts/tasks/import | Upload contacts from a file.


# **contactsDelete**
> contactsDelete($rule, $emails, $list_names)

Permanantly deletes the contacts provided.  You can provide either a qualified rule or a list of emails (comma separated string).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule = "rule_example"; // string | Query used for filtering.
$emails = array("emails_example"); // string[] | Comma delimited list of contact emails
$list_names = array("list_names_example"); // string[] | 

try {
    $apiInstance->contactsDelete($rule, $emails, $list_names);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule** | **string**| Query used for filtering. | [optional]
 **emails** | [**string[]**](../Model/string.md)| Comma delimited list of contact emails | [optional]
 **list_names** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactsEmailGet**
> \Swagger\Client\Model\Contact contactsEmailGet($email)

Load detailed contact information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | Proper email address.

try {
    $result = $apiInstance->contactsEmailGet($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsEmailGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Proper email address. |

### Return type

[**\Swagger\Client\Model\Contact**](../Model/Contact.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactsEmailHistoryGet**
> \Swagger\Client\Model\ContactHistory[] contactsEmailHistoryGet($email, $limit, $offset)

Shows detailed history of chosen Contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | Proper email address.
$limit = 0; // int | Maximum of loaded items.
$offset = 0; // int | How many items should be loaded ahead.

try {
    $result = $apiInstance->contactsEmailHistoryGet($email, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsEmailHistoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Proper email address. |
 **limit** | **int**| Maximum of loaded items. | [optional] [default to 0]
 **offset** | **int**| How many items should be loaded ahead. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\ContactHistory[]**](../Model/ContactHistory.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactsEmailPut**
> \Swagger\Client\Model\Contact contactsEmailPut($email, $body)

Update selected contact. Omitted contact's fields will be reset by default (see the clearRestOfFields parameter)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | Proper email address.
$body = new \Swagger\Client\Model\ContactUpdatePayload(); // \Swagger\Client\Model\ContactUpdatePayload | 

try {
    $result = $apiInstance->contactsEmailPut($email, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsEmailPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Proper email address. |
 **body** | [**\Swagger\Client\Model\ContactUpdatePayload**](../Model/ContactUpdatePayload.md)|  |

### Return type

[**\Swagger\Client\Model\Contact**](../Model/Contact.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactsGet**
> \Swagger\Client\Model\Contact[] contactsGet($rule, $limit, $offset)

List of all contacts. If you have not specified RULE, all Contacts will be listed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule = "rule_example"; // string | Query used for filtering.
$limit = 20; // int | Maximum of loaded items.
$offset = 0; // int | How many items should be loaded ahead.

try {
    $result = $apiInstance->contactsGet($rule, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule** | **string**| Query used for filtering. | [optional]
 **limit** | **int**| Maximum of loaded items. | [optional] [default to 20]
 **offset** | **int**| How many items should be loaded ahead. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\Contact[]**](../Model/Contact.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactsPost**
> \Swagger\Client\Model\Contact[] contactsPost($body)

Add new Contact to one of your Lists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\QuickAddPayload(); // \Swagger\Client\Model\QuickAddPayload | 

try {
    $result = $apiInstance->contactsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\QuickAddPayload**](../Model/QuickAddPayload.md)|  |

### Return type

[**\Swagger\Client\Model\Contact[]**](../Model/Contact.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactsStatsGet**
> \Swagger\Client\Model\ContactStats contactsStatsGet($rule, $list_names)

Returns number of Contacts, RULE specifies contact Status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule = "rule_example"; // string | Query used for filtering.
$list_names = array("list_names_example"); // string[] | 

try {
    $result = $apiInstance->contactsStatsGet($rule, $list_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsStatsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule** | **string**| Query used for filtering. | [optional]
 **list_names** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ContactStats**](../Model/ContactStats.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactsTasksExportGet**
> \Swagger\Client\Model\ExportLink contactsTasksExportGet($file_format, $rule, $emails, $compression_format, $file_name, $list_names)

Export selected Contacts to file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_format = "Csv"; // string | Format of the exported file
$rule = "rule_example"; // string | Query used for filtering.
$emails = array("emails_example"); // string[] | Comma delimited list of contact emails
$compression_format = "None"; // string | FileResponse compression format. None or Zip.
$file_name = "file_name_example"; // string | Name of your file.
$list_names = array("list_names_example"); // string[] | 

try {
    $result = $apiInstance->contactsTasksExportGet($file_format, $rule, $emails, $compression_format, $file_name, $list_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsTasksExportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_format** | **string**| Format of the exported file | [optional] [default to Csv]
 **rule** | **string**| Query used for filtering. | [optional]
 **emails** | [**string[]**](../Model/string.md)| Comma delimited list of contact emails | [optional]
 **compression_format** | **string**| FileResponse compression format. None or Zip. | [optional] [default to None]
 **file_name** | **string**| Name of your file. | [optional]
 **list_names** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ExportLink**](../Model/ExportLink.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactsTasksImportPost**
> contactsTasksImportPost($file, $allow_unsubscribe, $list_name, $status, $consent_date, $consent_ip, $consent_tracking)

Upload contacts from a file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | 
$allow_unsubscribe = False; // bool | True: Allow unsubscribing from this list. Otherwise, false
$list_name = "list_name_example"; // string | Name of your list.
$status = "Active"; // string | Name of status: Active, Engaged, Inactive, Abuse, Bounced, Unsubscribed.
$consent_date = "consent_date_example"; // string | Date of consent to send this contact(s) your email. If not provided current date is used for consent.
$consent_ip = "consent_ip_example"; // string | IP address of consent to send this contact(s) your email. If not provided your current public IP address is used for consent.
$consent_tracking = "Unknown"; // string | 

try {
    $apiInstance->contactsTasksImportPost($file, $allow_unsubscribe, $list_name, $status, $consent_date, $consent_ip, $consent_tracking);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsTasksImportPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**|  |
 **allow_unsubscribe** | **bool**| True: Allow unsubscribing from this list. Otherwise, false | [optional] [default to False]
 **list_name** | **string**| Name of your list. | [optional]
 **status** | **string**| Name of status: Active, Engaged, Inactive, Abuse, Bounced, Unsubscribed. | [optional] [default to Active]
 **consent_date** | **string**| Date of consent to send this contact(s) your email. If not provided current date is used for consent. | [optional]
 **consent_ip** | **string**| IP address of consent to send this contact(s) your email. If not provided your current public IP address is used for consent. | [optional]
 **consent_tracking** | **string**|  | [optional] [default to Unknown]

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

