# Swagger\Client\ContractTypeApi

All URIs are relative to *//localhost:8080/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getContractTypePerTeamUsingGET**](ContractTypeApi.md#getcontracttypeperteamusingget) | **GET** /v1/teams/{teamId}/contract-types/{contractTypeId} | Get information relative a given contract type.
[**getContractTypeUsingGET**](ContractTypeApi.md#getcontracttypeusingget) | **GET** /v1/contract-types/{contractTypeId} | Get contract type terms.
[**getContractTypesPerTeamUsingGET**](ContractTypeApi.md#getcontracttypesperteamusingget) | **GET** /v1/teams/{teamId}/contract-types | Get contract types of a team
[**getContractTypesUsingGET**](ContractTypeApi.md#getcontracttypesusingget) | **GET** /v1/contract-types | Get public contract types.

# **getContractTypePerTeamUsingGET**
> \Swagger\Client\Model\ContractTypeResponseDTO getContractTypePerTeamUsingGET($contract_type_id, $team_id)

Get information relative a given contract type.

This operation will retrieve information about a given contract type and a team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContractTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_type_id = 789; // int | The unique Id of the contract type you'd like to look up contract template information from.
$team_id = 789; // int | The unique Id of the team you wish to retrieve the contract type information from.

try {
    $result = $apiInstance->getContractTypePerTeamUsingGET($contract_type_id, $team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractTypeApi->getContractTypePerTeamUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_type_id** | **int**| The unique Id of the contract type you&#x27;d like to look up contract template information from. |
 **team_id** | **int**| The unique Id of the team you wish to retrieve the contract type information from. |

### Return type

[**\Swagger\Client\Model\ContractTypeResponseDTO**](../Model/ContractTypeResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContractTypeUsingGET**
> \Swagger\Client\Model\ContractTypeResponseDTO getContractTypeUsingGET($contract_type_id)

Get contract type terms.

This operation will retrieve terms about a given contract type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContractTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_type_id = 789; // int | The unique Id of the contract type you'd like to look up contract template information from.

try {
    $result = $apiInstance->getContractTypeUsingGET($contract_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractTypeApi->getContractTypeUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_type_id** | **int**| The unique Id of the contract type you&#x27;d like to look up contract template information from. |

### Return type

[**\Swagger\Client\Model\ContractTypeResponseDTO**](../Model/ContractTypeResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContractTypesPerTeamUsingGET**
> \Swagger\Client\Model\ContractTypeResponseDTO[] getContractTypesPerTeamUsingGET($team_id)

Get contract types of a team

This operation will retrieve information of every contract type relative a team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContractTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_id = 789; // int | The unique Id of the team you wish to retrieve the contract type information from.

try {
    $result = $apiInstance->getContractTypesPerTeamUsingGET($team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractTypeApi->getContractTypesPerTeamUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_id** | **int**| The unique Id of the team you wish to retrieve the contract type information from. |

### Return type

[**\Swagger\Client\Model\ContractTypeResponseDTO[]**](../Model/ContractTypeResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContractTypesUsingGET**
> \Swagger\Client\Model\ContractTypeResponseDTO[] getContractTypesUsingGET()

Get public contract types.

This operation will retrieve terms about a given contract type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContractTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getContractTypesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractTypeApi->getContractTypesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ContractTypeResponseDTO[]**](../Model/ContractTypeResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

