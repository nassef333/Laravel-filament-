<?php

namespace App\Filament\Resources\PostResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Post;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('All Posts', Post::all()->count())->description('32% increase')
                ->descriptionIcon('heroicon-s-trending-up')
                ->color('success'),
            Card::make('Unique views', '192.1k')
                ->description('32k increase')
                ->descriptionIcon('heroicon-s-trending-up')
                ->chart([7, 2, 43, 3, 18, 2, 25])
                ->color('success'),
            Card::make('Processed', '192.1k')
                ->color('success')
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                    'wire:click' => '$emitUp("setStatusFilter", "processed")',
                ]),
        ];
    }
}
