# Swagger\Client\CampaignsApi

All URIs are relative to *https://api.elasticemail.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignsAbsplitGet**](CampaignsApi.md#campaignsAbsplitGet) | **GET** /campaigns/absplit | List all of your A/X campaigns
[**campaignsAbsplitNameDelete**](CampaignsApi.md#campaignsAbsplitNameDelete) | **DELETE** /campaigns/absplit/{name} | 
[**campaignsAbsplitNameGet**](CampaignsApi.md#campaignsAbsplitNameGet) | **GET** /campaigns/absplit/{name} | 
[**campaignsAbsplitNamePut**](CampaignsApi.md#campaignsAbsplitNamePut) | **PUT** /campaigns/absplit/{name} | Updates a previously added campaign.  Only Active and Paused campaigns can be updated.
[**campaignsAbsplitPost**](CampaignsApi.md#campaignsAbsplitPost) | **POST** /campaigns/absplit | 
[**campaignsAllGet**](CampaignsApi.md#campaignsAllGet) | **GET** /campaigns/all | 
[**campaignsAutomatedGet**](CampaignsApi.md#campaignsAutomatedGet) | **GET** /campaigns/automated | List all of your automated campaigns
[**campaignsAutomatedNameDelete**](CampaignsApi.md#campaignsAutomatedNameDelete) | **DELETE** /campaigns/automated/{name} | 
[**campaignsAutomatedNameGet**](CampaignsApi.md#campaignsAutomatedNameGet) | **GET** /campaigns/automated/{name} | 
[**campaignsAutomatedNamePut**](CampaignsApi.md#campaignsAutomatedNamePut) | **PUT** /campaigns/automated/{name} | Updates a previously added campaign.  Only Active and Paused campaigns can be updated.
[**campaignsAutomatedPost**](CampaignsApi.md#campaignsAutomatedPost) | **POST** /campaigns/automated | 
[**campaignsNameCancelPost**](CampaignsApi.md#campaignsNameCancelPost) | **POST** /campaigns/{name}/cancel | Cancels emails that are waiting to be sent.
[**campaignsSendnowGet**](CampaignsApi.md#campaignsSendnowGet) | **GET** /campaigns/sendnow | List all of your instant campaigns
[**campaignsSendnowNameDelete**](CampaignsApi.md#campaignsSendnowNameDelete) | **DELETE** /campaigns/sendnow/{name} | 
[**campaignsSendnowNameGet**](CampaignsApi.md#campaignsSendnowNameGet) | **GET** /campaigns/sendnow/{name} | Retrieves an existing campaign.
[**campaignsSendnowNamePut**](CampaignsApi.md#campaignsSendnowNamePut) | **PUT** /campaigns/sendnow/{name} | Updates a previously added campaign.  Only Active and Paused campaigns can be updated.
[**campaignsSendnowPost**](CampaignsApi.md#campaignsSendnowPost) | **POST** /campaigns/sendnow | 
[**campaignsTasksExportGet**](CampaignsApi.md#campaignsTasksExportGet) | **GET** /campaigns/tasks/export | Export selected campaigns to chosen file format.


# **campaignsAbsplitGet**
> \Swagger\Client\Model\SplitCampaign[] campaignsAbsplitGet($search, $offset, $limit)

List all of your A/X campaigns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = "search_example"; // string | Text fragment used for searching.
$offset = 0; // int | How many items should be loaded ahead.
$limit = 0; // int | Maximum of loaded items.

try {
    $result = $apiInstance->campaignsAbsplitGet($search, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsAbsplitGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Text fragment used for searching. | [optional]
 **offset** | **int**| How many items should be loaded ahead. | [optional] [default to 0]
 **limit** | **int**| Maximum of loaded items. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\SplitCampaign[]**](../Model/SplitCampaign.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsAbsplitNameDelete**
> campaignsAbsplitNameDelete($name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Filename

try {
    $apiInstance->campaignsAbsplitNameDelete($name);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsAbsplitNameDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsAbsplitNameGet**
> \Swagger\Client\Model\SplitCampaign campaignsAbsplitNameGet($name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Filename

try {
    $result = $apiInstance->campaignsAbsplitNameGet($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsAbsplitNameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename |

### Return type

[**\Swagger\Client\Model\SplitCampaign**](../Model/SplitCampaign.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsAbsplitNamePut**
> \Swagger\Client\Model\SplitCampaign campaignsAbsplitNamePut($name, $body)

Updates a previously added campaign.  Only Active and Paused campaigns can be updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Filename
$body = new \Swagger\Client\Model\SplitCampaign(); // \Swagger\Client\Model\SplitCampaign | Json representation of a campaign

try {
    $result = $apiInstance->campaignsAbsplitNamePut($name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsAbsplitNamePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename |
 **body** | [**\Swagger\Client\Model\SplitCampaign**](../Model/SplitCampaign.md)| Json representation of a campaign |

### Return type

[**\Swagger\Client\Model\SplitCampaign**](../Model/SplitCampaign.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsAbsplitPost**
> \Swagger\Client\Model\SplitCampaign campaignsAbsplitPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SplitCampaign(); // \Swagger\Client\Model\SplitCampaign | Json representation of a campaign

try {
    $result = $apiInstance->campaignsAbsplitPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsAbsplitPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SplitCampaign**](../Model/SplitCampaign.md)| Json representation of a campaign |

### Return type

[**\Swagger\Client\Model\SplitCampaign**](../Model/SplitCampaign.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsAllGet**
> \Swagger\Client\Model\NameTypeCampaign[] campaignsAllGet($search, $offset, $limit)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = "search_example"; // string | Text fragment used for searching.
$offset = 0; // int | How many items should be loaded ahead.
$limit = 0; // int | Maximum of loaded items.

try {
    $result = $apiInstance->campaignsAllGet($search, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsAllGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Text fragment used for searching. | [optional]
 **offset** | **int**| How many items should be loaded ahead. | [optional] [default to 0]
 **limit** | **int**| Maximum of loaded items. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\NameTypeCampaign[]**](../Model/NameTypeCampaign.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsAutomatedGet**
> \Swagger\Client\Model\Automated[] campaignsAutomatedGet($search, $offset, $limit)

List all of your automated campaigns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = "search_example"; // string | Text fragment used for searching.
$offset = 0; // int | How many items should be loaded ahead.
$limit = 0; // int | Maximum of loaded items.

try {
    $result = $apiInstance->campaignsAutomatedGet($search, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsAutomatedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Text fragment used for searching. | [optional]
 **offset** | **int**| How many items should be loaded ahead. | [optional] [default to 0]
 **limit** | **int**| Maximum of loaded items. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\Automated[]**](../Model/Automated.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsAutomatedNameDelete**
> campaignsAutomatedNameDelete($name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Filename

try {
    $apiInstance->campaignsAutomatedNameDelete($name);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsAutomatedNameDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsAutomatedNameGet**
> \Swagger\Client\Model\Automated campaignsAutomatedNameGet($name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Filename

try {
    $result = $apiInstance->campaignsAutomatedNameGet($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsAutomatedNameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename |

### Return type

[**\Swagger\Client\Model\Automated**](../Model/Automated.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsAutomatedNamePut**
> \Swagger\Client\Model\Automated campaignsAutomatedNamePut($name, $body)

Updates a previously added campaign.  Only Active and Paused campaigns can be updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Filename
$body = new \Swagger\Client\Model\Automated(); // \Swagger\Client\Model\Automated | Json representation of a campaign

try {
    $result = $apiInstance->campaignsAutomatedNamePut($name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsAutomatedNamePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename |
 **body** | [**\Swagger\Client\Model\Automated**](../Model/Automated.md)| Json representation of a campaign |

### Return type

[**\Swagger\Client\Model\Automated**](../Model/Automated.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsAutomatedPost**
> \Swagger\Client\Model\Automated campaignsAutomatedPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Automated(); // \Swagger\Client\Model\Automated | Json representation of a campaign

try {
    $result = $apiInstance->campaignsAutomatedPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsAutomatedPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Automated**](../Model/Automated.md)| Json representation of a campaign |

### Return type

[**\Swagger\Client\Model\Automated**](../Model/Automated.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsNameCancelPost**
> campaignsNameCancelPost($name)

Cancels emails that are waiting to be sent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Name of selected channel.

try {
    $apiInstance->campaignsNameCancelPost($name);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsNameCancelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of selected channel. |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsSendnowGet**
> \Swagger\Client\Model\Campaign[] campaignsSendnowGet($search, $offset, $limit)

List all of your instant campaigns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = "search_example"; // string | Text fragment used for searching.
$offset = 0; // int | How many items should be loaded ahead.
$limit = 0; // int | Maximum of loaded items.

try {
    $result = $apiInstance->campaignsSendnowGet($search, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsSendnowGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Text fragment used for searching. | [optional]
 **offset** | **int**| How many items should be loaded ahead. | [optional] [default to 0]
 **limit** | **int**| Maximum of loaded items. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\Campaign[]**](../Model/Campaign.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsSendnowNameDelete**
> campaignsSendnowNameDelete($name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Filename

try {
    $apiInstance->campaignsSendnowNameDelete($name);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsSendnowNameDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsSendnowNameGet**
> \Swagger\Client\Model\Campaign campaignsSendnowNameGet($name)

Retrieves an existing campaign.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Filename

try {
    $result = $apiInstance->campaignsSendnowNameGet($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsSendnowNameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename |

### Return type

[**\Swagger\Client\Model\Campaign**](../Model/Campaign.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsSendnowNamePut**
> \Swagger\Client\Model\Campaign campaignsSendnowNamePut($name, $body)

Updates a previously added campaign.  Only Active and Paused campaigns can be updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Filename
$body = new \Swagger\Client\Model\Campaign(); // \Swagger\Client\Model\Campaign | Json representation of a campaign

try {
    $result = $apiInstance->campaignsSendnowNamePut($name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsSendnowNamePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filename |
 **body** | [**\Swagger\Client\Model\Campaign**](../Model/Campaign.md)| Json representation of a campaign |

### Return type

[**\Swagger\Client\Model\Campaign**](../Model/Campaign.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsSendnowPost**
> \Swagger\Client\Model\Campaign campaignsSendnowPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Campaign(); // \Swagger\Client\Model\Campaign | Json representation of a campaign

try {
    $result = $apiInstance->campaignsSendnowPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsSendnowPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Campaign**](../Model/Campaign.md)| Json representation of a campaign |

### Return type

[**\Swagger\Client\Model\Campaign**](../Model/Campaign.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsTasksExportGet**
> \Swagger\Client\Model\ExportLink campaignsTasksExportGet($campaign_names, $file_format, $compression_format, $file_name)

Export selected campaigns to chosen file format.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_names = array("campaign_names_example"); // string[] | List of campaign names used for processing
$file_format = "Csv"; // string | Format of the exported file
$compression_format = "None"; // string | FileResponse compression format. None or Zip.
$file_name = "file_name_example"; // string | Name of your file.

try {
    $result = $apiInstance->campaignsTasksExportGet($campaign_names, $file_format, $compression_format, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsTasksExportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_names** | [**string[]**](../Model/string.md)| List of campaign names used for processing |
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

