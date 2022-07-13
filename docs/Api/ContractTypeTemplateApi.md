# Swagger\Client\ContractTypeTemplateApi

All URIs are relative to *//localhost:8080/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTemplateUsingGET**](ContractTypeTemplateApi.md#gettemplateusingget) | **GET** /v1/teams/{teamId}/contract-types/{contractTypeId}/templates/{templateId} | Get contract template.
[**getTemplatesUsingGET**](ContractTypeTemplateApi.md#gettemplatesusingget) | **GET** /v1/teams/{teamId}/contract-types/{contractTypeId}/templates | Get the latest template version for a contract type

# **getTemplateUsingGET**
> \Swagger\Client\Model\ContractResponseDTO getTemplateUsingGET($contract_type_id, $team_id, $template_id)

Get contract template.

This operation will retrieve details about a given contract.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContractTypeTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_type_id = 789; // int | contractTypeId
$team_id = 789; // int | teamId
$template_id = 789; // int | templateId

try {
    $result = $apiInstance->getTemplateUsingGET($contract_type_id, $team_id, $template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractTypeTemplateApi->getTemplateUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_type_id** | **int**| contractTypeId |
 **team_id** | **int**| teamId |
 **template_id** | **int**| templateId |

### Return type

[**\Swagger\Client\Model\ContractResponseDTO**](../Model/ContractResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplatesUsingGET**
> \Swagger\Client\Model\ContractResponseDTO getTemplatesUsingGET($contract_type_id, $team_id)

Get the latest template version for a contract type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContractTypeTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_type_id = 789; // int | contractTypeId
$team_id = 789; // int | teamId

try {
    $result = $apiInstance->getTemplatesUsingGET($contract_type_id, $team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractTypeTemplateApi->getTemplatesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_type_id** | **int**| contractTypeId |
 **team_id** | **int**| teamId |

### Return type

[**\Swagger\Client\Model\ContractResponseDTO**](../Model/ContractResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

