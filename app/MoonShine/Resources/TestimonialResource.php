<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Testimonial;

use MoonShine\Enums\ClickAction;
use MoonShine\Enums\PageType;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use VI\MoonShineSpatieTranslatable\Fields\Translatable;

class TestimonialResource extends ModelResource
{
    protected string $model = Testimonial::class;

    protected string $title = 'Testimonials';

    protected ?PageType $redirectAfterSave = PageType::INDEX;
    protected ?ClickAction $clickAction = ClickAction::EDIT;

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable()->showOnExport(),
                Translatable::make('Name', 'name')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en'])
                    ->showOnExport()
                    ->required(),
                Translatable::make('City', 'city')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en'])
                    ->showOnExport()
                    ->required(),
                Translatable::make('Text', 'text')
                    ->requiredLanguages([config('app.fallback_locale'), 'uz', 'ru', 'en'])
                    ->showOnExport()
                    ->required(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
