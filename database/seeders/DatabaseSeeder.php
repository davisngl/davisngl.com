<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        User::factory()->create([
            'name'     => 'Davis',
            'email'    => 'davisnaglis2@gmail.com',
            'password' => bcrypt('admin'),
        ]);

        Article::factory()->count(10)->create();
    }
}
