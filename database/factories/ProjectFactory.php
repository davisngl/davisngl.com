<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ProjectFactory extends Factory
{
	protected $model = Project::class;

	public function definition(): array
	{
		return [
			'name'        => $this->faker->name(),
			'description' => $this->faker->text(),
			'urls'        => $this->faker->words(),
			'created_at'  => Carbon::now(),
			'updated_at'  => Carbon::now(),
		];
	}
}
