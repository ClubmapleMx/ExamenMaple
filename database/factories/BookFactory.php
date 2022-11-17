<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Categories taken from: https://www.oprahdaily.com/entertainment/books/a29576863/types-of-book-genres/
        $categories = ['Action and Adventure', 'Classics', 'Comic Book', 'Mystery', 'Fantasy', 'Historical Fiction', 'Horror', 'Literary Fiction', 'Romance', 'Science Fiction', 'Suspense'];

        return [
            'title' => $this->faker->sentence(6, true),
            'category' => $this->faker->randomElement($categories),
            'author' => $this->faker->name(),
            'realease_date' => $this->faker->date(),
            'publish_date' => $this->faker->date(),
        ];
    }
}
