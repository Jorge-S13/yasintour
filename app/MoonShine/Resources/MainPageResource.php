<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\MainPage;

use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class MainPageResource extends ModelResource
{
    protected string $model = MainPage::class;

    protected string $title = 'MainPages';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Navbar Text', 'navbar_text'),
                Text::make('Process h6','process_h6'),
                Text::make('Process h1','process_h1'),
                Text::make('Process item1 h5','process_item1_h5'),
                Text::make('Process item1 p','process_item1_p'),
                Text::make('Process item2 h5','process_item2_h5'),
                Text::make('Process item2 p','process_item2_p'),
                Text::make('Process item3 h5','process_item3_h5'),
                Text::make('Process item3 p','process_item3_p'),

            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
