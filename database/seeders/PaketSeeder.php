<?php

namespace Database\Seeders;

use App\Models\Paket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{

    public function run(): void
    {
        $layanan = array('CATERING', 'DECORATION',  'VENUE', 'ENTERTAINMENT', 'PHOTOGRAPHY');
        $pakets = array(
            array(
                'Indonesian Taste' => 6000000,
                'Vegan Choice' => 8000000,
                'Classic Western' => 6000000,
                'Indian Fare' => 4000000,
                'Delightful Arabian' => 4000000,
                'Magnifico Italiano' => 4000000,
                'Korean Cuisine' => 6000000,
                'Authentic Chinese' => 4000000,
                'Art of Japanese' => 5000000,
                'French Gourmet' => 5000000
            ), array(
                'Custom Decoration' => 8000000,
                'Lantern Theme Decoration' => 6000000,
                'Color Based Decoration' => 4000000,
                'Arbor Decoration' => 4000000,
                'Stage Backdrop Only' => 2000000,
                'Royal Decoration' => 10000000,
                'Rustic Decoration' => 4000000,
                'Maximalism Decoration' => 5000000,
                'Wedding Altar Only' => 2000000,
                'Minimalist Decoration' => 2000000
            ), array(
                'Private Venue' => 10000000,
                'Bars & Lounge' => 7000000,
                'Beach Venue' => 4000000,
                'Park Wedding' => 4000000,
                'Home Backyard' => 2000000,
                'Sport Club' => 4000000,
                'Gallery & Museum' => 5000000,
                'Hotel Wedding' => 4000000,
                'Warehouse Wedding' => 2000000,
                'Restaurant Wedding' => 4000000
            ), array(
                'Franciscan Gardens Orange County Wedding' => 15000000,
                'The Wright House Provencal Wedding' => 15000000,
                'The Knot' => 15000000,
                'Bruna e Lucas' => 17500000,
                'Evelyn and The Vipers' => 17500000,
                'Bella And The Bourbon Boys' => 17500000,
                'Sugar Rush' => 17500000,
                'The Blakes' => 20000000,
                'Jenny and the Mexicats' => 20000000,
                'Untitled' => 20000000
            ), array(
                'French-Bohemian Backyard Wedding' => 3000000,
                'Malibu Wedding with Ocean Views' => 2000000,
                'South Seas Island Resort Wedding' => 5000000,
                'Louisiana Rustic Chic Wedding Inspiration' => 4000000,
                'Neutral and Rust Virginia Wedding' => 4000000,
                'The Ultimate Wedding Sparklers' => 2000000,
                'This Art Deco' => 5000000,
                'Tilden Park Wedding' => 4000000,
                'Romantic Blue & White Bridgerton Wedding' => 3000000,
                'Enchanting Mountain Bridal' => 5000000
            )
        );

        for ($i = 0; $i < 5; $i++){
            foreach($pakets[$i] as $key => $value ){
                $nama = $key;
                $harga = $value;
                $paket = new Paket([
                    'Layanan' => $layanan[$i],
                    'NamaPaket' => $nama,
                    'Deskripsi' => fake()->sentence(5),
                    'Harga'   => $harga,
                ]);
                $paket->save();
            }
        }
    }
}
