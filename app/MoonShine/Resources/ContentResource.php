<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Enums\MediaTypes;
use App\Models\NewSletter;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use App\Models\Content;

use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Fields;
use MoonShine\Fields\Image;
use MoonShine\Fields\Relationships\MorphTo;
use MoonShine\Fields\Select;
use MoonShine\Fields\Switcher;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Content>
 */
class ContentResource extends ModelResource
{
    protected string $model = Content::class;

    protected string $title = 'Contents';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()
                    ->hideOnIndex()
                    ->sortable(),
                MorphTo::make('Родители', 'contantable')
                    ->types([
                        Product::class => 'name',
                        NewSletter::class => 'name',
                    ])
                    ->sortable()
                    ->asyncSearch(),
                Grid::make([
                    Column::make([
                        Image::make('url', 'url')
                            ->multiple()
                            ->disk('')
                            ->dir('/public/images/contents/')
                        ->allowedExtensions(['jpg', 'png', 'webp', 'jpeg', 'mp4', 'avi', 'mov', 'mpg', 'mpeg'])
                        ,
                    ])->columnSpan(6),
                    Column::make([
                        Select::make('Тип', 'type')
                            ->options(MediaTypes::options())
                            ->reactive( function (Fields $fields, ?string $value, Select $field, array $values) {

                                return $fields;
                            }),
                    ])->columnSpan(6),
                ]),

                Image::make('preview', 'url_preview')
                    ->disk('')
                    ->dir('/public/images/contents/')
                    ->showWhen('url_preview', '!=', null)
                    ->hideOnCreate()
                    ->hideOnUpdate()
                    ->hideOnForm(),
                Switcher::make('ГЛАВНАЯ', 'is_preview')
                    ->hideOnCreate()
                    ->hideOnUpdate()
                    ->hideOnForm()
                    ->updateOnPreview()
                    ->showWhen('type', '==', MediaTypes::PHOTO),
            ])
        ];
    }

    /**
     * @param Content $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
