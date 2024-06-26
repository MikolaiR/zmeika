<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\NewSletter;

use MoonShine\Fields\Image;
use MoonShine\Fields\Relationships\MorphMany;
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
 * @extends ModelResource<NewSletter>
 */
class NewSletterResource extends ModelResource
{
    protected string $model = NewSletter::class;

    protected string $title = 'Новости';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()
                    ->hideOnIndex(),
                Text::make('title')
                    ->reactive()
                    ->sortable(),
                Slug::make('slug')
                    ->from('title')
                    ->locale('en')
                    ->separator('-')
                    ->unique()
                    ->live(),
                TinyMce::make('description')
                    ->hideOnIndex(),
                Switcher::make( 'active')
                    ->updateOnPreview(),
                MorphMany::make('Контент', 'contents', resource: new ContentResource())
                    ->hideOnIndex()
                    ->creatable(),
            ]),
        ];
    }

    /**
     * @param NewSletter $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
