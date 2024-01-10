<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\AviakassaResource;
use App\MoonShine\Resources\ContactResource;
use App\MoonShine\Resources\CountryResource;
use App\MoonShine\Resources\DestinationResource;
use App\MoonShine\Resources\SettingsResource;
use App\MoonShine\Resources\TeamResource;
use App\MoonShine\Resources\TestimonialResource;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    protected function resources(): array
    {
        return [];
    }

    protected function pages(): array
    {
        return [];
    }

    protected function menu(): array
    {
        return [
            MenuItem::make( "Заявки ", new ContactResource())->icon('heroicons.outline.device-phone-mobile'),
            MenuGroup::make('Страницы сайта',[
                MenuItem::make('Главная', fn() => route('home')),
                MenuItem::make('Страны', fn() => route('home')),
                MenuItem::make('Горящие Туры', fn() => route('home')),
                MenuItem::make('Авиакасса', fn() => route('home')),
                MenuItem::make('Наши Услуги', fn() => route('home')),
                MenuItem::make('О нас', fn() => route('home')),
                MenuItem::make('Контакты', fn() => route('home')),

            ])->icon('heroicons.outline.document-duplicate'),

            MenuItem::make( "Страны", new CountryResource())->icon('heroicons.outline.building-library'),
            MenuItem::make( "Горящие Туры", new DestinationResource())->icon('heroicons.outline.fire'),
            MenuItem::make( "Авиакасса", new AviakassaResource())->icon('heroicons.outline.paper-airplane'),
            MenuItem::make( "Наша Команда", new TeamResource())->icon('heroicons.outline.user-group'),
            MenuItem::make( "Отзывы клиентов", new TestimonialResource())->icon('heroicons.outline.chat-bubble-bottom-center-text'),
            MenuItem::make( "Настройки", new SettingsResource())->icon('heroicons.outline.cog-8-tooth'),
            MenuItem::make('Сайт',  fn() => route('home'))->icon('heroicons.outline.globe-alt'),
        ];
    }

    /**
     * @return array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
