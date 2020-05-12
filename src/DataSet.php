<?php

declare(strict_types=1);

namespace Jeboehm\ChartJs\Model;

use Jeboehm\ChartJs\Model\DataType\DataTypeInterface;
use JsonSerializable;

class DataSet implements JsonSerializable
{
    /** @var array<DataTypeInterface> */
    private array $data = [];

    /** @var array<string,mixed> */
    private array $properties = [];

    public function setLabel(string $label): void
    {
        $this->properties['label'] = $label;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function addProperty(string $name, $value): void
    {
        $this->properties[$name] = $value;
    }

    public function setData(DataTypeInterface ...$data): void
    {
        $this->data = $data;
    }

    public function addData(DataTypeInterface $data): void
    {
        $this->data[] = $data;
    }

    /**
     * @return array<mixed>
     */
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
