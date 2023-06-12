<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BorrowedItem>
 */
class BorrowedItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_item' => mt_rand(1, 20),
            'jumlah' => mt_rand(1, 5),
            'tanggal_pinjam' =>  $this->faker->dateTimeBetween('January 1st', 'May 31st')
        ];
    }
}
