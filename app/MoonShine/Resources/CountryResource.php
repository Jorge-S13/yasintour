<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Country;

use MoonShine\Attributes\Icon;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

#[Icon('heroicons.outline.building-library')]
class CountryResource extends ModelResource
{
    protected string $model = Country::class;

    protected string $title = 'Countries';

    public function fields(): array
    {
        return [
            Block::make('', [
                ID::make()->sortable()->showOnExport(),
                Text::make(__('Name'), 'name')
                    ->required()
                    ->showOnExport(),
                Text::make(__('Info'), 'info')
                    ->required()
                    ->showOnExport(),
                Text::make(__('Price'), 'price')
                    ->required()
                    ->showOnExport(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return ['name','info','price'];
    }
}
