<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\CategoriesResource;
use App\MoonShine\Resources\NewSletterResource;
use App\MoonShine\Resources\ProductsResource;
use App\MoonShine\Resources\QuestionResource;
use App\MoonShine\Resources\SeoTagsResource;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Contracts\Resources\ResourceContract;
use MoonShine\Menu\MenuElement;
use MoonShine\Pages\Page;
use Closure;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    /**
     * @return list<ResourceContract>
     */
    protected function resources(): array
    {
        return [];
    }

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return [];
    }

    /**
     * @return Closure|list<MenuElement>
     */
    protected function menu(): array
    {
        return [
            MenuGroup::make('ТОВАРЫ',[
                MenuItem::make('Продукция', new ProductsResource()),
                MenuItem::make('Категории', new CategoriesResource()),
            ]),
            MenuGroup::make('СЕО',[
                MenuItem::make('Новости', new NewSletterResource()),
                MenuItem::make('Вопросы и ответы', new QuestionResource()),
                MenuItem::make('СЕО параметры', new SeoTagsResource()),
            ]),
            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.admins_title'),
                    new MoonShineUserResource()
                ),
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.role_title'),
                    new MoonShineUserRoleResource()
                ),
                MenuItem::make('Documentation', 'https://moonshine-laravel.com')
                    ->badge(fn() => 'Check'),
            ]),
        ];
    }

    /**
     * @return Closure|array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
