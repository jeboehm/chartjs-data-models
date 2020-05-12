<?php

declare(strict_types=1);

namespace Jeboehm\ChartJs\Model\DataType;

class Number implements DataTypeInterface
{
    private float $value;

    public function __construct(float $value)
    {
        $this->value = $value;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public static function fromInteger(int $value): self
    {
        return new self((float)$value);
    }

    public function jsonSerialize(): float
    {
        return $this->value;
    }
}
