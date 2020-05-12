<?php

declare(strict_types=1);

namespace Jeboehm\ChartJs\Model;

use JsonSerializable;

class DataContainer implements JsonSerializable
{
    /** @var array<DataSet> */
    private array $datasets = [];

    /** @var array<string> */
    private array $labels = [];

    /**
     * @return array<DataSet>
     */
    public function getDatasets(): array
    {
        return $this->datasets;
    }

    public function setDatasets(DataSet ...$datasets): void
    {
        $this->datasets = $datasets;
    }

    /**
     * @return array<string>
     */
    public function getLabels(): array
    {
        return $this->labels;
    }

    public function setLabels(string ...$labels): void
    {
        $this->labels = $labels;
    }

    public function addLabel(string $label): void
    {
        $this->labels[] = $label;
    }

    /**
     * @return array<mixed>
     */
    public function jsonSerialize(): array
    {
        return [
            'labels' => $this->labels,
            'datasets' => $this->datasets,
        ];
    }
}
