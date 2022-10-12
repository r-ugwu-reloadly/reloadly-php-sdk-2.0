
# Reloadly Gift Cards Orders Request

## Structure

`ReloadlyGiftCardsOrdersRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productId` | `int` | Required | - | getProductId(): int | setProductId(int productId): void |
| `countryCode` | `string` | Required | - | getCountryCode(): string | setCountryCode(string countryCode): void |
| `quantity` | `int` | Required | - | getQuantity(): int | setQuantity(int quantity): void |
| `unitPrice` | `int` | Required | - | getUnitPrice(): int | setUnitPrice(int unitPrice): void |
| `customIdentifier` | `string` | Required | - | getCustomIdentifier(): string | setCustomIdentifier(string customIdentifier): void |
| `senderName` | `string` | Required | - | getSenderName(): string | setSenderName(string senderName): void |
| `recipientEmail` | `string` | Required | - | getRecipientEmail(): string | setRecipientEmail(string recipientEmail): void |
| `recipientPhoneDetails` | [`RecipientPhoneDetails`](../../doc/models/recipient-phone-details.md) | Required | - | getRecipientPhoneDetails(): RecipientPhoneDetails | setRecipientPhoneDetails(RecipientPhoneDetails recipientPhoneDetails): void |

## Example (as JSON)

```json
{
  "productId": 120,
  "countryCode": "US",
  "quantity": 1,
  "unitPrice": 1,
  "customIdentifier": "obucks10",
  "senderName": "John Doe",
  "recipientEmail": "anyone@email.com",
  "recipientPhoneDetails": {
    "countryCode": "ES",
    "phoneNumber": "657228901"
  }
}
```

