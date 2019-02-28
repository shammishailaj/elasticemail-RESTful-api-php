# Swagger\Client\SegmentsApi

All URIs are relative to *https://api.elasticemail.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**segmentsGet**](SegmentsApi.md#segmentsGet) | **GET** /segments | Lists all your available Segments
[**segmentsNameDelete**](SegmentsApi.md#segmentsNameDelete) | **DELETE** /segments/{name} | Delete existing segment.
[**segmentsNameGet**](SegmentsApi.md#segmentsNameGet) | **GET** /segments/{name} | Lists your available Segment using the provided name
[**segmentsNamePut**](SegmentsApi.md#segmentsNamePut) | **PUT** /segments/{name} | Rename or change RULE for your segment
[**segmentsPost**](SegmentsApi.md#segmentsPost) | **POST** /segments | Create new segment, based on specified RULE.


# **segmentsGet**
> \Swagger\Client\Model\Segment[] segmentsGet($include_history, $from, $to)

Lists all your available Segments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_history = False; // bool | True: Include history of last 30 days. Otherwise, false.
$from = "from_example"; // string | From what date should the segment history be shown. In YYYY-MM-DDThh:mm:ss format.
$to = "to_example"; // string | To what date should the segment history be shown. In YYYY-MM-DDThh:mm:ss format.

try {
    $result = $apiInstance->segmentsGet($include_history, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->segmentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_history** | **bool**| True: Include history of last 30 days. Otherwise, false. | [optional] [default to False]
 **from** | **string**| From what date should the segment history be shown. In YYYY-MM-DDThh:mm:ss format. | [optional]
 **to** | **string**| To what date should the segment history be shown. In YYYY-MM-DDThh:mm:ss format. | [optional]

### Return type

[**\Swagger\Client\Model\Segment[]**](../Model/Segment.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **segmentsNameDelete**
> segmentsNameDelete($name)

Delete existing segment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Name of your segment.

try {
    $apiInstance->segmentsNameDelete($name);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->segmentsNameDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of your segment. |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **segmentsNameGet**
> \Swagger\Client\Model\Segment segmentsNameGet($name, $include_history, $from, $to)

Lists your available Segment using the provided name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Name of the segment you want to load. Will load all contacts if left empty or the 'All Contacts' name has been provided
$include_history = False; // bool | True: Include history of last 30 days. Otherwise, false.
$from = "from_example"; // string | From what date should the segment history be shown. In YYYY-MM-DDThh:mm:ss format.
$to = "to_example"; // string | To what date should the segment history be shown. In YYYY-MM-DDThh:mm:ss format.

try {
    $result = $apiInstance->segmentsNameGet($name, $include_history, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->segmentsNameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the segment you want to load. Will load all contacts if left empty or the &#39;All Contacts&#39; name has been provided |
 **include_history** | **bool**| True: Include history of last 30 days. Otherwise, false. | [optional] [default to False]
 **from** | **string**| From what date should the segment history be shown. In YYYY-MM-DDThh:mm:ss format. | [optional]
 **to** | **string**| To what date should the segment history be shown. In YYYY-MM-DDThh:mm:ss format. | [optional]

### Return type

[**\Swagger\Client\Model\Segment**](../Model/Segment.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **segmentsNamePut**
> \Swagger\Client\Model\Segment segmentsNamePut($name, $body)

Rename or change RULE for your segment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Name of your segment.
$body = new \Swagger\Client\Model\SegmentPayload(); // \Swagger\Client\Model\SegmentPayload | 

try {
    $result = $apiInstance->segmentsNamePut($name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->segmentsNamePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of your segment. |
 **body** | [**\Swagger\Client\Model\SegmentPayload**](../Model/SegmentPayload.md)|  |

### Return type

[**\Swagger\Client\Model\Segment**](../Model/Segment.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **segmentsPost**
> \Swagger\Client\Model\Segment segmentsPost($body)

Create new segment, based on specified RULE.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SegmentPayload(); // \Swagger\Client\Model\SegmentPayload | 

try {
    $result = $apiInstance->segmentsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->segmentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SegmentPayload**](../Model/SegmentPayload.md)|  |

### Return type

[**\Swagger\Client\Model\Segment**](../Model/Segment.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

