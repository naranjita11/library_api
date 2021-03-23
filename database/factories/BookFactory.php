<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "author_id" => Author::factory(),
            "title" => $this->faker->sentence,
            "synopsis" => $this->faker->paragraph(5),
            "image_name" => $this->faker->userName,
            "image_path" => $this->faker->imageUrl("800", "600", "cats"),
            "pages" => $this->faker->numberBetween($min = 30, $max = 3000),
            "publication_date" => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            "rrp" => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 5, $max = 100),
        ];
    }
}
