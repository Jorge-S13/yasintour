<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Footer;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use VI\MoonShineSpatieTranslatable\Fields\Translatable;

class FooterResource extends ModelResource
{
    protected string $model = Footer::class;

    protected string $title = 'Footers';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Translatable::make('About', 'about')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Contact', 'contact')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Information', 'information')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
