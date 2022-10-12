# Gift Cards-Account Balance

```php
$giftCardsAccountBalanceController = $client->getGiftCardsAccountBalanceController();
```

## Class Name

`GiftCardsAccountBalanceController`


# Reloadly-Gift-Cards-Account-Balance

```php
function reloadlyGiftCardsAccountBalance(string $accept, string $authorization)
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
$accept = 'application/com.reloadly.giftcards-v1+json';
$authorization = 'Bearer <YOUR_TOKEN_HERE>';

$result = $giftCardsAccountBalanceController->reloadlyGiftCardsAccountBalance($accept, $authorization);
```

## Example Response

```
{
  "balance": 6000,
  "currencyCode": "USD",
  "currencyName": "US Dollar",
  "updatedAt": "2022-02-04 17:45:51"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Full authentication is required to access this resource | `ApiException` |
| 404 | Not Found | `ApiException` |

