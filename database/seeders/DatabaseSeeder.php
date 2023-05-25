<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Product::factory(10)->create([
        //     'name' => $this->faker->word,
        //     'price' => $this->faker->randomFloat(2, 10, 100),
        //     'description' => $this->faker->sentence,
        //     'image_url' => $this->faker->imageUrl(200, 200, 'product'),
        // ]);
    }
}
