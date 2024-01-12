<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Country;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Decorations\Block;
use MoonShine\Enums\ClickAction;
use MoonShine\Enums\PageType;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\ModelResource;

class CountryResource extends ModelResource
{
    protected string $model = Country::class;

    protected string $title = 'Countries';

    protected ?PageType $redirectAfterSave = PageType::INDEX;
    protected ?ClickAction $clickAction = ClickAction::EDIT;
    public function fields(): array
    {
        return [
            Block::make('', [
                ID::make()->sortable()->showOnExport(),
                Text::make(__('Name'), 'name')
                    ->required()
                    ->showOnExport(),
                Text::make(__('Description'), 'description')
                    ->required()
                    ->showOnExport(),
                TinyMce::make(__('Info'), 'info')
                    ->required()
                    ->showOnExport()
                    ->hideOnIndex(),
                Text::make(__('Price'), 'price')
                    ->required()
                    ->showOnExport(),
                Image::make('Image', 'img')
                    ->disk('public')
                    ->dir('posts')
                    ->showOnExport()
                    ->allowedExtensions(['jpeg','jpg','png','svg','webp','tiff','bmp','gif'])
                    ->hideOnIndex(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return ['name','info','price'];
    }
}
