<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Settings;

use MoonShine\Attributes\Icon;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class SettingsResource extends ModelResource
{
    protected string $model = Settings::class;

    protected string $title = 'Settings';

    public function fields(): array
    {
        return [
            Block::make([
                Block::make('', [
                    ID::make()->sortable()->showOnExport(),
                    Text::make(__('facebook_url'), 'facebook_url')
                        ->required()
                        ->showOnExport(),
                    Text::make(__('instagram_url'), 'instagram_url')
                        ->required()
                        ->showOnExport(),
                    Text::make(__('telegram_url'), 'telegram_url')
                        ->required()
                        ->showOnExport(),
                ]),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }

    public function actions(): array
    {
        return [];
    }
}
