<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsDashboard extends BaseWidget
{
    protected function getStats(): array
    {
        $countCategory = \App\Models\Category::count();
        $countBook = \App\Models\Book::count();
        $countTeams = \App\Models\Team::count();
        return [
            Stat::make('Jumlah Category', value: $countCategory . ' Category'),
            Stat::make('Jumlah Buku', value: $countBook . ' Book'),
            Stat::make('Jumlah Anggota', value: $countTeams . ' Member'),
        ];
    }
}
