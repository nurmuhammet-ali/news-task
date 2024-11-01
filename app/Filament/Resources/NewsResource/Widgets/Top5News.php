<?php

namespace App\Filament\Resources\NewsResource\Widgets;

use App\Models\News;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;

class Top5News extends BaseWidget
{
    protected function getStats(): array
    {
        $stats = [];

        array_push(
            array: $stats,
            values: Stat::make('Top news', News::query()->count())->icon('heroicon-o-newspaper')
        );

        News::select('author', DB::raw('COUNT(*) as news_count'))
            ->groupBy('author')
            ->orderByDesc('news_count')
            ->limit(5)
            ->get()
            ->each(function ($item) use (&$stats) {
                array_push(
                    array: $stats,
                    values: Stat::make(
                        label: $item['author'] . ' with news',
                        value: $item['news_count'],
                    )->icon('heroicon-o-user')
            );
            });

        return $stats;
    }
}
