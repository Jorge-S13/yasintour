<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Testimonial;

use MoonShine\Enums\PageType;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class TestimonialResource extends ModelResource
{
    protected string $model = Testimonial::class;

    protected string $title = 'Testimonials';

    protected ?PageType $redirectAfterSave = PageType::INDEX;

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable()->showOnExport(),
                Text::make('Name')
                    ->required()
                    ->showOnExport(),
                Text::make('City')
                    ->required()
                    ->showOnExport(),
                Text::make('Text')
                    ->required()
                    ->showOnExport(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
