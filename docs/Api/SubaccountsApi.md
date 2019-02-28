# Swagger\Client\SubaccountsApi

All URIs are relative to *https://api.elasticemail.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subaccountsEmailCreditsDelete**](SubaccountsApi.md#subaccountsEmailCreditsDelete) | **DELETE** /subaccounts/{email}/credits | Remove email, template or litmus credits from a sub-account
[**subaccountsEmailCreditsPost**](SubaccountsApi.md#subaccountsEmailCreditsPost) | **POST** /subaccounts/{email}/credits | Add email credits to a sub-account
[**subaccountsEmailDelete**](SubaccountsApi.md#subaccountsEmailDelete) | **DELETE** /subaccounts/{email} | Deletes specified Subaccount
[**subaccountsEmailGet**](SubaccountsApi.md#subaccountsEmailGet) | **GET** /subaccounts/{email} | Retrieve info about one of your subaccounts
[**subaccountsEmailSettingsGet**](SubaccountsApi.md#subaccountsEmailSettingsGet) | **GET** /subaccounts/{email}/settings | Loads settings of subaccount
[**subaccountsEmailSettingsPut**](SubaccountsApi.md#subaccountsEmailSettingsPut) | **PUT** /subaccounts/{email}/settings | Updates settings of specified subaccount
[**subaccountsGet**](SubaccountsApi.md#subaccountsGet) | **GET** /subaccounts | Lists all of your subaccounts
[**subaccountsPost**](SubaccountsApi.md#subaccountsPost) | **POST** /subaccounts | Create new subaccount and provide most important data about it.


# **subaccountsEmailCreditsDelete**
> subaccountsEmailCreditsDelete($notes, $email, $credits, $remove_all)

Remove email, template or litmus credits from a sub-account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubaccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notes = "notes_example"; // string | Specific notes about the transaction
$email = "email_example"; // string | Email address of sub-account
$credits = 56; // int | Amount of credits to remove
$remove_all = False; // bool | Remove all credits of this type from sub-account (overrides credits if provided)

try {
    $apiInstance->subaccountsEmailCreditsDelete($notes, $email, $credits, $remove_all);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountsApi->subaccountsEmailCreditsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notes** | **string**| Specific notes about the transaction |
 **email** | **string**| Email address of sub-account |
 **credits** | **int**| Amount of credits to remove | [optional]
 **remove_all** | **bool**| Remove all credits of this type from sub-account (overrides credits if provided) | [optional] [default to False]

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subaccountsEmailCreditsPost**
> subaccountsEmailCreditsPost($body, $email)

Add email credits to a sub-account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubaccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SubaccountCreditsPayload(); // \Swagger\Client\Model\SubaccountCreditsPayload | Amount of credits to add
$email = "email_example"; // string | Email address of sub-account

try {
    $apiInstance->subaccountsEmailCreditsPost($body, $email);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountsApi->subaccountsEmailCreditsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SubaccountCreditsPayload**](../Model/SubaccountCreditsPayload.md)| Amount of credits to add |
 **email** | **string**| Email address of sub-account |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subaccountsEmailDelete**
> subaccountsEmailDelete($email)

Deletes specified Subaccount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubaccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | Email address of sub-account

try {
    $apiInstance->subaccountsEmailDelete($email);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountsApi->subaccountsEmailDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Email address of sub-account |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subaccountsEmailGet**
> \Swagger\Client\Model\SubAccount subaccountsEmailGet($email)

Retrieve info about one of your subaccounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubaccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | Email address of sub-account

try {
    $result = $apiInstance->subaccountsEmailGet($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountsApi->subaccountsEmailGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Email address of sub-account |

### Return type

[**\Swagger\Client\Model\SubAccount**](../Model/SubAccount.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subaccountsEmailSettingsGet**
> \Swagger\Client\Model\SubAccountSettings subaccountsEmailSettingsGet($email)

Loads settings of subaccount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubaccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | Email address of sub-account

try {
    $result = $apiInstance->subaccountsEmailSettingsGet($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountsApi->subaccountsEmailSettingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Email address of sub-account |

### Return type

[**\Swagger\Client\Model\SubAccountSettings**](../Model/SubAccountSettings.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subaccountsEmailSettingsPut**
> \Swagger\Client\Model\SubAccountSettings subaccountsEmailSettingsPut($email, $body)

Updates settings of specified subaccount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubaccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | Email address of sub-account
$body = new \Swagger\Client\Model\SubAccountSettings(); // \Swagger\Client\Model\SubAccountSettings | Http notification settings serialized to JSON

try {
    $result = $apiInstance->subaccountsEmailSettingsPut($email, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountsApi->subaccountsEmailSettingsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Email address of sub-account |
 **body** | [**\Swagger\Client\Model\SubAccountSettings**](../Model/SubAccountSettings.md)| Http notification settings serialized to JSON |

### Return type

[**\Swagger\Client\Model\SubAccountSettings**](../Model/SubAccountSettings.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subaccountsGet**
> \Swagger\Client\Model\SubAccount[] subaccountsGet($limit, $offset)

Lists all of your subaccounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubaccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 0; // int | Maximum of loaded items.
$offset = 0; // int | How many items should be loaded ahead.

try {
    $result = $apiInstance->subaccountsGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountsApi->subaccountsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum of loaded items. | [optional] [default to 0]
 **offset** | **int**| How many items should be loaded ahead. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\SubAccount[]**](../Model/SubAccount.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subaccountsPost**
> \Swagger\Client\Model\Account subaccountsPost($body)

Create new subaccount and provide most important data about it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubaccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SubaccountPayload(); // \Swagger\Client\Model\SubaccountPayload | 

try {
    $result = $apiInstance->subaccountsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountsApi->subaccountsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SubaccountPayload**](../Model/SubaccountPayload.md)|  |

### Return type

[**\Swagger\Client\Model\Account**](../Model/Account.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

