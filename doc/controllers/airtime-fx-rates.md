# Airtime-FX Rates

```php
$airtimeFXRatesController = $client->getAirtimeFXRatesController();
```

## Class Name

`AirtimeFXRatesController`


# Reloadly-Airtime-Fx-Rates

```php
function reloadlyAirtimeFxRates(string $accept, string $authorization, array $body)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `authorization` | `string` | Header, Required | - |
| `body` | `array` | Body, Required | Payload description |

## Response Type

`mixed`

## Example Usage

```php
$accept = 'application/com.reloadly.topups-v1+json';
$authorization = 'Bearer <YOUR_TOKEN_HERE>';
$body = ReloadlySdkLib\ApiHelper::deserialize('{"operatorId":"1","amount":"1"}');

$result = $airtimeFXRatesController->reloadlyAirtimeFxRates($accept, $authorization, $body);
```

## Example Response

```
{
  "id": 174,
  "name": "Natcom Haiti",
  "fxRate": 465,
  "currencyCode": "HTG"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Full authentication is required to access this resource | `ApiException` |
| 404 | Not Found | `ApiException` |
| 500 | Fx rate is currently not available for this operator, please try again later or contact support. | `ApiException` |

