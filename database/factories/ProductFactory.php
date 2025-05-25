<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement([
                'Laptop ASUS',
                'Kemeja Pria',
                'Buku Matematika',
                'Kipas Angin Mini',
                'Smartphone Samsung',
                'Headphone Bluetooth',
                'Meja Belajar',
                'Mouse Wireless'
            ]),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'stock' => $this->faker->numberBetween(0, 100),
            'category' => $this->faker->randomElement(['Electronics', 'Clothing', 'Books', 'Home'])
        ];
    }
}
