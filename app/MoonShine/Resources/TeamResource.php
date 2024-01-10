<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

use MoonShine\Enums\ClickAction;
use MoonShine\Enums\PageType;
use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class TeamResource extends ModelResource
{
    protected string $model = Team::class;

    protected string $title = 'Teams';

    protected ?PageType $redirectAfterSave = PageType::INDEX;
    protected ?ClickAction $clickAction = ClickAction::EDIT;
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable()->showOnExport(),
                Text::make('Name')
                    ->required()
                    ->showOnExport(),
                Text::make('Job Title')
                    ->required()
                    ->showOnExport(),
                Image::make('Image','img')
                    ->disk('public')
                    ->dir('team')
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
