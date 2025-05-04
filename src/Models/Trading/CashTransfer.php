<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Temporal\DXtradeDateTime;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class CashTransfer
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
     * Transfer code
     */
    private ?string $transferCode = null;

    /**
     * Comment
     */
    private ?string $comment = null;

    /**
     * Transaction time
     */
    private ?DXtradeDateTime $transactionTime = null;

    /**
     * Cash transactions
     */
    private ?array $cashTransactions = null;

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
     * Get transfer code.
     */
    public function getTransferCode(): ?string
    {
        return $this->transferCode;
    }

    /**
     * Set transfer code.
     */
    public function setTransferCode(?string $transferCode): self
    {
        $this->transferCode = $transferCode;

        return $this;
    }

    /**
     * Get comment.
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * Set comment.
     */
    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

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
     * Get cash transactions.
     */
    public function getCashTransactions(): ?array
    {
        return $this->cashTransactions;
    }

    /**
     * Set cash transactions.
     */
    public function setCashTransactions(?array $cashTransactions): self
    {
        $this->cashTransactions = $cashTransactions;

        return $this;
    }

    /**
     * Get class list mappings.
     */
    public function getClassListMappings(): array
    {
        return [
            'cashTransactions' => CashTransaction::class,
        ];
    }
}
