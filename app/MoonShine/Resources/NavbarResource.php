<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Navbar;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use VI\MoonShineSpatieTranslatable\Fields\Translatable;

class NavbarResource extends ModelResource
{
    protected string $model = Navbar::class;

    protected string $title = 'Navbars';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Translatable::make('Main Page', 'main')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Counties', 'counties')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Tours', 'tours')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Aviakassa', 'aviakassa')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Services', 'services')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('About', 'about')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Contact', 'contact')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
