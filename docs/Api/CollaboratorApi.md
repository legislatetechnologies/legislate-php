# Swagger\Client\CollaboratorApi

All URIs are relative to https://api.legislate.tech

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCollaboratorUsingDELETE**](CollaboratorApi.md#deletecollaboratorusingdelete) | **DELETE** /v1/collaborators/{collaboratorId} | Delete a Collaborator by its id.
[**getCollaboratorIdentityFieldsUsingGET**](CollaboratorApi.md#getcollaboratoridentityfieldsusingget) | **GET** /v1/templates/{idTemplate}/fields | Get Identity fields
[**getCollaboratorUsingGET**](CollaboratorApi.md#getcollaboratorusingget) | **GET** /v1/collaborators/{collaboratorId} | Get contract collaborator details
[**getCollaboratorsUsingGET**](CollaboratorApi.md#getcollaboratorsusingget) | **GET** /v1/contracts/{contractId}/collaborators | Get collaborators for a given contract
[**postCollaboratorUsingPOST**](CollaboratorApi.md#postcollaboratorusingpost) | **POST** /v1/contracts/{contractId}/collaborators | Create a collaborator given a contract
[**postCompanyUsingPOST**](CollaboratorApi.md#postcompanyusingpost) | **POST** /v1/contracts/{contractId}/company | Create a company given a contract
[**updateCollaboratorBinaryFileSignatureUsingPATCH**](CollaboratorApi.md#updatecollaboratorbinaryfilesignatureusingpatch) | **PATCH** /v1/collaborators/{collaboratorId}/signature | Upload a signature to a collaborator
[**updateCollaboratorFieldsUsingPATCH**](CollaboratorApi.md#updatecollaboratorfieldsusingpatch) | **PATCH** /v1/collaborators/{collaboratorId}/fields | Update collaborator fields
[**updateCollaboratorRolesUsingPATCH**](CollaboratorApi.md#updatecollaboratorrolesusingpatch) | **PATCH** /v1/collaborators/{collaboratorId}/roles | Update collaborator role
[**updateCollaboratorSignatureUsingPATCH**](CollaboratorApi.md#updatecollaboratorsignatureusingpatch) | **PATCH** /v1/collaborators/{collaboratorId}/user-signature | Upload a signature to a collaborator

# **deleteCollaboratorUsingDELETE**
> deleteCollaboratorUsingDELETE($collaborator_id)

Delete a Collaborator by its id.

This operation will delete a Collaborator by its id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CollaboratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collaborator_id = 789; // int | The unique Id of the contract collaborator you'd like to delete.

try {
    $apiInstance->deleteCollaboratorUsingDELETE($collaborator_id);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorApi->deleteCollaboratorUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collaborator_id** | **int**| The unique Id of the contract collaborator you&#x27;d like to delete. |

### Return type

void (empty response body)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCollaboratorIdentityFieldsUsingGET**
> \Swagger\Client\Model\IdentityFieldsCollaboratorRoleDTO[] getCollaboratorIdentityFieldsUsingGET($id_template, $roles, $side)

Get Identity fields

This operation will retrieve the fields need to be filled due to a side and a list of roles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CollaboratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_template = 789; // int | The unique Id of the template of the contract which is associated with the collaborator.
$roles = array("roles_example"); // string[] | The role of the contract collaborator.
$side = "side_example"; // string | The sde of the contract collaborator.

try {
    $result = $apiInstance->getCollaboratorIdentityFieldsUsingGET($id_template, $roles, $side);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorApi->getCollaboratorIdentityFieldsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_template** | **int**| The unique Id of the template of the contract which is associated with the collaborator. |
 **roles** | [**string[]**](../Model/string.md)| The role of the contract collaborator. |
 **side** | **string**| The sde of the contract collaborator. |

### Return type

[**\Swagger\Client\Model\IdentityFieldsCollaboratorRoleDTO[]**](../Model/IdentityFieldsCollaboratorRoleDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCollaboratorUsingGET**
> \Swagger\Client\Model\ContractCollaboratorResponseDTO getCollaboratorUsingGET($collaborator_id)

Get contract collaborator details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CollaboratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collaborator_id = 789; // int | The unique Id of the contract collaborator you'd like to look up.

try {
    $result = $apiInstance->getCollaboratorUsingGET($collaborator_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorApi->getCollaboratorUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collaborator_id** | **int**| The unique Id of the contract collaborator you&#x27;d like to look up. |

### Return type

[**\Swagger\Client\Model\ContractCollaboratorResponseDTO**](../Model/ContractCollaboratorResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCollaboratorsUsingGET**
> \Swagger\Client\Model\ContractCollaboratorResponseDTO[] getCollaboratorsUsingGET($contract_id)

Get collaborators for a given contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CollaboratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 789; // int | The unique Id of the contract associated with the collaborator you'd like to look up.

try {
    $result = $apiInstance->getCollaboratorsUsingGET($contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorApi->getCollaboratorsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **int**| The unique Id of the contract associated with the collaborator you&#x27;d like to look up. |

### Return type

[**\Swagger\Client\Model\ContractCollaboratorResponseDTO[]**](../Model/ContractCollaboratorResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCollaboratorUsingPOST**
> \Swagger\Client\Model\Link postCollaboratorUsingPOST($body, $contract_id)

Create a collaborator given a contract

This operation will create a collaborator associated to the contract given

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CollaboratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CollaboratorFieldsRequestDTO(); // \Swagger\Client\Model\CollaboratorFieldsRequestDTO | createCollaboratorRequestDTO
$contract_id = 789; // int | The unique Id of the contract associated with the collaborator you'd like to look up.

try {
    $result = $apiInstance->postCollaboratorUsingPOST($body, $contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorApi->postCollaboratorUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CollaboratorFieldsRequestDTO**](../Model/CollaboratorFieldsRequestDTO.md)| createCollaboratorRequestDTO |
 **contract_id** | **int**| The unique Id of the contract associated with the collaborator you&#x27;d like to look up. |

### Return type

[**\Swagger\Client\Model\Link**](../Model/Link.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCompanyUsingPOST**
> \Swagger\Client\Model\CompanyCreatedResponseDTO postCompanyUsingPOST($body, $contract_id)

Create a company given a contract

This operation will create a company associated to the contract given

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CollaboratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CompanyFieldsDTO(); // \Swagger\Client\Model\CompanyFieldsDTO | companyFieldsDTORequest
$contract_id = 789; // int | The unique Id of the contract configuration.

try {
    $result = $apiInstance->postCompanyUsingPOST($body, $contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorApi->postCompanyUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CompanyFieldsDTO**](../Model/CompanyFieldsDTO.md)| companyFieldsDTORequest |
 **contract_id** | **int**| The unique Id of the contract configuration. |

### Return type

[**\Swagger\Client\Model\CompanyCreatedResponseDTO**](../Model/CompanyCreatedResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCollaboratorBinaryFileSignatureUsingPATCH**
> \Swagger\Client\Model\ContractCollaboratorResponseDTO updateCollaboratorBinaryFileSignatureUsingPATCH($collaborator_id)

Upload a signature to a collaborator

This operation will sign a contract.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CollaboratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collaborator_id = 789; // int | The unique Id of the contract collaborator who is signing.

try {
    $result = $apiInstance->updateCollaboratorBinaryFileSignatureUsingPATCH($collaborator_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorApi->updateCollaboratorBinaryFileSignatureUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collaborator_id** | **int**| The unique Id of the contract collaborator who is signing. |

### Return type

[**\Swagger\Client\Model\ContractCollaboratorResponseDTO**](../Model/ContractCollaboratorResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCollaboratorFieldsUsingPATCH**
> \Swagger\Client\Model\ContractCollaboratorResponseDTO updateCollaboratorFieldsUsingPATCH($body, $collaborator_id)

Update collaborator fields

This operation will update a collaborator details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CollaboratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateCollaboratorIdentityFieldsRequestDTO(); // \Swagger\Client\Model\UpdateCollaboratorIdentityFieldsRequestDTO | fields
$collaborator_id = 789; // int | The unique Id of the contract collaborator you'd like to update.

try {
    $result = $apiInstance->updateCollaboratorFieldsUsingPATCH($body, $collaborator_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorApi->updateCollaboratorFieldsUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateCollaboratorIdentityFieldsRequestDTO**](../Model/UpdateCollaboratorIdentityFieldsRequestDTO.md)| fields |
 **collaborator_id** | **int**| The unique Id of the contract collaborator you&#x27;d like to update. |

### Return type

[**\Swagger\Client\Model\ContractCollaboratorResponseDTO**](../Model/ContractCollaboratorResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCollaboratorRolesUsingPATCH**
> \Swagger\Client\Model\ContractCollaboratorResponseDTO updateCollaboratorRolesUsingPATCH($body, $collaborator_id)

Update collaborator role

This operation will update a collaborator fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CollaboratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateFieldsCollaboratorDTO(); // \Swagger\Client\Model\UpdateFieldsCollaboratorDTO | fields
$collaborator_id = 789; // int | The unique Id of the contract collaborator who is signing.

try {
    $result = $apiInstance->updateCollaboratorRolesUsingPATCH($body, $collaborator_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorApi->updateCollaboratorRolesUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateFieldsCollaboratorDTO**](../Model/UpdateFieldsCollaboratorDTO.md)| fields |
 **collaborator_id** | **int**| The unique Id of the contract collaborator who is signing. |

### Return type

[**\Swagger\Client\Model\ContractCollaboratorResponseDTO**](../Model/ContractCollaboratorResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCollaboratorSignatureUsingPATCH**
> \Swagger\Client\Model\ContractCollaboratorResponseDTO updateCollaboratorSignatureUsingPATCH($collaborator_id)

Upload a signature to a collaborator

This operation will sign a contract.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CollaboratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collaborator_id = 789; // int | The unique Id of the contract collaborator who is signing.

try {
    $result = $apiInstance->updateCollaboratorSignatureUsingPATCH($collaborator_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorApi->updateCollaboratorSignatureUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collaborator_id** | **int**| The unique Id of the contract collaborator who is signing. |

### Return type

[**\Swagger\Client\Model\ContractCollaboratorResponseDTO**](../Model/ContractCollaboratorResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

