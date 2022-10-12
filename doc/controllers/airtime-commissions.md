# Airtime-Commissions

```php
$airtimeCommissionsController = $client->getAirtimeCommissionsController();
```

## Class Name

`AirtimeCommissionsController`

## Methods

* [Reloadly-Airtime-Commissions](../../doc/controllers/airtime-commissions.md#reloadly-airtime-commissions)
* [Reloadly-Airtime-Commission-by-Id](../../doc/controllers/airtime-commissions.md#reloadly-airtime-commission-by-id)


# Reloadly-Airtime-Commissions

```php
function reloadlyAirtimeCommissions(string $accept, string $authorization, ?int $size = null, ?int $page = null)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `authorization` | `string` | Header, Required | - |
| `size` | `?int` | Query, Optional | This indicates the number of operators offering discounts to be retrieved on a page. Default value is 200. |
| `page` | `?int` | Query, Optional | This indicates the page of the discounts list being retrieved. Default value is 1. |

## Response Type

`mixed`

## Example Usage

```php
$accept = 'application/com.reloadly.topups-v1+json';
$authorization = 'Bearer <YOUR_TOKEN_HERE>';
$size = 10;
$page = 1;

$result = $airtimeCommissionsController->reloadlyAirtimeCommissions($accept, $authorization, $size, $page);
```

## Example Response

```
{
  "content": [
    {
      "operator": {
        "operatorId": 1,
        "name": "Afghan Wireless Afghanistan",
        "countryCode": "AF",
        "status": true,
        "bundle": false
      },
      "percentage": 10,
      "internationalPercentage": 10,
      "localPercentage": 0,
      "updatedAt": "2021-06-26 03:36:16"
    },
    {},
    {}
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Full authentication is required to access this resource | `ApiException` |
| 404 | Not Found | `ApiException` |


# Reloadly-Airtime-Commission-by-Id

```php
function reloadlyAirtimeCommissionById(string $accept, string $authorization, string $operatorid)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `authorization` | `string` | Header, Required | - |
| `operatorid` | `string` | Template, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = 'application/com.reloadly.topups-v1+json';
$authorization = 'Bearer <YOUR_TOKEN_HERE>';
$operatorid = '341';

$result = $airtimeCommissionsController->reloadlyAirtimeCommissionById($accept, $authorization, $operatorid);
```

## Example Response

```
{
  "operator": {
    "operatorId": 1,
    "name": "Afghan Wireless Afghanistan",
    "countryCode": "AF",
    "status": true,
    "bundle": false
  },
  "percentage": 10,
  "internationalPercentage": 10,
  "localPercentage": 0,
  "updatedAt": "2021-06-26 03:36:16"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Full authentication is required to access this resource | `ApiException` |
| 404 | Operator not found for given ID | `ApiException` |

