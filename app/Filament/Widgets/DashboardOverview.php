<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make(
                'Total Users',
                // Get the total number of users
                User::count()
            )
                ->description('New Users (' . Carbon::now()->format('F') . '): ' . User::whereMonth('created_at', Carbon::now()->month)->count())
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart(
                // Chart data for this month, with the count for each day in the current month
                    collect(range(0, Carbon::now()->daysInMonth - 1))
                        ->map(
                            fn($day) =>
                            User::whereDate('created_at', Carbon::now()->startOfMonth()->addDays($day))
                                ->count()
                        )
                        ->toArray()
                )
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),

        ];
    }
}
