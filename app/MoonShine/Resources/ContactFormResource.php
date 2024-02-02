<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\ContactForm;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use VI\MoonShineSpatieTranslatable\Fields\Translatable;

class ContactFormResource extends ModelResource
{
    protected string $model = ContactForm::class;

    protected string $title = 'ContactForms';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Translatable::make('Name', 'name')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Email', 'email')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en']),
                Translatable::make('Phone', 'phone')
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
