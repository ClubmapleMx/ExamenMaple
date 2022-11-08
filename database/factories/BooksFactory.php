<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return[
            'title' => $this->faker->sentence(3),
            'category' => $this->faker->word(),
            'author' =>  $this->faker->name,
            'realease_date' =>  $this->faker->date('d/M/y'),
            'publish_date' =>  $this->faker->date('d/M/y'),
            'created_at' => $this->faker->dateTimeBetween('-100 week', '-1 week'),
        ];
    }
}
