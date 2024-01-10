<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Aviakassa;

use MoonShine\Enums\PageType;
use MoonShine\Fields\Image;
use MoonShine\Fields\Phone;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class AviakassaResource extends ModelResource
{
    protected string $model = Aviakassa::class;

    protected string $title = 'Aviakassas';

    protected ?PageType $redirectAfterSave = PageType::INDEX;
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable()->showOnExport(),
                Text::make('Name')
                    ->required()
                    ->showOnExport(),
                Phone::make('Phone Number', 'phone_number')
                    ->required()
                    ->showOnExport(),
                Image::make('Image','img')
                    ->disk('public')
                    ->dir('aviakassa')
                    ->showOnExport()
                    ->allowedExtensions(['jpeg','jpg','png','svg','webp','tiff','bmp','gif'])
                    ->hideOnIndex(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
