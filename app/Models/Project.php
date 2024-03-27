<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * @mixin IdeHelperProject
 */
class Project extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $casts = [
        'urls'         => 'array',
        'technologies' => 'array',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Fit::Crop, 300, 300)
            ->nonQueued();
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('images')
            ->registerMediaConversions(function () {
                $this
                    ->addMediaConversion('thumb')
                    ->width(500)
                    ->height(300);
            });
    }

    public function getAllMediaUrls(): array
    {
        $media = $this->getMedia('images');

        if (! $media->count()) {
            return [];
        }

        return $media
            ->map(fn(Media $media) => $media->getUrl())
            ->toArray();
    }

    public function url(): string
    {
        return route('project.show', ['project' => $this]);
    }
}
