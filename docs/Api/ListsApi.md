# Swagger\Client\ListsApi

All URIs are relative to *https://api.elasticemail.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listsFromcampaignPost**](ListsApi.md#listsFromcampaignPost) | **POST** /lists/fromcampaign | Create a new list from the recipients of the given campaign, using the given statuses of Messages
[**listsGet**](ListsApi.md#listsGet) | **GET** /lists | Shows all your existing lists
[**listsListnameContactsDelete**](ListsApi.md#listsListnameContactsDelete) | **DELETE** /lists/{listname}/contacts | Remove selected Contacts from your list
[**listsListnameContactsMovePut**](ListsApi.md#listsListnameContactsMovePut) | **PUT** /lists/{listname}/contacts/move | Move selected contacts from one List to another
[**listsListnameContactsPut**](ListsApi.md#listsListnameContactsPut) | **PUT** /lists/{listname}/contacts | Add existing Contacts to chosen list
[**listsListnameDelete**](ListsApi.md#listsListnameDelete) | **DELETE** /lists/{listname} | Deletes List and removes all the Contacts from it (does not delete Contacts).
[**listsListnameGet**](ListsApi.md#listsListnameGet) | **GET** /lists/{listname} | Returns detailed information about specific list.
[**listsListnamePut**](ListsApi.md#listsListnamePut) | **PUT** /lists/{listname} | Update existing list
[**listsPost**](ListsApi.md#listsPost) | **POST** /lists | Create new list, based on filtering rule or list of IDs
[**listsRandomPost**](ListsApi.md#listsRandomPost) | **POST** /lists/random | Create a new list with randomized contacts from an existing list or segment


# **listsFromcampaignPost**
> \Swagger\Client\Model\ModelList listsFromcampaignPost($body)

Create a new list from the recipients of the given campaign, using the given statuses of Messages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CampaignListPayload(); // \Swagger\Client\Model\CampaignListPayload | Data of the campaign which recipients you want to copy

try {
    $result = $apiInstance->listsFromcampaignPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsFromcampaignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CampaignListPayload**](../Model/CampaignListPayload.md)| Data of the campaign which recipients you want to copy |

### Return type

[**\Swagger\Client\Model\ModelList**](../Model/ModelList.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsGet**
> \Swagger\Client\Model\ModelList[] listsGet($from, $to)

Shows all your existing lists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | Starting date for search in YYYY-MM-DDThh:mm:ss format.
$to = "to_example"; // string | Ending date for search in YYYY-MM-DDThh:mm:ss format.

try {
    $result = $apiInstance->listsGet($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Starting date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **to** | **string**| Ending date for search in YYYY-MM-DDThh:mm:ss format. | [optional]

### Return type

[**\Swagger\Client\Model\ModelList[]**](../Model/ModelList.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsListnameContactsDelete**
> listsListnameContactsDelete($listname, $emails, $rule)

Remove selected Contacts from your list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listname = "listname_example"; // string | Name of your list.
$emails = array("emails_example"); // string[] | Comma delimited list of contact emails
$rule = "rule_example"; // string | Query used for filtering.

try {
    $apiInstance->listsListnameContactsDelete($listname, $emails, $rule);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsListnameContactsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listname** | **string**| Name of your list. |
 **emails** | [**string[]**](../Model/string.md)| Comma delimited list of contact emails | [optional]
 **rule** | **string**| Query used for filtering. | [optional]

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsListnameContactsMovePut**
> \Swagger\Client\Model\ModelList listsListnameContactsMovePut($listname, $body)

Move selected contacts from one List to another

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listname = "listname_example"; // string | The name of the list from which the contacts will be copied from
$body = new \Swagger\Client\Model\MoveToListPayload(); // \Swagger\Client\Model\MoveToListPayload | The data of the list to copy the contacts to

try {
    $result = $apiInstance->listsListnameContactsMovePut($listname, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsListnameContactsMovePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listname** | **string**| The name of the list from which the contacts will be copied from |
 **body** | [**\Swagger\Client\Model\MoveToListPayload**](../Model/MoveToListPayload.md)| The data of the list to copy the contacts to |

### Return type

[**\Swagger\Client\Model\ModelList**](../Model/ModelList.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsListnameContactsPut**
> \Swagger\Client\Model\ModelList listsListnameContactsPut($listname, $body)

Add existing Contacts to chosen list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listname = "listname_example"; // string | Name of your list.
$body = new \Swagger\Client\Model\EmailsPayload(); // \Swagger\Client\Model\EmailsPayload | Comma delimited list of contact emails

try {
    $result = $apiInstance->listsListnameContactsPut($listname, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsListnameContactsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listname** | **string**| Name of your list. |
 **body** | [**\Swagger\Client\Model\EmailsPayload**](../Model/EmailsPayload.md)| Comma delimited list of contact emails |

### Return type

[**\Swagger\Client\Model\ModelList**](../Model/ModelList.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsListnameDelete**
> listsListnameDelete($listname)

Deletes List and removes all the Contacts from it (does not delete Contacts).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listname = "listname_example"; // string | Name of your list.

try {
    $apiInstance->listsListnameDelete($listname);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsListnameDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listname** | **string**| Name of your list. |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsListnameGet**
> \Swagger\Client\Model\ModelList listsListnameGet($listname)

Returns detailed information about specific list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listname = "listname_example"; // string | Name of your list.

try {
    $result = $apiInstance->listsListnameGet($listname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsListnameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listname** | **string**| Name of your list. |

### Return type

[**\Swagger\Client\Model\ModelList**](../Model/ModelList.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsListnamePut**
> \Swagger\Client\Model\ModelList listsListnamePut($listname, $body)

Update existing list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listname = "listname_example"; // string | Name of your list.
$body = new \Swagger\Client\Model\ListUpdatePayload(); // \Swagger\Client\Model\ListUpdatePayload | 

try {
    $result = $apiInstance->listsListnamePut($listname, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsListnamePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listname** | **string**| Name of your list. |
 **body** | [**\Swagger\Client\Model\ListUpdatePayload**](../Model/ListUpdatePayload.md)|  |

### Return type

[**\Swagger\Client\Model\ModelList**](../Model/ModelList.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsPost**
> \Swagger\Client\Model\ModelList listsPost($body)

Create new list, based on filtering rule or list of IDs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ListPayload(); // \Swagger\Client\Model\ListPayload | 

try {
    $result = $apiInstance->listsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ListPayload**](../Model/ListPayload.md)|  |

### Return type

[**\Swagger\Client\Model\ModelList**](../Model/ModelList.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsRandomPost**
> \Swagger\Client\Model\ModelList listsRandomPost($body)

Create a new list with randomized contacts from an existing list or segment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RandomListPayload(); // \Swagger\Client\Model\RandomListPayload | 

try {
    $result = $apiInstance->listsRandomPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsRandomPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RandomListPayload**](../Model/RandomListPayload.md)|  |

### Return type

[**\Swagger\Client\Model\ModelList**](../Model/ModelList.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

