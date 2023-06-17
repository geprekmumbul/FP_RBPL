<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\PIC;
class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++){
            $cust = new Customer([
                'NomorCust' => fake()->unique()->e164PhoneNumber(),
                'NamaSuami' => fake()->name('male'),
                'NamaIstri' => fake()->name('female'),
                'Tanggal'   => fake()->date(),
                'Lokasi'    => fake()->address(),
                'Status'    => 'AWAL',
                'IdPIC'     => fake()->randomElement(PIC::pluck('IdPIC'))
            ]);
            $cust->save();
        }

    }
}
