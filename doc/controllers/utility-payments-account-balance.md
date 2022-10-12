# Utility Payments-Account Balance

```php
$utilityPaymentsAccountBalanceController = $client->getUtilityPaymentsAccountBalanceController();
```

## Class Name

`UtilityPaymentsAccountBalanceController`


# Reloadly-Utility-Payments-Account-Balance

```php
function reloadlyUtilityPaymentsAccountBalance(string $accept, string $authorization)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `authorization` | `string` | Header, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = 'application/com.reloadly.utilities-v1+json';
$authorization = 'Bearer <YOUR_TOKEN_HERE>';

$result = $utilityPaymentsAccountBalanceController->reloadlyUtilityPaymentsAccountBalance($accept, $authorization);
```

## Example Response

```
{
  "balance": 5000,
  "currencyCode": "USD",
  "currencyName": "US Dollar",
  "updatedAt": "2021-12-04 08:45:51"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Full authentication is required to access this resource | `ApiException` |
| 404 | Not Found | `ApiException` |

