<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Enums\OrderStatus;
use AlexStewartJa\DXtrade\Temporal\DXtradeDateTime;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class Execution
{
    use Arrayable;

    /**
     * Account in format clearing_code:account_code
     */
    private ?string $account = null;

    /**
     * Execution code
     */
    private ?string $executionCode = null;

    /**
     * Order code
     */
    private ?string $orderCode = null;

    /**
     * Update order ID
     */
    private ?int $updateOrderId = null;

    /**
     * Version
     */
    private ?int $version = null;

    /**
     * Client order ID
     */
    private ?string $clientOrderId = null;

    /**
     * Action code
     */
    private ?string $actionCode = null;

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
     * Filled quantity
     */
    private ?float $filledQuantity = null;

    /**
     * Last quantity
     */
    private ?float $lastQuantity = null;

    /**
     * Filled quantity notional
     */
    private ?float $filledQuantityNotional = null;

    /**
     * Last quantity notional
     */
    private ?float $lastQuantityNotional = null;

    /**
     * Remaining quantity
     */
    private ?float $remainingQuantity = null;

    /**
     * Last price
     */
    private ?float $lastPrice = null;

    /**
     * Average price
     */
    private ?float $averagePrice = null;

    /**
     * Transaction time
     */
    private ?DXtradeDateTime $transactionTime = null;

    /**
     * Margin rate
     */
    private ?float $marginRate = null;

    /**
     * Reject reason
     */
    private ?string $rejectReason = null;

    /**
     * Reject code
     */
    private ?string $rejectCode = null;

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
     * Get execution code.
     */
    public function getExecutionCode(): ?string
    {
        return $this->executionCode;
    }

    /**
     * Set execution code.
     */
    public function setExecutionCode(?string $executionCode): self
    {
        $this->executionCode = $executionCode;

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
     * Get update order ID.
     */
    public function getUpdateOrderId(): ?int
    {
        return $this->updateOrderId;
    }

    /**
     * Set update order ID.
     */
    public function setUpdateOrderId(?int $updateOrderId): self
    {
        $this->updateOrderId = $updateOrderId;

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
     * Get filled quantity.
     */
    public function getFilledQuantity(): ?float
    {
        return $this->filledQuantity;
    }

    /**
     * Set filled quantity.
     */
    public function setFilledQuantity(?float $filledQuantity): self
    {
        $this->filledQuantity = $filledQuantity;

        return $this;
    }

    /**
     * Get last quantity.
     */
    public function getLastQuantity(): ?float
    {
        return $this->lastQuantity;
    }

    /**
     * Set last quantity.
     */
    public function setLastQuantity(?float $lastQuantity): self
    {
        $this->lastQuantity = $lastQuantity;

        return $this;
    }

    /**
     * Get filled quantity notional.
     */
    public function getFilledQuantityNotional(): ?float
    {
        return $this->filledQuantityNotional;
    }

    /**
     * Set filled quantity notional.
     */
    public function setFilledQuantityNotional(?float $filledQuantityNotional): self
    {
        $this->filledQuantityNotional = $filledQuantityNotional;

        return $this;
    }

    /**
     * Get last quantity notional.
     */
    public function getLastQuantityNotional(): ?float
    {
        return $this->lastQuantityNotional;
    }

    /**
     * Set last quantity notional.
     */
    public function setLastQuantityNotional(?float $lastQuantityNotional): self
    {
        $this->lastQuantityNotional = $lastQuantityNotional;

        return $this;
    }

    /**
     * Get remaining quantity.
     */
    public function getRemainingQuantity(): ?float
    {
        return $this->remainingQuantity;
    }

    /**
     * Set remaining quantity.
     */
    public function setRemainingQuantity(?float $remainingQuantity): self
    {
        $this->remainingQuantity = $remainingQuantity;

        return $this;
    }

    /**
     * Get last price.
     */
    public function getLastPrice(): ?float
    {
        return $this->lastPrice;
    }

    /**
     * Set last price.
     */
    public function setLastPrice(?float $lastPrice): self
    {
        $this->lastPrice = $lastPrice;

        return $this;
    }

    /**
     * Get average price.
     */
    public function getAveragePrice(): ?float
    {
        return $this->averagePrice;
    }

    /**
     * Set average price.
     */
    public function setAveragePrice(?float $averagePrice): self
    {
        $this->averagePrice = $averagePrice;

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
     * Get reject reason.
     */
    public function getRejectReason(): ?string
    {
        return $this->rejectReason;
    }

    /**
     * Set reject reason.
     */
    public function setRejectReason(?string $rejectReason): self
    {
        $this->rejectReason = $rejectReason;

        return $this;
    }

    /**
     * Get reject code.
     */
    public function getRejectCode(): ?string
    {
        return $this->rejectCode;
    }

    /**
     * Set reject code.
     */
    public function setRejectCode(?string $rejectCode): self
    {
        $this->rejectCode = $rejectCode;

        return $this;
    }
}
