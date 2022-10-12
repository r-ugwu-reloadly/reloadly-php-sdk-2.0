# Utility Payments-Pay Bill

```php
$utilityPaymentsPayBillController = $client->getUtilityPaymentsPayBillController();
```

## Class Name

`UtilityPaymentsPayBillController`


# Reloadly-Utility-Payments-Pay-Bill

```php
function reloadlyUtilityPaymentsPayBill(
    string $accept,
    string $authorization,
    ReloadlyUtilityPaymentsPayBillRequest $body
)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `authorization` | `string` | Header, Required | - |
| `body` | [`ReloadlyUtilityPaymentsPayBillRequest`](../../doc/models/reloadly-utility-payments-pay-bill-request.md) | Body, Required | Request Payload |

## Response Type

`mixed`

## Example Usage

```php
$accept = 'application/com.reloadly.utilities-v1+json';
$authorization = 'Bearer <YOUR_TOKEN_HERE>';
$body_subscriberAccountNumber = '04223568280';
$body_amount = 1000;
$body_billerId = 5;
$body_useLocalAmount = false;
$body = new Models\ReloadlyUtilityPaymentsPayBillRequest(
    $body_subscriberAccountNumber,
    $body_amount,
    $body_billerId,
    $body_useLocalAmount
);

$result = $utilityPaymentsPayBillController->reloadlyUtilityPaymentsPayBill($accept, $authorization, $body);
```

## Example Response

```
{
  "id": 36,
  "status": "PROCESSING",
  "referenceId": "4a391847-n193-22k8-wqkl-9h3s7428m036",
  "code": "PAYMENT_PROCESSING_IN_PROGRESS",
  "message": "The payment is being processed, status will be updated when biller processes the payment.",
  "submittedAt": "2022-05-18 09:13:53",
  "finalStatusAvailabilityAt": "2022-05-19 09:13:52"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Full authentication is required to access this resource | `ApiException` |
| 404 | Not Found | `ApiException` |

