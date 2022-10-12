# Airtime-Topups

```php
$airtimeTopupsController = $client->getAirtimeTopupsController();
```

## Class Name

`AirtimeTopupsController`

## Methods

* [Reloadly-Airtime-Async-Topup](../../doc/controllers/airtime-topups.md#reloadly-airtime-async-topup)
* [Reloadly-Airtime-Topup](../../doc/controllers/airtime-topups.md#reloadly-airtime-topup)
* [Reloadly-Airtime-Topup-Status](../../doc/controllers/airtime-topups.md#reloadly-airtime-topup-status)


# Reloadly-Airtime-Async-Topup

```php
function reloadlyAirtimeAsyncTopup(string $accept, string $authorization, array $body)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `authorization` | `string` | Header, Required | - |
| `body` | `array` | Body, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = 'application/com.reloadly.topups-v1+json';
$authorization = 'Bearer <YOUR_TOKEN_HERE>';
$body = ReloadlySdkLib\ApiHelper::deserialize('{"operatorId":"444","amount":"1","useLocalAmount":false,"customIdentifier":"This is example identifier","recipientPhone":{"countryCode":"ES","number":"657228901"},"senderPhone":{"countryCode":"CA","number":"1231231231"}}');

$result = $airtimeTopupsController->reloadlyAirtimeAsyncTopup($accept, $authorization, $body);
```

## Example Response

```
{
  "transactionId": 4602843
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Recipient phone number is not valid | `ApiException` |
| 401 | Full authentication is required to access this resource | `ApiException` |
| 404 | Not Found | `ApiException` |


# Reloadly-Airtime-Topup

```php
function reloadlyAirtimeTopup(string $accept, string $authorization, array $body)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `authorization` | `string` | Header, Required | - |
| `body` | `array` | Body, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = 'application/com.reloadly.topups-v1+json';
$authorization = 'Bearer <YOUR_TOKEN_HERE>';
$body = ReloadlySdkLib\ApiHelper::deserialize('{"operatorId":"444","amount":"1","useLocalAmount":false,"customIdentifier":"This is example identifier","recipientPhone":{"countryCode":"ES","number":"657228901"},"senderPhone":{"countryCode":"CA","number":"1231231231"}}');

$result = $airtimeTopupsController->reloadlyAirtimeTopup($accept, $authorization, $body);
```

## Example Response

```
{
  "transactionId": 4602843,
  "status": "SUCCESSFUL",
  "operatorTransactionId": "7297929551:OrderConfirmed",
  "customIdentifier": "This is example identifier 130",
  "recipientPhone": 447951631337,
  "recipientEmail": null,
  "senderPhone": 11231231231,
  "countryCode": "GB",
  "operatorId": 535,
  "operatorName": "EE PIN England",
  "discount": 63.37,
  "discountCurrencyCode": "NGN",
  "requestedAmount": 3168.4,
  "requestedAmountCurrencyCode": "NGN",
  "deliveredAmount": 4.9985,
  "deliveredAmountCurrencyCode": "GBP",
  "transactionDate": "2021-12-06 08:13:39",
  "pinDetail": {
    "serial": 558111,
    "info1": "DIAL *611",
    "info2": "DIAL *611",
    "info3": "DIAL *611",
    "value": null,
    "code": 773709733097662,
    "ivr": "1-888-888-8888",
    "validity": "30 days"
  },
  "balanceInfo": {
    "oldBalance": 5109.53732,
    "newBalance": 2004.50532,
    "currencyCode": "NGN",
    "currencyName": "Nigerian Naira",
    "updatedAt": "2021-12-06 13:13:39"
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Recipient phone number is not valid | `ApiException` |
| 401 | Full authentication is required to access this resource | `ApiException` |
| 404 | Not Found | `ApiException` |


# Reloadly-Airtime-Topup-Status

```php
function reloadlyAirtimeTopupStatus(string $accept, string $authorization, string $transactionid)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `authorization` | `string` | Header, Required | - |
| `transactionid` | `string` | Template, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = 'application/com.reloadly.topups-v1+json';
$authorization = 'Bearer <YOUR_TOKEN_HERE>';
$transactionid = 'transactionid8';

$result = $airtimeTopupsController->reloadlyAirtimeTopupStatus($accept, $authorization, $transactionid);
```

## Example Response

```
{
  "transactionId": 4602843,
  "status": "SUCCESSFUL",
  "operatorTransactionId": "7297929551:OrderConfirmed",
  "customIdentifier": "This is example identifier 130",
  "recipientPhone": 447951631337,
  "recipientEmail": null,
  "senderPhone": 11231231231,
  "countryCode": "GB",
  "operatorId": 535,
  "operatorName": "EE PIN England",
  "discount": 63.37,
  "discountCurrencyCode": "NGN",
  "requestedAmount": 3168.4,
  "requestedAmountCurrencyCode": "NGN",
  "deliveredAmount": 4.9985,
  "deliveredAmountCurrencyCode": "GBP",
  "transactionDate": "2021-12-06 08:13:39",
  "pinDetail": {
    "serial": 558111,
    "info1": "DIAL *611",
    "info2": "DIAL *611",
    "info3": "DIAL *611",
    "value": null,
    "code": 773709733097662,
    "ivr": "1-888-888-8888",
    "validity": "30 days"
  },
  "balanceInfo": {
    "oldBalance": 5109.53732,
    "newBalance": 2004.50532,
    "currencyCode": "NGN",
    "currencyName": "Nigerian Naira",
    "updatedAt": "2021-12-06 13:13:39"
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Full authentication is required to access this resource | `ApiException` |
| 404 | Not Found | `ApiException` |

