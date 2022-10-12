
# Reloadly Auth Request

## Structure

`ReloadlyAuthRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `clientId` | `string` | Required | - | getClientId(): string | setClientId(string clientId): void |
| `clientSecret` | `string` | Required | - | getClientSecret(): string | setClientSecret(string clientSecret): void |
| `grantType` | `string` | Required | - | getGrantType(): string | setGrantType(string grantType): void |
| `audience` | `string` | Required | - | getAudience(): string | setAudience(string audience): void |

## Example (as JSON)

```json
{
  "client_id": "CLIENT_ID_GOES_HERE",
  "client_secret": "CLIENT_SECRET_GOES_HERE",
  "grant_type": "client_credentials",
  "audience": "https://topups.reloadly.com"
}
```

