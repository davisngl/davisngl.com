<?php

namespace App\Http\Resources;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

/** @mixin Project */
class ProjectResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'           => $this->id,
            'name'         => $this->name,
            'slug'         => $this->slug,
            'description'  => Str::words($this->description, 35),
            'technologies' => $this->technologies,
            'urls'         => collect($this->urls)->flatMap(fn($url) => [$url['key'] => $url['value']]),
            'images'       => [
                'thumb' => $this->getFirstMediaUrl('images', 'thumb'),
                'all'   => $this->getAllMediaUrls(),
            ],
        ];
    }
}
