<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\AviakassaPage;

use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class AviakassaPageResource extends ModelResource
{
    protected string $model = AviakassaPage::class;

    protected string $title = 'AviakassaPages';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Navbar Text', 'navbar_text'),
                Text::make('Aviakassa h6','aviakassa_h6'),
                Text::make('Aviakassa h1','aviakassa_h1'),
                Text::make('Contact Number Text','contact_number'),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
