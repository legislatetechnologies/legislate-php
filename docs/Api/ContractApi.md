# Swagger\Client\ContractApi

All URIs are relative to https://api.legislate.tech

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteContractUsingDELETE**](ContractApi.md#deletecontractusingdelete) | **DELETE** /v1/contracts/{contractId} | Deletes a contract by its id.
[**getContractFileUsingGET**](ContractApi.md#getcontractfileusingget) | **GET** /v1/contracts/{contractId}/pdf | Get contract pdf
[**getContractHtmlUsingGET**](ContractApi.md#getcontracthtmlusingget) | **GET** /v1/contracts/{contractId}/html | Get contract html
[**getContractUsingGET**](ContractApi.md#getcontractusingget) | **GET** /v1/contracts/{contractId} | Get contract details.
[**getContractsUsingGET**](ContractApi.md#getcontractsusingget) | **GET** /v1/teams/{teamId}/contracts | Get contracts in a team
[**postContractUsingPOST**](ContractApi.md#postcontractusingpost) | **POST** /v1/teams/{teamId}/contracts | Create a contract with an auto-generated bundle.
[**updateContractUsingPATCH**](ContractApi.md#updatecontractusingpatch) | **PATCH** /v1/contracts/{contractId} | Updates a contract.

# **deleteContractUsingDELETE**
> \Swagger\Client\Model\CollaboratorResponseDTO deleteContractUsingDELETE($contract_id)

Deletes a contract by its id.

This operation will delete a contract by its id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 789; // int | The unique Id of the contract you'd like to delete.

try {
    $result = $apiInstance->deleteContractUsingDELETE($contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractApi->deleteContractUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **int**| The unique Id of the contract you&#x27;d like to delete. |

### Return type

[**\Swagger\Client\Model\CollaboratorResponseDTO**](../Model/CollaboratorResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContractFileUsingGET**
> string getContractFileUsingGET($contract_id)

Get contract pdf

Generate the pdf of a contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 789; // int | The unique Id of the contract you'd like to generate a pdf for.

try {
    $result = $apiInstance->getContractFileUsingGET($contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractApi->getContractFileUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **int**| The unique Id of the contract you&#x27;d like to generate a pdf for. |

### Return type

**string**

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContractHtmlUsingGET**
> string getContractHtmlUsingGET($contract_id)

Get contract html

Generate the html of a contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 789; // int | The unique Id of the contract you'd like to generate a html for.

try {
    $result = $apiInstance->getContractHtmlUsingGET($contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractApi->getContractHtmlUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **int**| The unique Id of the contract you&#x27;d like to generate a html for. |

### Return type

**string**

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContractUsingGET**
> \Swagger\Client\Model\ContractResponseDTO getContractUsingGET($contract_id)

Get contract details.

This operation will retrieve details about a given contract.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 789; // int | The unique Id of the contract configuration you'd like to look up.

try {
    $result = $apiInstance->getContractUsingGET($contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractApi->getContractUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **int**| The unique Id of the contract configuration you&#x27;d like to look up. |

### Return type

[**\Swagger\Client\Model\ContractResponseDTO**](../Model/ContractResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContractsUsingGET**
> \Swagger\Client\Model\ContractResponseDTO[] getContractsUsingGET($team_id)

Get contracts in a team

Fetch all the contracts which are part of a team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_id = 789; // int | The unique Id of the team you'd like to search the contracts.

try {
    $result = $apiInstance->getContractsUsingGET($team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractApi->getContractsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_id** | **int**| The unique Id of the team you&#x27;d like to search the contracts. |

### Return type

[**\Swagger\Client\Model\ContractResponseDTO[]**](../Model/ContractResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContractUsingPOST**
> \Swagger\Client\Model\Link postContractUsingPOST($body, $team_id)

Create a contract with an auto-generated bundle.

This operation will create a contract inside an automatically generated bundle.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateContractRequestDTO(); // \Swagger\Client\Model\CreateContractRequestDTO | createContractRequest
$team_id = 789; // int | The unique Id of the team where the contract will be located.

try {
    $result = $apiInstance->postContractUsingPOST($body, $team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractApi->postContractUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateContractRequestDTO**](../Model/CreateContractRequestDTO.md)| createContractRequest |
 **team_id** | **int**| The unique Id of the team where the contract will be located. |

### Return type

[**\Swagger\Client\Model\Link**](../Model/Link.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContractUsingPATCH**
> \Swagger\Client\Model\ContractResponseDTO updateContractUsingPATCH($body, $contract_id)

Updates a contract.

This operation will update a contract details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateContractRequestDTO(); // \Swagger\Client\Model\UpdateContractRequestDTO | fields
$contract_id = 789; // int | The unique Id of the contract you'd like to update.

try {
    $result = $apiInstance->updateContractUsingPATCH($body, $contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractApi->updateContractUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateContractRequestDTO**](../Model/UpdateContractRequestDTO.md)| fields |
 **contract_id** | **int**| The unique Id of the contract you&#x27;d like to update. |

### Return type

[**\Swagger\Client\Model\ContractResponseDTO**](../Model/ContractResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

