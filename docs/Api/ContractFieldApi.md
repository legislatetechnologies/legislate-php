# Swagger\Client\ContractFieldApi

All URIs are relative to https://api.legislate.tech

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTemplateTermUsingGET**](ContractFieldApi.md#gettemplatetermusingget) | **GET** /v1/terms/{termId} | Get template term.
[**getTemplateTermsUsingGET**](ContractFieldApi.md#gettemplatetermsusingget) | **GET** /v1/templates/{templateId}/terms | Get template terms.

# **getTemplateTermUsingGET**
> \Swagger\Client\Model\ContractFieldResponseDTO getTemplateTermUsingGET($term_id)

Get template term.

This operation will retrieve terms about a given template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContractFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$term_id = 789; // int | The unique Id of the field you'd like to look up.

try {
    $result = $apiInstance->getTemplateTermUsingGET($term_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractFieldApi->getTemplateTermUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **term_id** | **int**| The unique Id of the field you&#x27;d like to look up. |

### Return type

[**\Swagger\Client\Model\ContractFieldResponseDTO**](../Model/ContractFieldResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplateTermsUsingGET**
> \Swagger\Client\Model\ContractFieldResponseDTO[] getTemplateTermsUsingGET($template_id)

Get template terms.

This operation will retrieve terms about a given template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContractFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 789; // int | The unique Id of the team you'd like to retrieve the available contract types from.

try {
    $result = $apiInstance->getTemplateTermsUsingGET($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractFieldApi->getTemplateTermsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **int**| The unique Id of the team you&#x27;d like to retrieve the available contract types from. |

### Return type

[**\Swagger\Client\Model\ContractFieldResponseDTO[]**](../Model/ContractFieldResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

