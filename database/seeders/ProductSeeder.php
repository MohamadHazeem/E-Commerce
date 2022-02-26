<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
        [
            'name' => 'Laptop',
            'price' => '600$',
            'description' => '16 Gb Ram 512 GB ROM',
            'category' => 'laptop',
            'gallery' => 'https://www.notebookcheck.net/uploads/tx_nbc2/satellite-m300-hero.png'
        ]
        ]);
    }
}
