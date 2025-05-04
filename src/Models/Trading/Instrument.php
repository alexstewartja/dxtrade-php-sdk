<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Enums\CurrencyType;
use AlexStewartJa\DXtrade\Enums\InstrumentType;
use AlexStewartJa\DXtrade\Enums\SettlementType;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class Instrument
{
    use Arrayable;

    /**
     * Type
     *
     * @see InstrumentType
     */
    private ?string $type = null;

    /**
     * Symbol
     */
    private ?string $symbol = null;

    /**
     * Version
     */
    private ?int $version = null;

    /**
     * Description
     */
    private ?string $description = null;

    /**
     * Price increment
     */
    private ?float $priceIncrement = null;

    /**
     * Pip size
     */
    private ?float $pipSize = null;

    /**
     * Currency
     */
    private ?string $currency = null;

    /**
     * Lot size
     */
    private ?float $lotSize = null;

    /**
     * Multiplier
     */
    private ?float $multiplier = null;

    /**
     * Underlying
     */
    private ?string $underlying = null;

    /**
     * Product
     */
    private ?string $product = null;

    /**
     * Expiration details
     */
    private ?ExpirationDetails $expirationDetails = null;

    /**
     * Settlement type
     *
     * @see SettlementType
     */
    private ?string $settlementType = null;

    /**
     * First currency
     */
    private ?string $firstCurrency = null;

    /**
     * Trading hours
     *
     * @var InstrumentSession[]|null
     */
    private ?array $tradingHours = null;

    /**
     * Currency type
     *
     * @see CurrencyType
     */
    private ?string $currencyType = null;

    /**
     * Get type.
     *
     * @see InstrumentType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Set type.
     *
     * @see InstrumentType
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get symbol.
     */
    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    /**
     * Set symbol.
     */
    public function setSymbol(?string $symbol): self
    {
        $this->symbol = $symbol;

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
     * Get description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Set description.
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get price increment.
     */
    public function getPriceIncrement(): ?float
    {
        return $this->priceIncrement;
    }

    /**
     * Set price increment.
     */
    public function setPriceIncrement(?float $priceIncrement): self
    {
        $this->priceIncrement = $priceIncrement;

        return $this;
    }

    /**
     * Get pip size.
     */
    public function getPipSize(): ?float
    {
        return $this->pipSize;
    }

    /**
     * Set pip size.
     */
    public function setPipSize(?float $pipSize): self
    {
        $this->pipSize = $pipSize;

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
     * Get lot size.
     */
    public function getLotSize(): ?float
    {
        return $this->lotSize;
    }

    /**
     * Set lot size.
     */
    public function setLotSize(?float $lotSize): self
    {
        $this->lotSize = $lotSize;

        return $this;
    }

    /**
     * Get multiplier.
     */
    public function getMultiplier(): ?float
    {
        return $this->multiplier;
    }

    /**
     * Set multiplier.
     */
    public function setMultiplier(?float $multiplier): self
    {
        $this->multiplier = $multiplier;

        return $this;
    }

    /**
     * Get underlying.
     */
    public function getUnderlying(): ?string
    {
        return $this->underlying;
    }

    /**
     * Set underlying.
     */
    public function setUnderlying(?string $underlying): self
    {
        $this->underlying = $underlying;

        return $this;
    }

    /**
     * Get product.
     */
    public function getProduct(): ?string
    {
        return $this->product;
    }

    /**
     * Set product.
     */
    public function setProduct(?string $product): self
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get expiration details.
     */
    public function getExpirationDetails(): ?ExpirationDetails
    {
        return $this->expirationDetails;
    }

    /**
     * Set expiration details.
     */
    public function setExpirationDetails(?ExpirationDetails $expirationDetails): self
    {
        $this->expirationDetails = $expirationDetails;

        return $this;
    }

    /**
     * Get settlement type.
     *
     * @see SettlementType
     */
    public function getSettlementType(): ?string
    {
        return $this->settlementType;
    }

    /**
     * Set settlement type.
     *
     * @see SettlementType
     */
    public function setSettlementType(?string $settlementType): self
    {
        $this->settlementType = $settlementType;

        return $this;
    }

    /**
     * Get first currency.
     */
    public function getFirstCurrency(): ?string
    {
        return $this->firstCurrency;
    }

    /**
     * Set first currency.
     */
    public function setFirstCurrency(?string $firstCurrency): self
    {
        $this->firstCurrency = $firstCurrency;

        return $this;
    }

    /**
     * Get trading hours.
     *
     * @return InstrumentSession[]|null
     */
    public function getTradingHours(): ?array
    {
        return $this->tradingHours;
    }

    /**
     * Set trading hours.
     *
     * @param  InstrumentSession[]|null  $tradingHours
     */
    public function setTradingHours(?array $tradingHours): self
    {
        $this->tradingHours = $tradingHours;

        return $this;
    }

    /**
     * Get currency type.
     *
     * @see CurrencyType
     */
    public function getCurrencyType(): ?string
    {
        return $this->currencyType;
    }

    /**
     * Set currency type.
     *
     * @see CurrencyType
     */
    public function setCurrencyType(?string $currencyType): self
    {
        $this->currencyType = $currencyType;

        return $this;
    }

    /**
     * Get class list mappings.
     */
    public function getClassListMappings(): array
    {
        return [
            'tradingHours' => InstrumentSession::class,
        ];
    }
}
