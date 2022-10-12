<?php

declare(strict_types=1);

/*
 * ReloadlySdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ReloadlySdkLib\Models;

use stdClass;

class ReloadlyGiftCardsOrdersRequest implements \JsonSerializable
{
    /**
     * @var int
     */
    private $productId;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var int
     */
    private $unitPrice;

    /**
     * @var string
     */
    private $customIdentifier;

    /**
     * @var string
     */
    private $senderName;

    /**
     * @var string
     */
    private $recipientEmail;

    /**
     * @var RecipientPhoneDetails
     */
    private $recipientPhoneDetails;

    /**
     * @param int $productId
     * @param string $countryCode
     * @param int $quantity
     * @param int $unitPrice
     * @param string $customIdentifier
     * @param string $senderName
     * @param string $recipientEmail
     * @param RecipientPhoneDetails $recipientPhoneDetails
     */
    public function __construct(
        int $productId,
        string $countryCode,
        int $quantity,
        int $unitPrice,
        string $customIdentifier,
        string $senderName,
        string $recipientEmail,
        RecipientPhoneDetails $recipientPhoneDetails
    ) {
        $this->productId = $productId;
        $this->countryCode = $countryCode;
        $this->quantity = $quantity;
        $this->unitPrice = $unitPrice;
        $this->customIdentifier = $customIdentifier;
        $this->senderName = $senderName;
        $this->recipientEmail = $recipientEmail;
        $this->recipientPhoneDetails = $recipientPhoneDetails;
    }

    /**
     * Returns Product Id.
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     *
     * @required
     * @maps productId
     */
    public function setProductId(int $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Country Code.
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * Sets Country Code.
     *
     * @required
     * @maps countryCode
     */
    public function setCountryCode(string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    /**
     * Returns Quantity.
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     *
     * @required
     * @maps quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Unit Price.
     */
    public function getUnitPrice(): int
    {
        return $this->unitPrice;
    }

    /**
     * Sets Unit Price.
     *
     * @required
     * @maps unitPrice
     */
    public function setUnitPrice(int $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * Returns Custom Identifier.
     */
    public function getCustomIdentifier(): string
    {
        return $this->customIdentifier;
    }

    /**
     * Sets Custom Identifier.
     *
     * @required
     * @maps customIdentifier
     */
    public function setCustomIdentifier(string $customIdentifier): void
    {
        $this->customIdentifier = $customIdentifier;
    }

    /**
     * Returns Sender Name.
     */
    public function getSenderName(): string
    {
        return $this->senderName;
    }

    /**
     * Sets Sender Name.
     *
     * @required
     * @maps senderName
     */
    public function setSenderName(string $senderName): void
    {
        $this->senderName = $senderName;
    }

    /**
     * Returns Recipient Email.
     */
    public function getRecipientEmail(): string
    {
        return $this->recipientEmail;
    }

    /**
     * Sets Recipient Email.
     *
     * @required
     * @maps recipientEmail
     */
    public function setRecipientEmail(string $recipientEmail): void
    {
        $this->recipientEmail = $recipientEmail;
    }

    /**
     * Returns Recipient Phone Details.
     */
    public function getRecipientPhoneDetails(): RecipientPhoneDetails
    {
        return $this->recipientPhoneDetails;
    }

    /**
     * Sets Recipient Phone Details.
     *
     * @required
     * @maps recipientPhoneDetails
     */
    public function setRecipientPhoneDetails(RecipientPhoneDetails $recipientPhoneDetails): void
    {
        $this->recipientPhoneDetails = $recipientPhoneDetails;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['productId']             = $this->productId;
        $json['countryCode']           = $this->countryCode;
        $json['quantity']              = $this->quantity;
        $json['unitPrice']             = $this->unitPrice;
        $json['customIdentifier']      = $this->customIdentifier;
        $json['senderName']            = $this->senderName;
        $json['recipientEmail']        = $this->recipientEmail;
        $json['recipientPhoneDetails'] = $this->recipientPhoneDetails;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
