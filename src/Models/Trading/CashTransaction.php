<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Enums\CashTransactionType;
use AlexStewartJa\DXtrade\Temporal\DXtradeDateTime;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class CashTransaction
{
    use Arrayable;

    /**
     * Account in format clearing_code:account_code
     */
    private ?string $account = null;

    /**
     * Transaction code
     */
    private ?string $transactionCode = null;

    /**
     * Order code
     */
    private ?string $orderCode = null;

    /**
     * Trade code
     */
    private ?string $tradeCode = null;

    /**
     * Version
     */
    private ?int $version = null;

    /**
     * Client order ID
     */
    private ?string $clientOrderId = null;

    /**
     * Type
     *
     * @see CashTransactionType
     */
    private ?string $type = null;

    /**
     * Value
     */
    private ?float $value = null;

    /**
     * Currency
     */
    private ?string $currency = null;

    /**
     * Transaction time
     */
    private ?DXtradeDateTime $transactionTime = null;

    /**
     * Position code
     */
    private ?string $positionCode = null;

    /**
     * Get account in format clearing_code:account_code.
     */
    public function getAccount(): ?string
    {
        return $this->account;
    }

    /**
     * Set account in format clearing_code:account_code.
     */
    public function setAccount(?string $account): self
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get transaction code.
     */
    public function getTransactionCode(): ?string
    {
        return $this->transactionCode;
    }

    /**
     * Set transaction code.
     */
    public function setTransactionCode(?string $transactionCode): self
    {
        $this->transactionCode = $transactionCode;

        return $this;
    }

    /**
     * Get order code.
     */
    public function getOrderCode(): ?string
    {
        return $this->orderCode;
    }

    /**
     * Set order code.
     */
    public function setOrderCode(?string $orderCode): self
    {
        $this->orderCode = $orderCode;

        return $this;
    }

    /**
     * Get trade code.
     */
    public function getTradeCode(): ?string
    {
        return $this->tradeCode;
    }

    /**
     * Set trade code.
     */
    public function setTradeCode(?string $tradeCode): self
    {
        $this->tradeCode = $tradeCode;

        return $this;
    }

    /**
     * Get version.
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }

    /**
     * Set version.
     */
    public function setVersion(?int $version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get client order ID.
     */
    public function getClientOrderId(): ?string
    {
        return $this->clientOrderId;
    }

    /**
     * Set client order ID.
     */
    public function setClientOrderId(?string $clientOrderId): self
    {
        $this->clientOrderId = $clientOrderId;

        return $this;
    }

    /**
     * Get type.
     *
     * @see CashTransactionType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Set type.
     *
     * @see CashTransactionType
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get value.
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * Set value.
     */
    public function setValue(?float $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get currency.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Set currency.
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get transaction time.
     */
    public function getTransactionTime(): ?DXtradeDateTime
    {
        return $this->transactionTime;
    }

    /**
     * Set transaction time.
     */
    public function setTransactionTime(?DXtradeDateTime $transactionTime): self
    {
        $this->transactionTime = $transactionTime;

        return $this;
    }

    /**
     * Get position code.
     */
    public function getPositionCode(): ?string
    {
        return $this->positionCode;
    }

    /**
     * Set position code.
     */
    public function setPositionCode(?string $positionCode): self
    {
        $this->positionCode = $positionCode;

        return $this;
    }
}
