<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition(): array
    {
    	return [
    	    'title' => $this->faker->sentence(3,true),
            'description' => $this->faker->sentence(6,true),
            'price'=>$this->faker->numberBetween(25,150),
            'author_id'=>$this->faker->numberBetween(1,100)
    	];
    }
}
