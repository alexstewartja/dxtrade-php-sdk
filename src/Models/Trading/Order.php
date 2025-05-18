<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Enums\OrderSide;
use AlexStewartJa\DXtrade\Enums\OrderStatus;
use AlexStewartJa\DXtrade\Enums\OrderType;
use AlexStewartJa\DXtrade\Enums\PriceLink;
use AlexStewartJa\DXtrade\Enums\TimeInForce;
use AlexStewartJa\DXtrade\Temporal\DXtradeDateTime;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class Order
{
    use Arrayable;

    /**
     * Account in format clearing_code:account_code
     */
    private ?string $account = null;

    /**
     * Version
     */
    private ?int $version = null;

    /**
     * Order ID
     */
    private ?int $orderId = null;

    /**
     * Order code
     */
    private ?string $orderCode = null;

    /**
     * Client order ID
     */
    private ?string $clientOrderId = null;

    /**
     * Action code
     */
    private ?string $actionCode = null;

    /**
     * Leg count
     */
    private ?int $legCount = null;

    /**
     * Type
     *
     * @see OrderType
     */
    private ?string $type = null;

    /**
     * Instrument
     */
    private ?string $instrument = null;

    /**
     * Status
     *
     * @see OrderStatus
     */
    private ?string $status = null;

    /**
     * Final status
     */
    private ?bool $finalStatus = null;

    /**
     * Legs
     *
     * @var OrderLeg[]|null
     */
    private ?array $legs = null;

    /**
     * Side
     *
     * @see OrderSide
     */
    private ?string $side = null;

    /**
     * Time in force
     *
     * @see TimeInForce
     */
    private ?string $tif = null;

    /**
     * Transaction time
     */
    private ?DXtradeDateTime $transactionTime = null;

    /**
     * Margin rate
     */
    private ?float $marginRate = null;

    /**
     * Links
     *
     * @var OrderLink[]|null
     */
    private ?array $links = null;

    /**
     * Executions
     *
     * @var Execution[]|null
     */
    private ?array $executions = null;

    /**
     * Cash transactions
     *
     * @var CashTransaction[]|null
     */
    private ?array $cashTransactions = null;

    /**
     * Price offset
     */
    private ?float $priceOffset = null;

    /**
     * Price link
     *
     * @see PriceLink
     */
    private ?string $priceLink = null;

    /**
     * External order ID
     */
    private ?string $externalOrderId = null;

    /**
     * Hedged order ID
     */
    private ?int $hedgedOrderId = null;

    /**
     * Issue time - Timestamp in UTC when this order was accepted by the system
     */
    private ?DXtradeDateTime $issueTime = null;

    /**
     * Expire date - Order expiration date in UTC
     */
    private ?DXtradeDateTime $expireDate = null;

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
     * Get order ID.
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * Set order ID.
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;

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
     * Get action code.
     */
    public function getActionCode(): ?string
    {
        return $this->actionCode;
    }

    /**
     * Set action code.
     */
    public function setActionCode(?string $actionCode): self
    {
        $this->actionCode = $actionCode;

        return $this;
    }

    /**
     * Get leg count.
     */
    public function getLegCount(): ?int
    {
        return $this->legCount;
    }

    /**
     * Set leg count.
     */
    public function setLegCount(?int $legCount): self
    {
        $this->legCount = $legCount;

        return $this;
    }

    /**
     * Get type.
     *
     * @see OrderType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Set type.
     *
     * @see OrderType
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get instrument.
     */
    public function getInstrument(): ?string
    {
        return $this->instrument;
    }

    /**
     * Set instrument.
     */
    public function setInstrument(?string $instrument): self
    {
        $this->instrument = $instrument;

        return $this;
    }

    /**
     * Get status.
     *
     * @see OrderStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Set status.
     *
     * @see OrderStatus
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get final status.
     */
    public function getFinalStatus(): ?bool
    {
        return $this->finalStatus;
    }

    /**
     * Set final status.
     */
    public function setFinalStatus(?bool $finalStatus): self
    {
        $this->finalStatus = $finalStatus;

        return $this;
    }

    /**
     * Get legs.
     *
     * @return OrderLeg[]|null
     */
    public function getLegs(): ?array
    {
        return $this->legs;
    }

    /**
     * Set legs.
     *
     * @param  OrderLeg[]|null  $legs
     */
    public function setLegs(?array $legs): self
    {
        $this->legs = $legs;

        return $this;
    }

    /**
     * Get side.
     *
     * @see OrderSide
     */
    public function getSide(): ?string
    {
        return $this->side;
    }

    /**
     * Set side.
     *
     * @see OrderSide
     */
    public function setSide(?string $side): self
    {
        $this->side = $side;

        return $this;
    }

    /**
     * Get time in force.
     *
     * @see TimeInForce
     */
    public function getTif(): ?string
    {
        return $this->tif;
    }

    /**
     * Set time in force.
     *
     * @see TimeInForce
     */
    public function setTif(?string $tif): self
    {
        $this->tif = $tif;

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
     * Get margin rate.
     */
    public function getMarginRate(): ?float
    {
        return $this->marginRate;
    }

    /**
     * Set margin rate.
     */
    public function setMarginRate(?float $marginRate): self
    {
        $this->marginRate = $marginRate;

        return $this;
    }

    /**
     * Get links.
     *
     * @return OrderLink[]|null
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * Set links.
     *
     * @param  OrderLink[]|null  $links
     */
    public function setLinks(?array $links): self
    {
        $this->links = $links;

        return $this;
    }

    /**
     * Get executions.
     *
     * @return Execution[]|null
     */
    public function getExecutions(): ?array
    {
        return $this->executions;
    }

    /**
     * Set executions.
     *
     * @param  Execution[]|null  $executions
     */
    public function setExecutions(?array $executions): self
    {
        $this->executions = $executions;

        return $this;
    }

    /**
     * Get cash transactions.
     *
     * @return CashTransaction[]|null
     */
    public function getCashTransactions(): ?array
    {
        return $this->cashTransactions;
    }

    /**
     * Set cash transactions.
     *
     * @param  CashTransaction[]|null  $cashTransactions
     */
    public function setCashTransactions(?array $cashTransactions): self
    {
        $this->cashTransactions = $cashTransactions;

        return $this;
    }

    /**
     * Get price offset.
     */
    public function getPriceOffset(): ?float
    {
        return $this->priceOffset;
    }

    /**
     * Set price offset.
     */
    public function setPriceOffset(?float $priceOffset): self
    {
        $this->priceOffset = $priceOffset;

        return $this;
    }

    /**
     * Get price link.
     *
     * @see PriceLink
     */
    public function getPriceLink(): ?string
    {
        return $this->priceLink;
    }

    /**
     * Set price link.
     *
     * @see PriceLink
     */
    public function setPriceLink(?string $priceLink): self
    {
        $this->priceLink = $priceLink;

        return $this;
    }

    /**
     * Get external order ID.
     */
    public function getExternalOrderId(): ?string
    {
        return $this->externalOrderId;
    }

    /**
     * Set external order ID.
     */
    public function setExternalOrderId(?string $externalOrderId): self
    {
        $this->externalOrderId = $externalOrderId;

        return $this;
    }

    /**
     * Get hedged order ID.
     */
    public function getHedgedOrderId(): ?int
    {
        return $this->hedgedOrderId;
    }

    /**
     * Set hedged order ID.
     */
    public function setHedgedOrderId(?int $hedgedOrderId): self
    {
        $this->hedgedOrderId = $hedgedOrderId;

        return $this;
    }

    /**
     * Get issue time - Timestamp in UTC when this order was accepted by the system.
     */
    public function getIssueTime(): ?DXtradeDateTime
    {
        return $this->issueTime;
    }

    /**
     * Set issue time - Timestamp in UTC when this order was accepted by the system.
     */
    public function setIssueTime(?DXtradeDateTime $issueTime): self
    {
        $this->issueTime = $issueTime;

        return $this;
    }

    /**
     * Get expire date - Order expiration date in UTC.
     */
    public function getExpireDate(): ?DXtradeDateTime
    {
        return $this->expireDate;
    }

    /**
     * Set expire date - Order expiration date in UTC.
     */
    public function setExpireDate(?DXtradeDateTime $expireDate): self
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Get class list mappings.
     */
    public function getClassListMappings(): array
    {
        return [
            'legs' => OrderLeg::class,
            'links' => OrderLink::class,
            'executions' => Execution::class,
            'cashTransactions' => CashTransaction::class,
        ];
    }
}

