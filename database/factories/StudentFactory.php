<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'tempat_lahir' => fake()->text(5),
            'tanggal_lahir' => fake()->date(),
            'sekolah' => fake()->sentence(2, false),
            'keterangan' => fake()->text(5),
        ];
    }
}
