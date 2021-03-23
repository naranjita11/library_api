<?php

namespace Database\Factories;

use App\Models\Book;
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
            "title"=>$this->faker->name,
            "author"=>$this->faker->name,
            "synopsis"=>$this->faker->paragraph(1),
            "image_name"=>$this->faker->userName,
            "image_path"=>$this->faker->imageUrl("800", "600", "cats"),
            "type"=>"fiction",
            "genre"=>$this->faker->sentence(2),
            "binding"=>"hardback",
            "pages"=>$this->faker->sentence(2),
            "publisher"=>$this->faker->sentence(2),
            "publication_date"=>$this->faker->sentence(2),
            "rrp"=>$this->faker->sentence(2),
        ];
    }
}
