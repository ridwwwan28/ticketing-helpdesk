<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_tiket' => fake()->unique()->numerify('HD########'),
            'username' => fake()->unique()->freeEmail(),
            'tipe_komplain' => fake()->randomDigitNotNull(),
            'kendala' => fake()->sentence(),
            'detail_penyelesaian' => fake()->sentence(),
            'status' => fake()->randomElement($array = array('MENUNGGU', 'PROSES', 'SELESAI'))
        ];
    }
}
