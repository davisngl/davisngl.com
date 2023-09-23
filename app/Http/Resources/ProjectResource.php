<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/** @mixin \App\Models\Project */
class ProjectResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'slug'        => $this->slug,
            'description' => $this->description,
            'urls'        => $this->urls,
            'images'      => [
                'thumb' => $this->getFirstMediaUrl('images', 'thumb'),
                'all'   => $this->getAllMediaUrls(),
            ],
        ];
    }
}
