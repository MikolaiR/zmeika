<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Product>
 */
class ProductsResource extends ModelResource
{
    protected string $model = Product::class;

    protected string $title = 'Products';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                Grid::make([
                    Column::make([
                        ID::make()
                            ->hideOnIndex(),
                        Text::make('name')
                            ->reactive()
                            ->sortable(),
                        Slug::make('slug')
                            ->from('name')
                            ->locale('en')
                            ->separator('-')
                            ->unique()
                            ->live(),
                    ])->columnSpan(5),
                    Column::make([
                        Image::make('image')
                            ->disk('')
                            ->dir('/public/images/products'),
                        Number::make('price')->sortable(),
                        BelongsTo::make('category', resource: new CategoriesResource()),
                        Switcher::make( 'active')
                            ->updateOnPreview(),
                    ])->columnSpan(5),
                ]),
                TinyMce::make('description')
                    ->hideOnIndex(),
            ]),
        ];
    }

    /**
     * @param Product $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
