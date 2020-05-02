<?php

declare(strict_types=1);

namespace Jeboehm\ChartJs\Model;

use JsonSerializable;

class DataContainer implements JsonSerializable
{
    private array $datasets = [];
    private array $labels = [];

    public function getDatasets(): array
    {
        return $this->datasets;
    }

    public function setDatasets(DataSet ...$datasets): void
    {
        $this->datasets = $datasets;
    }

    public function getLabels(): array
    {
        return $this->labels;
    }

    public function setLabels(string ...$labels): void
    {
        $this->labels = $labels;
    }

    public function jsonSerialize(): array
    {
        return [
            'labels' => $this->labels,
            'datasets' => $this->datasets,
        ];
    }
}
