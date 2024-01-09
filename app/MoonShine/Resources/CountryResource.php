<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Country;

use MoonShine\Attributes\Icon;
use MoonShine\Fields\File;
use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
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
                Textarea::make(__('Info'), 'info')
                    ->required()
                    ->showOnExport(),
                Text::make(__('Price'), 'price')
                    ->required()
                    ->showOnExport(),
                File::make(__('Image'), 'img')
                    ->required()
                    ->multiple(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return ['name','info','price'];
    }
}
