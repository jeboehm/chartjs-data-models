<?php

declare(strict_types=1);

namespace Jeboehm\ChartJs\Model\DataType;

class Coordinate implements DataTypeInterface
{
    private float $x;
    private float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function jsonSerialize(): array
    {
        return [
            'x' => $this->x,
            'y' => $this->y,
        ];
    }
}
