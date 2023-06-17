<?php

namespace Database\Seeders;

use App\Models\Paket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{

    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++){
            $paket = new Paket([
                'Layanan' => fake()->randomElement([
                    'DECORATION',
                    'PHOTOGRAPHY',
                    'CATERING',
                    'VENUE',
                    'ENTERTAINMENT'
                ]),
                'NamaPaket' => fake()->colorName(),
                'Deskripsi' => fake()->sentence(5),
                'Harga'   => fake()->randomNumber(1) * 10000000,
                'Rating'    => fake()->randomFloat(1,1,5),
            ]);
            $paket->save();
        }
    }
}
