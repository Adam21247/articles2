<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //pobrac zassedowanych juz autorow $authors


        return [
            'title' => fake()->sentence(1),
            'content' => fake()->text(),
//            'author_id' => fake()->numberBetween(1,10), wtyjebac

        ];
    }


}
