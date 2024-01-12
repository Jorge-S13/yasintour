<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\CountryPage;

use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class CountryPageResource extends ModelResource
{
    protected string $model = CountryPage::class;

    protected string $title = 'CountryPages';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Navbar Text', 'navbar_text'),
                Text::make('Country h6','country_h6'),
                Text::make('Button Text','button'),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
