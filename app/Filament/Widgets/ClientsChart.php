<?php

namespace App\Filament\Widgets;

use Domain\Client\Models\Client;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class ClientsChart extends ChartWidget
{
    protected static ?string $heading = 'Clients';

    protected static ?string $pollingInterval = null;

    protected static string $color = 'info';

    protected static ?int $sort = 3;

    #[\Override]
    protected function getData(): array
    {
        $data = Trend::model(Client::class)
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear()
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'No. of clients '.now()->format('Y'),
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
        return 'line';
    }
}
