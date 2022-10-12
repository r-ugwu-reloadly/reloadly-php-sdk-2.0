
# Reloadly Airtime Async Topup Request

## Structure

`ReloadlyAirtimeAsyncTopupRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `operatorId` | `string` | Required | - | getOperatorId(): string | setOperatorId(string operatorId): void |
| `amount` | `string` | Required | - | getAmount(): string | setAmount(string amount): void |
| `useLocalAmount` | `bool` | Required | - | getUseLocalAmount(): bool | setUseLocalAmount(bool useLocalAmount): void |
| `customIdentifier` | `string` | Required | - | getCustomIdentifier(): string | setCustomIdentifier(string customIdentifier): void |
| `recipientPhone` | [`RecipientPhone`](../../doc/models/recipient-phone.md) | Required | - | getRecipientPhone(): RecipientPhone | setRecipientPhone(RecipientPhone recipientPhone): void |
| `senderPhone` | [`SenderPhone`](../../doc/models/sender-phone.md) | Required | - | getSenderPhone(): SenderPhone | setSenderPhone(SenderPhone senderPhone): void |

## Example (as JSON)

```json
{
  "operatorId": "444",
  "amount": "1",
  "useLocalAmount": false,
  "customIdentifier": "This is example identifier",
  "recipientPhone": {
    "countryCode": "ES",
    "number": "657228901"
  },
  "senderPhone": {
    "countryCode": "CA",
    "number": "1231231231"
  }
}
```

