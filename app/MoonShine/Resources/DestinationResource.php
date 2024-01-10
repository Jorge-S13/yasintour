<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Destination;

use MoonShine\Enums\PageType;
use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class DestinationResource extends ModelResource
{
    protected string $model = Destination::class;

    protected string $title = 'Destination';

    protected ?PageType $redirectAfterSave = PageType::INDEX;
    public function fields(): array
    {
        return [
            Block::make('', [
                ID::make()->sortable()->showOnExport(),
                Text::make(__('Name'), 'name')
                    ->required()
                    ->showOnExport(),
                TinyMce::make(__('Info'), 'info')
                    ->required()
                    ->showOnExport()
                    ->hideOnIndex(),
                Image::make('Image', 'img')
                    ->disk('public')
                    ->dir('posts')
                    ->showOnExport()
                    ->allowedExtensions(['jpeg','jpg','png','svg','webp','tiff','bmp','gif'])
                    ->hideOnIndex(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return ['name','info','img'];
    }
}
