<?php

namespace AlexStewartJa\DXtrade\Traits;

use AlexStewartJa\DXtrade\Temporal\DateTime;
use AlexStewartJa\DXtrade\Temporal\DXtradeDate;
use AlexStewartJa\DXtrade\Temporal\DXtradeDateTime;
use ReflectionException;

trait Arrayable
{
    use ETaggable;

    public function __construct(?array $data = [])
    {
        $this->fromArray($data);
    }

    /**
     * @throws ReflectionException
     */
    public function fromArray(?array $data = []): self
    {
        $data = $data ?: [];
        $this->beforeFromArray($data);

        foreach ($data as $prop => $value) {
            if (property_exists($this, $prop)) {
                /** @phpstan-ignore method.notFound */
                $propClass = (new \ReflectionProperty(self::class, $prop))->getType()?->getName();

                if (class_exists($propClass)) {
                    $propClass = new \ReflectionClass($propClass);
                    $propClassName = $propClass->getName();

                    if (array_key_exists(Arrayable::class, $propClass->getTraits())) {
                        $this->{$prop} = new $propClassName($value);
                    } elseif ($propClass->isSubclassOf(DateTime::class)) {
                        if ($propClassName === DXtradeDate::class) {
                            $this->{$prop} = DXtradeDate::ofString($value);
                        } elseif ($propClassName === DXtradeDateTime::class) {
                            $this->{$prop} = DXtradeDateTime::ofString($value);
                        }
                    }
                } else {
                    $classListMappings = $this->getClassListMappings();
                    if (! empty($classListMappings) && array_key_exists($prop, $classListMappings) &&
                        is_array($value)) {
                        $propClass = $classListMappings[$prop];
                        $_value = [];

                        foreach ($value as $val) {
                            $_value[] = new $propClass($val);
                        }

                        $this->{$prop} = $_value;
                    } else {
                        $this->{$prop} = $value;
                    }
                }
            }
        }

        $this->afterFromArray($data);

        return $this;
    }

    protected function beforeFromArray(array &$data): void {}

    public function getClassListMappings(): array
    {
        return [];
    }

    protected function afterFromArray(array &$data): void {}

    public function toArray(): array
    {
        $fields = get_object_vars($this);
        $this->beforeToArray($fields);

        array_walk_recursive($fields, static function (&$value, $prop) {
            if (is_object($value)) {
                if (in_array(Arrayable::class, class_uses($value), true)) {
                    $value = $value->toArray();
                } elseif (is_subclass_of($value, DateTime::class)) {
                    if (is_a($value, DXtradeDate::class)) {
                        $value = DXtradeDate::asString($value);
                    } elseif (is_a($value, DXtradeDateTime::class)) {
                        $value = DXtradeDateTime::asString($value);
                    }
                }
            }

            return $value;
        });

        $this->afterToArray($fields);

        return $fields;
    }

    protected function beforeToArray(array &$fields): void {}

    protected function afterToArray(array &$fields): void {}
}
