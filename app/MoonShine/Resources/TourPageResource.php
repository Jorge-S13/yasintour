<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\TourPage;

use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class TourPageResource extends ModelResource
{
    protected string $model = TourPage::class;

    protected string $title = 'TourPages';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Navbar Text', 'navbar_text'),
                Text::make('Tour h6','tour_h6'),
                Text::make('Tour h1','tour_h1'),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
