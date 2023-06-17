<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([PICSeeder::class]);
        $this->call([PaketSeeder::class]);
        $this->call([CustomerSeeder::class]);
        $this->call([TransaksiSeeder::class]);
        $this->call([ReviewSeeder::class]);
    }
}
