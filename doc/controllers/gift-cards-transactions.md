# Gift Cards-Transactions

```php
$giftCardsTransactionsController = $client->getGiftCardsTransactionsController();
```

## Class Name

`GiftCardsTransactionsController`

## Methods

* [Reloadly-Gift-Cards-Transactions](../../doc/controllers/gift-cards-transactions.md#reloadly-gift-cards-transactions)
* [Reloadly-Gift-Cards-Transaction-by-Id](../../doc/controllers/gift-cards-transactions.md#reloadly-gift-cards-transaction-by-id)


# Reloadly-Gift-Cards-Transactions

```php
function reloadlyGiftCardsTransactions(
    string $accept,
    string $authorization,
    ?string $size = null,
    ?string $page = null,
    ?string $startDate = null,
    ?string $endDate = null
)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `authorization` | `string` | Header, Required | - |
| `size` | `?string` | Query, Optional | This indicates the number of transactions to be retrieved on a page. |
| `page` | `?string` | Query, Optional | This indicates the page of the transactions list being retrieved. |
| `startDate` | `?string` | Query, Optional | Indicates the start date for the range of transactions to be retrieved. |
| `endDate` | `?string` | Query, Optional | Indicates the end date for the range of transactions to be retrieved. |

## Response Type

`mixed`

## Example Usage

```php
$accept = 'application/com.reloadly.giftcards-v1+json';
$authorization = 'Bearer <YOUR_TOKEN_HERE>';
$size = '10';
$page = '1';
$startDate = '2021-06-01 10:00:00';
$endDate = '2021-07-20 19:17:02';

$result = $giftCardsTransactionsController->reloadlyGiftCardsTransactions($accept, $authorization, $size, $page, $startDate, $endDate);
```

## Example Response

```
[
  {
    "transactionId": 1,
    "amount": 60553.3575,
    "discount": 0,
    "currencyCode": "NGN",
    "fee": 198.35026,
    "customIdentifier": "obucks3",
    "status": "SUCCESSFUL",
    "product": {
      "productId": 4,
      "productName": "Amazon Spain",
      "countryCode": "ES",
      "quantity": 5,
      "unitPrice": 25,
      "totalPrice": 125,
      "currencyCode": "EUR",
      "brand": {
        "brandId": 2,
        "brandName": "Amazon"
      }
    },
    "smsFee": 56.91,
    "receipientPhone": 34657829900,
    "transactionCreatedTime": "2022-02-28 13:46:00"
  },
  {},
  {}
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Full authentication is required to access this resource | `ApiException` |
| 404 | Could not retrieve/update resources at the moment, please try again later | `ApiException` |


# Reloadly-Gift-Cards-Transaction-by-Id

```php
function reloadlyGiftCardsTransactionById(string $accept, string $authorization, string $transactionid)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `authorization` | `string` | Header, Required | - |
| `transactionid` | `string` | Template, Required | Indicates the identification number of the transaction to be retrieved. |

## Response Type

`mixed`

## Example Usage

```php
$accept = 'application/com.reloadly.giftcards-v1+json';
$authorization = 'Bearer <YOUR_TOKEN_HERE>';
$transactionid = '2';

$result = $giftCardsTransactionsController->reloadlyGiftCardsTransactionById($accept, $authorization, $transactionid);
```

## Example Response

```
[
  {
    "transactionId": 1,
    "amount": 60553.3575,
    "discount": 0,
    "currencyCode": "NGN",
    "fee": 198.35026,
    "customIdentifier": "obucks3",
    "status": "SUCCESSFUL",
    "product": {
      "productId": 4,
      "productName": "Amazon Spain",
      "countryCode": "ES",
      "quantity": 5,
      "unitPrice": 25,
      "totalPrice": 125,
      "currencyCode": "EUR",
      "brand": {
        "brandId": 2,
        "brandName": "Amazon"
      }
    },
    "smsFee": 56.91,
    "receipientPhone": 34657829900,
    "transactionCreatedTime": "2022-02-28 13:46:00"
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Indicates the identification number of the transaction to be retrieved. | `ApiException` |
| 404 | Could not retrieve/update resources at the moment, please try again later | `ApiException` |

