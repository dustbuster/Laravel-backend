<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'local_image_path' => fake()->filePath(),
            's3_image_path' => fake()->imageUrl(640, 480, 'cats', true, 'fake-s3-bucket')
        ];
    }
}
