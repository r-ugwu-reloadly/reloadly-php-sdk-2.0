
# Reloadly Utility Payments Pay Bill Request

## Structure

`ReloadlyUtilityPaymentsPayBillRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriberAccountNumber` | `string` | Required | - | getSubscriberAccountNumber(): string | setSubscriberAccountNumber(string subscriberAccountNumber): void |
| `amount` | `int` | Required | - | getAmount(): int | setAmount(int amount): void |
| `billerId` | `int` | Required | - | getBillerId(): int | setBillerId(int billerId): void |
| `useLocalAmount` | `bool` | Required | - | getUseLocalAmount(): bool | setUseLocalAmount(bool useLocalAmount): void |

## Example (as JSON)

```json
{
  "subscriberAccountNumber": "04223568280",
  "amount": 1000,
  "billerId": 5,
  "useLocalAmount": false
}
```

