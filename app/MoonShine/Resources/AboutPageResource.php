<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\AboutPage;

use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class AboutPageResource extends ModelResource
{
    protected string $model = AboutPage::class;

    protected string $title = 'AboutPages';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Navbar Text', 'navbar_text'),
                Text::make('About h6', 'about_h6'),
                Text::make('About h1', 'about_h1'),
                Text::make('About span', 'about_span'),
                Text::make('About Main p1', 'about_main_p1'),
                Text::make('About Main p2', 'about_main_p2'),
                Text::make('About p1', 'about_p1'),
                Text::make('About p2', 'about_p2'),
                Text::make('About p3', 'about_p3'),
                Text::make('About p4', 'about_p4'),
                Text::make('About p5', 'about_p5'),
                Text::make('About p6', 'about_p6'),
                Text::make('Button Text', 'button'),
                Image::make('Image', 'img')
                    ->disk('public')
                    ->dir('posts')
                    ->showOnExport()
                    ->allowedExtensions(['jpeg','jpg','png','svg','webp','tiff','bmp','gif']),
                Text::make('Team h6', 'team_h6'),
                Text::make('Team h1', 'team_h1'),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
