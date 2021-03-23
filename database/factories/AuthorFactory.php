<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Author::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name,
            "bio" => $this->faker->paragraph(1),
            "image_name" => $this->faker->userName,
            "image_path" => $this->faker->imageUrl("800", "600", "cats"),
        ];
    }
}
