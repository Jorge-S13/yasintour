<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\MainForm;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use VI\MoonShineSpatieTranslatable\Fields\Translatable;

class MainFormResource extends ModelResource
{
    protected string $model = MainForm::class;

    protected string $title = 'MainForms';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Translatable::make('Form h6', 'form_h6')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Form Text h1', 'form_text_h1')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Form p', 'form_p')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Form h1', 'form_h1')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Name', 'name')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Phone', 'phone')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Date', 'date')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Country', 'country')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Description', 'description')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Button', 'button')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
