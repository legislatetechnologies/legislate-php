# Swagger\Client\TeamApi

All URIs are relative to *//localhost:8080/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTeamUsingGET**](TeamApi.md#getteamusingget) | **GET** /v1/teams/{teamId} | Get team details.
[**getTeamsUsingGET**](TeamApi.md#getteamsusingget) | **GET** /v1/users/{userId}/teams | Get teams.
[**postTeamUsingPOST**](TeamApi.md#postteamusingpost) | **POST** /v1/users/{userId}/teams | Create a team for a given user.
[**updateTeamUsingPATCH**](TeamApi.md#updateteamusingpatch) | **PATCH** /v1/teams/{teamId} | Updates a team.

# **getTeamUsingGET**
> \Swagger\Client\Model\TeamResponseDTO getTeamUsingGET($team_id)

Get team details.

This operation will retrieve details about a given team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_id = 789; // int | teamId

try {
    $result = $apiInstance->getTeamUsingGET($team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeamUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_id** | **int**| teamId |

### Return type

[**\Swagger\Client\Model\TeamResponseDTO**](../Model/TeamResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeamsUsingGET**
> \Swagger\Client\Model\TeamResponseDTO[] getTeamsUsingGET($user_id)

Get teams.

This operation will retrieve all teams for a given user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | The unique Id of the user you'd whose teams you'd like to query.

try {
    $result = $apiInstance->getTeamsUsingGET($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeamsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The unique Id of the user you&#x27;d whose teams you&#x27;d like to query. |

### Return type

[**\Swagger\Client\Model\TeamResponseDTO[]**](../Model/TeamResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTeamUsingPOST**
> \Swagger\Client\Model\TeamResponseDTO postTeamUsingPOST($body, $user_id)

Create a team for a given user.

This operation will create a team for a given user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateTeamRequestDTO(); // \Swagger\Client\Model\CreateTeamRequestDTO | createTeamRequest
$user_id = 789; // int | The unique Id of the user for whom you'd like to create a team.

try {
    $result = $apiInstance->postTeamUsingPOST($body, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->postTeamUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateTeamRequestDTO**](../Model/CreateTeamRequestDTO.md)| createTeamRequest |
 **user_id** | **int**| The unique Id of the user for whom you&#x27;d like to create a team. |

### Return type

[**\Swagger\Client\Model\TeamResponseDTO**](../Model/TeamResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTeamUsingPATCH**
> \Swagger\Client\Model\TeamResponseDTO updateTeamUsingPATCH($body, $team_id)

Updates a team.

This operation will update a team details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateTeamRequestDTO(); // \Swagger\Client\Model\UpdateTeamRequestDTO | updateTeamRquest
$team_id = 789; // int | The unique Id of the team you'd like to update.

try {
    $result = $apiInstance->updateTeamUsingPATCH($body, $team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->updateTeamUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateTeamRequestDTO**](../Model/UpdateTeamRequestDTO.md)| updateTeamRquest |
 **team_id** | **int**| The unique Id of the team you&#x27;d like to update. |

### Return type

[**\Swagger\Client\Model\TeamResponseDTO**](../Model/TeamResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

