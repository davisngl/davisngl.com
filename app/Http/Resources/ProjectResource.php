<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Project */
class ProjectResource extends JsonResource
{
	public function toArray(Request $request): array
	{
		return [
			'id'          => $this->id,
			'name'        => $this->name,
			'description' => $this->description,
			'urls'        => $this->urls,
			'created_at'  => $this->created_at,
			'updated_at'  => $this->updated_at,
		];
	}
}
