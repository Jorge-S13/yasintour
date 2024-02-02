<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\ContactPage;

use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class ContactPageResource extends ModelResource
{
    protected string $model = ContactPage::class;

    protected string $title = 'ContactPages';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Navbar Text', 'navbar_text'),
                Text::make('Contact h6','contact_h6'),
                Text::make('Contact h1','contact_h1'),
                Text::make('Contact Office Text','contact_h5_office'),
                Text::make('Contact Number Text','contact_h5_phone'),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
