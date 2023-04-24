<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\CustomerResource;

class ListPosts extends ListRecords
{
    public static string $resource = PostResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            PostResource\Widgets\StatsOverview::class,
        ];
    }
}
