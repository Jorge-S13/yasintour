<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\AboutPage;

use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use VI\MoonShineSpatieTranslatable\Fields\Translatable;

class AboutPageResource extends ModelResource
{
    protected string $model = AboutPage::class;

    protected string $title = 'AboutPages';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Translatable::make('Navbar Text', 'navbar_text')
                ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('About h6', 'about_h6')
                ->priorityLanguages([config('app.fallback_locale'), config('app.locale'), 'uz', 'ru', 'en']),
                Translatable::make('About h1', 'about_h1')
                ->priorityLanguages([config('app.fallback_locale'), config('app.locale'), 'uz', 'ru', 'en']),
                Translatable::make('About span', 'about_span')
                ->priorityLanguages([config('app.fallback_locale'), config('app.locale'), 'uz', 'ru', 'en']),
                Translatable::make('About Main p1', 'about_main_p1')
                ->priorityLanguages([config('app.fallback_locale'), config('app.locale'), 'uz', 'ru', 'en']),
                Translatable::make('About Main p2', 'about_main_p2')
                ->priorityLanguages([config('app.fallback_locale'), config('app.locale'), 'uz', 'ru', 'en']),
                Translatable::make('About p1', 'about_p1')
                ->priorityLanguages([config('app.fallback_locale'), config('app.locale'), 'uz', 'ru', 'en']),
                Translatable::make('About p2', 'about_p2')
                ->priorityLanguages([config('app.fallback_locale'), config('app.locale'), 'uz', 'ru', 'en']),
                Translatable::make('About p3', 'about_p3')
                ->priorityLanguages([config('app.fallback_locale'), config('app.locale'), 'uz', 'ru', 'en']),
                Translatable::make('About p4', 'about_p4')
                ->priorityLanguages([config('app.fallback_locale'), config('app.locale'), 'uz', 'ru', 'en']),
                Translatable::make('About p5', 'about_p5')
                ->priorityLanguages([config('app.fallback_locale'), config('app.locale'), 'uz', 'ru', 'en']),
                Translatable::make('About p6', 'about_p6')
                ->priorityLanguages([config('app.fallback_locale'), config('app.locale'), 'uz', 'ru', 'en']),
                Translatable::make('Button Text', 'button')
                ->priorityLanguages([config('app.fallback_locale'), config('app.locale'), 'uz', 'ru', 'en']),
                Image::make('Image', 'img')
                    ->disk('public')
                    ->dir('posts')
                    ->showOnExport()
                    ->allowedExtensions(['jpeg','jpg','png','svg','webp','tiff','bmp','gif']),
                Translatable::make('Team h6', 'team_h6')
                    ->priorityLanguages([config('app.fallback_locale'), config('app.locale'), 'uz', 'ru', 'en']),
                Translatable::make('Team h1', 'team_h1')
                    ->priorityLanguages([config('app.fallback_locale'), config('app.locale'), 'uz', 'ru', 'en']),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
