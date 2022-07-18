# Swagger\Client\CouponApi

All URIs are relative to https://api.legislate.tech

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEmailCouponSubscritpionUsingGET**](CouponApi.md#getemailcouponsubscritpionusingget) | **GET** /v1/email/coupon/{couponId}/register/{email} | Send an email with a coupon for new users.

# **getEmailCouponSubscritpionUsingGET**
> getEmailCouponSubscritpionUsingGET($coupon_id, $email)

Send an email with a coupon for new users.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: auth0_jwt
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coupon_id = "coupon_id_example"; // string | couponId
$email = "email_example"; // string | email

try {
    $apiInstance->getEmailCouponSubscritpionUsingGET($coupon_id, $email);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->getEmailCouponSubscritpionUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_id** | **string**| couponId |
 **email** | **string**| email |

### Return type

void (empty response body)

### Authorization

[auth0_jwt](../../README.md#auth0_jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

