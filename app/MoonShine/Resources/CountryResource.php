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
use VI\MoonShineSpatieTranslatable\Fields\Translatable;

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
                Translatable::make('Name', 'name')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en'])->showOnExport()->required(),
                Translatable::make('Description', 'description')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en'])->showOnExport()->required(),
                Translatable::make('Info', 'info')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en'])
                    ->tinyMce()
                    ->showOnExport()
                    ->hideOnIndex()
                    ->required(),
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
