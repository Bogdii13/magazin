<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'AUTOCAR',
                'description' => 'cu autocarul iti duci prietenii cu tine in vacanta',
                'image' => 'images/autocar.jpg',
                'price' => 28
            ],

            [
                'name' => 'Duba Marfa',
                'description' => 'O duba de marfa ce duce toata marfa.',
                'image' => 'images/duba.jpg',
                'price' => 20
            ],
            [
                'name' => 'Duba de persoane ',
                'description' => 'Duba duce persoanele la destinatie si in excursie ',
                'image' => 'images/dubaPersoane.jpeg',
                'price' => 23
            ],
            [
                'name' => 'Bicicleta',
                'description' => 'Cu cat te plimbi mai mult cu bicicleta cu atat mai repede slabesti .',
                'image' => 'images/bicicleta.jpeg',
                'price' => 7
            ],
            [
                'name' => 'Masina electrica',
                'description' => 'Aceasta masina nu polueaza deloc.',
                'image' => 'images/masinaelectrica.jpeg',
                'price' => 35
            ],
            [
                'name' => 'Hybrid',
                'description' => 'Masina asta trage cat pentru toate!.',
                'image' => 'images/hybrid.jpeg',
                'price' => 30
            ],
            [
                'name' => 'Trotineta electica',
                'description' => 'O trotineta de vis!.',
                'image' => 'images/trotinetaelectrica.avif',
                'price' => 7
            ],
            [
                'name' => 'Logan',
                'description' => 'NU CUMPARATI ACEST LOGAN!.',
                'image' => 'images/logan.jpg',
                'price' => 70
            ],
        ];


        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
