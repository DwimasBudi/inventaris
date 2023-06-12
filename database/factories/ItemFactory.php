<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $namabarang = "Barang ". mt_rand(1, 100);
        return [
            'nama' => "Barang " . mt_rand(1, 100),
            'slug' => $this->faker->slug(),
            'Kondisi' => 'Baik',
            'jumlah' => mt_rand(1, 40),
            'tanggal_masuk' =>  $this->faker->dateTimeBetween('January 1st', 'May 31st')
        ];
    }
}
