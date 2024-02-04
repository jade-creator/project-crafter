<?php

namespace App\Filament\Widgets;

use Domain\Project\Models\Project;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class ProjectsChart extends ChartWidget
{
    protected static ?string $heading = 'Projects';

    protected static ?string $pollingInterval = null;

    protected static ?int $sort = 3;

    #[\Override]
    protected function getData(): array
    {
        $data = Trend::model(Project::class)
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear()
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'No. of projects '.now()->format('Y'),
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(
                fn (TrendValue $value) => now()->parse($value->date)->format('M')
            ),
        ];
    }

    #[\Override]
    protected function getType(): string
    {
        return 'bar';
    }
}
