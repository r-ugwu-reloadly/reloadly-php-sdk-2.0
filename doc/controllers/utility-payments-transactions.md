# Utility Payments-Transactions

```php
$utilityPaymentsTransactionsController = $client->getUtilityPaymentsTransactionsController();
```

## Class Name

`UtilityPaymentsTransactionsController`

## Methods

* [Reloadly-Utility-Payments-Transactions](../../doc/controllers/utility-payments-transactions.md#reloadly-utility-payments-transactions)
* [Reloadly-Utility-Payments-Transaction-by-Id](../../doc/controllers/utility-payments-transactions.md#reloadly-utility-payments-transaction-by-id)


# Reloadly-Utility-Payments-Transactions

```php
function reloadlyUtilityPaymentsTransactions(
    string $accept,
    string $authorization,
    ?string $referenceId = null,
    ?int $page = null,
    ?int $size = null,
    ?string $startDate = null,
    ?string $endDate = null,
    ?string $status = null,
    ?string $serviceType = null,
    ?string $billerType = null,
    ?string $billerCountryCode = null
)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `authorization` | `string` | Header, Required | - |
| `referenceId` | `?string` | Query, Optional | The reference ID you may have specified while placing the transaction. |
| `page` | `?int` | Query, Optional | The page to be retrieved from the transaction list. |
| `size` | `?int` | Query, Optional | Number of items to include in a single page. |
| `startDate` | `?string` | Query, Optional | Indicates the start date for the range of transactions to be retrieved. |
| `endDate` | `?string` | Query, Optional | Indicates the end date for the range of transactions to be retrieved. |
| `status` | `?string` | Query, Optional | The transaction's status. Can be either PROCESSING, SUCCESSFUL, FAILED, or REFUNDED. |
| `serviceType` | `?string` | Query, Optional | The biller's service type. Can be either PREPAID or POSTPAID. |
| `billerType` | `?string` | Query, Optional | The biller's type. Can be either ELECTRICITY_BILL_PAYMENT, WATER_BILL_PAYMENT, TV_BILL_PAYMENT, or INTERNET_BILL_PAYMENT |
| `billerCountryCode` | `?string` | Query, Optional | Indicates the ISO code of the country where the biller is located. |

## Response Type

`mixed`

## Example Usage

```php
$accept = 'application/com.reloadly.utilities-v1+json';
$authorization = 'Bearer <YOUR_TOKEN_HERE>';
$referenceId = 'april-electricity-bill';
$page = 10;
$size = 1;
$startDate = '2021-06-01 00:00:00';
$endDate = '2022-06-01 10:00:00';
$status = 'PROCESSING';
$serviceType = 'PREPAID';
$billerType = 'ELECTRICITY_BILL_PAYMENT';
$billerCountryCode = 'NG';

$result = $utilityPaymentsTransactionsController->reloadlyUtilityPaymentsTransactions($accept, $authorization, $referenceId, $page, $size, $startDate, $endDate, $status, $serviceType, $billerType, $billerCountryCode);
```

## Example Response

```
[
  {
    "code": "PAYMENT_PROCESSED_SUCCESSFULLY",
    "message": "The payment was processed successfully",
    "transaction": {
      "id": 13,
      "status": "SUCCESSFUL",
      "referenceId": "april-electricity-bill",
      "amount": 1000,
      "amountCurrencyCode": "NGN",
      "deliveryAmount": 1000,
      "deliveryAmountCurrencyCode": "NGN",
      "fee": 0.25,
      "feeCurrencyCode": "USD",
      "discount": 0,
      "discountCurrencyCode": "USD",
      "submittedAt": "2022-03-29 07:04:21",
      "balanceInfo": {
        "oldBalance": 9997.34912,
        "newBalance": 9994.69824,
        "cost": 2.65088,
        "currencyCode": "USD",
        "curencyName": "US Dollar",
        "updatedAt": "2022-03-29 11:04:21"
      },
      "billDetails": {
        "type": "ELECTRICITY_BILL_PAYMENT",
        "billerId": 2,
        "billerName": "Abuja Electricity Postpaid",
        "billerCountryCode": "NG",
        "serviceType": "POSTPAID",
        "completedAt": "2022-03-29 07:04:25",
        "subscriberDetails": {
          "accountNumber": 4223568280
        }
      }
    }
  },
  {},
  {}
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Full authentication is required to access this resource | `ApiException` |
| 404 | Not Found | `ApiException` |


# Reloadly-Utility-Payments-Transaction-by-Id

```php
function reloadlyUtilityPaymentsTransactionById(string $accept, string $authorization, int $id)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `authorization` | `string` | Header, Required | - |
| `id` | `int` | Template, Required | The utility payment's identification number. |

## Response Type

`mixed`

## Example Usage

```php
$accept = 'application/com.reloadly.utilities-v1+json';
$authorization = 'Bearer <YOUR_TOKEN_HERE>';
$id = 10;

$result = $utilityPaymentsTransactionsController->reloadlyUtilityPaymentsTransactionById($accept, $authorization, $id);
```

## Example Response

```
[
  {
    "code": "PAYMENT_PROCESSED_SUCCESSFULLY",
    "message": "The payment was processed successfully",
    "transaction": {
      "id": 13,
      "status": "SUCCESSFUL",
      "referenceId": "april-electricity-bill",
      "amount": 1000,
      "amountCurrencyCode": "NGN",
      "deliveryAmount": 1000,
      "deliveryAmountCurrencyCode": "NGN",
      "fee": 0.25,
      "feeCurrencyCode": "USD",
      "discount": 0,
      "discountCurrencyCode": "USD",
      "submittedAt": "2022-03-29 07:04:21",
      "balanceInfo": {
        "oldBalance": 9997.34912,
        "newBalance": 9994.69824,
        "cost": 2.65088,
        "currencyCode": "USD",
        "curencyName": "US Dollar",
        "updatedAt": "2022-03-29 11:04:21"
      },
      "billDetails": {
        "type": "ELECTRICITY_BILL_PAYMENT",
        "billerId": 2,
        "billerName": "Abuja Electricity Postpaid",
        "billerCountryCode": "NG",
        "serviceType": "POSTPAID",
        "completedAt": "2022-03-29 07:04:25",
        "subscriberDetails": {
          "accountNumber": 4223568280
        }
      }
    }
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Full authentication is required to access this resource | `ApiException` |
| 404 | Not found | `ApiException` |

