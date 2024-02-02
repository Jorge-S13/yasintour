<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\ServicesPage;

use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use VI\MoonShineSpatieTranslatable\Fields\Translatable;

class ServicesPageResource extends ModelResource
{
    protected string $model = ServicesPage::class;

    protected string $title = 'ServicesPages';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Translatable::make('Navbar Text', 'navbar_text')->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Services h6', 'services_h6')->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Services h1', 'services_h1')->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Item-1 h5', 'item1_h5')->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Item-1 p', 'item1_p')->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Item-2 h5', 'item2_h5')->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Item-2 p', 'item2_p')->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Item-3 h5', 'item3_h5')->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Item-3 p', 'item3_p')->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Item-4 h5', 'item4_h5')->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Item-4 p', 'item4_p')->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Item-5 h5', 'item5_h5')->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Item-5 p', 'item5_p')->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Item-6 h5', 'item6_h5')->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Item-6 p', 'item6_p')->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Item-7 h5', 'item7_h5')->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Item-7 p', 'item7_p')->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Item-8 h5', 'item8_h5')->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Item-8 p', 'item8_p')->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
