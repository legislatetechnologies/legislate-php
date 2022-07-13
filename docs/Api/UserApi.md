# Swagger\Client\UserApi

All URIs are relative to *//localhost:8080/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUserUsingPOST**](UserApi.md#createuserusingpost) | **POST** /v1/users | Create a user
[**getUserUsingGET**](UserApi.md#getuserusingget) | **GET** /v1/users/{userId} | Get user details.
[**getUsersUsingGET**](UserApi.md#getusersusingget) | **GET** /v1/users | Get all users.

# **createUserUsingPOST**
> \Swagger\Client\Model\Link createUserUsingPOST($body)

Create a user

This operation will create a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateUserRequestDTO(); // \Swagger\Client\Model\CreateUserRequestDTO | createUserRequestDTO

try {
    $result = $apiInstance->createUserUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->createUserUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateUserRequestDTO**](../Model/CreateUserRequestDTO.md)| createUserRequestDTO |

### Return type

[**\Swagger\Client\Model\Link**](../Model/Link.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserUsingGET**
> \Swagger\Client\Model\UserResponseDTO getUserUsingGET($user_id)

Get user details.

This operation will retrieve details about a given user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | The unique Id of the user you'd like to look up.

try {
    $result = $apiInstance->getUserUsingGET($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The unique Id of the user you&#x27;d like to look up. |

### Return type

[**\Swagger\Client\Model\UserResponseDTO**](../Model/UserResponseDTO.md)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersUsingGET**
> object[] getUsersUsingGET()

Get all users.

This operation will retrieve all users.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUsersUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUsersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object[]**

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

