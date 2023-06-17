<?php

namespace Database\Seeders;

use App\Models\PIC;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PICSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++){
            $pic = new PIC([
                'NomorPIC' => fake()->unique()->e164PhoneNumber(),
                'NamaPIC' => fake()->name('male')
            ]);
            $pic->save();
        }
    }
}
