<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'prix' => $this->faker->randomFloat(2, 1, 100),
            'category_id' => \App\Models\Category::factory(),
        ];
    }
}
