<?php

namespace Database\Factories;

use App\Models\Author;
use Database\Seeders\AuthorSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;


class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'title' => fake()->sentence(1),
            'content' => fake()->text(),
            'author_id' => Author::all()->random()->id,
            'created_at'=>fake()->dateTimeBetween('2023-06-01','now')
        ];
    }


}
