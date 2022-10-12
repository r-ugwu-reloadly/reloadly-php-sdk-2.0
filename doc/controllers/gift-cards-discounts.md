# Gift Cards-Discounts

```php
$giftCardsDiscountsController = $client->getGiftCardsDiscountsController();
```

## Class Name

`GiftCardsDiscountsController`

## Methods

* [Reloadly-Gift-Cards-Discounts](../../doc/controllers/gift-cards-discounts.md#reloadly-gift-cards-discounts)
* [Reloadly-Gift-Cards-Discount-by-Product-Id](../../doc/controllers/gift-cards-discounts.md#reloadly-gift-cards-discount-by-product-id)


# Reloadly-Gift-Cards-Discounts

```php
function reloadlyGiftCardsDiscounts(
    string $accept,
    string $authorization,
    ?string $size = null,
    ?string $page = null
)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `authorization` | `string` | Header, Required | - |
| `size` | `?string` | Template, Optional | Indicates the number of gift card products offering discounts to be retrieved on a page. |
| `page` | `?string` | Template, Optional | Indicates the page of the list of gift card products offering discounts. |

## Response Type

`mixed`

## Example Usage

```php
$accept = 'application/com.reloadly.giftcards-v1+json';
$authorization = 'Bearer <YOUR_TOKEN_HERE>';
$size = '50';
$page = '2';

$result = $giftCardsDiscountsController->reloadlyGiftCardsDiscounts($accept, $authorization, $size, $page);
```

## Example Response

```
[
  {
    "product": {
      "productId": 28,
      "productName": "Apple Music 12 month Canada",
      "countryCode": "CA",
      "global": false
    },
    "discountPercentage": 2
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


# Reloadly-Gift-Cards-Discount-by-Product-Id

```php
function reloadlyGiftCardsDiscountByProductId(string $accept, string $authorization, string $productid)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `authorization` | `string` | Header, Required | - |
| `productid` | `string` | Template, Required | The product's identification number. |

## Response Type

`mixed`

## Example Usage

```php
$accept = 'application/com.reloadly.giftcards-v1+json';
$authorization = 'Bearer <YOUR_TOKEN_HERE>';
$productid = '5';

$result = $giftCardsDiscountsController->reloadlyGiftCardsDiscountByProductId($accept, $authorization, $productid);
```

## Example Response

```
{
  "product": {
    "productId": 28,
    "productName": "Apple Music 12 month Canada",
    "countryCode": "CA",
    "global": false
  },
  "discountPercentage": 2
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Full authentication is required to access this resource | `ApiException` |
| 404 | Not found | `ApiException` |

