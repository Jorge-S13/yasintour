<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\Contact;
use App\MoonShine\Resources\AboutPageResource;
use App\MoonShine\Resources\AviakassaPageResource;
use App\MoonShine\Resources\AviakassaResource;
use App\MoonShine\Resources\ContactResource;
use App\MoonShine\Resources\CountryPageResource;
use App\MoonShine\Resources\CountryResource;
use App\MoonShine\Resources\DestinationResource;
use App\MoonShine\Resources\MainPageResource;
use App\MoonShine\Resources\ServicesPageResource;
use App\MoonShine\Resources\SettingsResource;
use App\MoonShine\Resources\TeamResource;
use App\MoonShine\Resources\TestimonialResource;
use App\MoonShine\Resources\TourPageResource;
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
            MenuItem::make( "Заявки ", new ContactResource())
                ->icon('heroicons.outline.device-phone-mobile')
                ->badge(fn() => Contact::where('status', '=', 'new')->count()),
            MenuGroup::make('Станицы сайта',[
                MenuItem::make('Главная', new MainPageResource()),
                MenuItem::make('Страны', new CountryPageResource()),
                MenuItem::make('Горящие Туры', new TourPageResource()),
                MenuItem::make('Авиакасса', new AviakassaPageResource()),
                MenuItem::make('Наши Услуги', new ServicesPageResource()),
                MenuItem::make('О нас', new AboutPageResource()),
                MenuItem::make('Контакты', fn() => route('home')),
            ])->icon('heroicons.outline.document-text'),


            MenuItem::make( "Страны", new CountryResource())
                ->icon('heroicons.outline.building-library'),

            MenuItem::make( "Горящие Туры", new DestinationResource())
                ->icon('heroicons.outline.fire'),

            MenuItem::make( "Авиакасса", new AviakassaResource())
                ->icon('heroicons.outline.paper-airplane'),

            MenuItem::make( "Наша Команда", new TeamResource())
                ->icon('heroicons.outline.user-group'),

            MenuItem::make( "Отзывы клиентов", new TestimonialResource())
                ->icon('heroicons.outline.chat-bubble-bottom-center-text'),

            MenuItem::make( "Настройки", new SettingsResource())
                ->icon('heroicons.outline.cog-8-tooth'),

            MenuItem::make('Сайт',  fn() => route('home'))
                ->icon('heroicons.outline.globe-alt'),
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
