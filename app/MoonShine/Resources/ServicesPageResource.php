<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\ServicesPage;

use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class ServicesPageResource extends ModelResource
{
    protected string $model = ServicesPage::class;

    protected string $title = 'ServicesPages';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Navbar Text', 'navbar_text'),
                Text::make('Services h6', 'services_h6'),
                Text::make('Services h1', 'services_h1'),
                Text::make('Item-1 h5', 'item1_h5'),
                Text::make('Item-1 p', 'item1_p'),
                Text::make('Item-2 h5', 'item2_h5'),
                Text::make('Item-2 p', 'item2_p'),
                Text::make('Item-3 h5', 'item3_h5'),
                Text::make('Item-3 p', 'item3_p'),
                Text::make('Item-4 h5', 'item4_h5'),
                Text::make('Item-4 p', 'item4_p'),
                Text::make('Item-5 h5', 'item5_h5'),
                Text::make('Item-5 p', 'item5_p'),
                Text::make('Item-6 h5', 'item6_h5'),
                Text::make('Item-6 p', 'item6_p'),
                Text::make('Item-7 h5', 'item7_h5'),
                Text::make('Item-7 p', 'item7_p'),
                Text::make('Item-8 h5', 'item8_h5'),
                Text::make('Item-8 p', 'item8_p'),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
