<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;

use Leeto\Seo\Models\Seo;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Seo>
 */
class SeoTagsResource extends ModelResource
{
    protected string $model = Seo::class;

    protected string $title = 'SeoTags';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()
                    ->showOnExport()
                    ->useOnImport()
                    ->sortable(),
                Text::make('Url')
                    ->required()
                    ->showOnExport()
                    ->useOnImport(),
                Text::make('Title')
                    ->required()
                    ->showOnExport()
                    ->useOnImport(),
                Text::make('Description')
                    ->showOnExport()
                    ->useOnImport(),
                Text::make('Keywords')
                    ->showOnExport()
                    ->useOnImport(),
//                TinyMce::make('Text')
//                    ->showOnExport()
//                    ->useOnImport()
            ]),
        ];
    }

    /**
     * @param Seo $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
