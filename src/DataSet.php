<?php

declare(strict_types=1);

namespace Jeboehm\ChartJs\Model;

use Jeboehm\ChartJs\Model\DataType\DataTypeInterface;
use JsonSerializable;

class DataSet implements JsonSerializable
{
    private array $data = [];
    private array $properties = [];

    public function setLabel(string $label): void
    {
        $this->properties['label'] = $label;
    }

    public function addProperty(string $name, $value): void
    {
        $this->properties[$name] = $value;
    }

    public function setData(DataTypeInterface ...$data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize(): array
    {
        return array_merge(
            $this->properties,
            [
                'data' => $this->data,
            ]
        );
    }
}
