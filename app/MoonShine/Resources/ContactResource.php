<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Enums\ContactStatusEnum;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;

use MoonShine\Enums\ClickAction;
use MoonShine\Enums\PageType;
use MoonShine\Fields\Enum;
use MoonShine\Fields\Select;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class ContactResource extends ModelResource
{
    protected string $model = Contact::class;

    protected string $title = 'Contact';

    protected bool $editInModal = true;

    protected ?ClickAction $clickAction = ClickAction::EDIT;

    protected ?PageType $redirectAfterSave = PageType::INDEX;
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make(__('Name'), 'name')
                    ->showOnExport(),
                Text::make(__('Country'), 'country')
                    ->showOnExport(),
                Text::make(__('Email'), 'email')
                    ->showOnExport(),
                Text::make(__('Phone'), 'phone')
                    ->showOnExport(),
                Text::make(__('Message'), 'message')
                    ->showOnExport(),
//                Select::make('Status', 'status')
//                    ->options([
//                        'New' => ContactStatusEnum::class,
//                        'Closed' => ContactStatusEnum::CLOSED,
//                        'Rejected' => ContactStatusEnum::REJECTED
//                    ])
//                    ->default('New'),
                Enum::make('Status')
                    ->attach(ContactStatusEnum::class)
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
    public function getActiveActions(): array
    {
        return ['view', 'update'];
    }
    protected function beforeCreating(Model $item): Model
    {
        return $item;
    }
}
