<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class CashTransferList
{
    use Arrayable;

    /**
     * Cash transfers
     *
     * @var CashTransfer[]|null
     */
    private ?array $cashTransfers = null;

    /**
     * Get cash transfers.
     *
     * @return CashTransfer[]|null
     */
    public function getCashTransfers(): ?array
    {
        return $this->cashTransfers;
    }

    /**
     * Set cash transfers.
     *
     * @param  CashTransfer[]|null  $cashTransfers
     */
    public function setCashTransfers(?array $cashTransfers): self
    {
        $this->cashTransfers = $cashTransfers;

        return $this;
    }

    /**
     * Get class list mappings.
     */
    public function getClassListMappings(): array
    {
        return [
            'cashTransfers' => CashTransfer::class,
        ];
    }
}
