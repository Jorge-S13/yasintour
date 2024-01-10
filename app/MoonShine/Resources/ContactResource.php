<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;

use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class ContactResource extends ModelResource
{
    protected string $model = Contact::class;

    protected string $title = 'Contact';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make(__('Name'), 'name')
                    ->required()
                    ->showOnExport(),
                Text::make(__('Email'), 'email')
                    ->required()
                    ->showOnExport(),
                Text::make(__('Phone'), 'phone')
                    ->required()
                    ->showOnExport(),
                Text::make(__('Message'), 'message')
                    ->required()
                    ->showOnExport(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
