<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            [
                'img' => 'ezgif.com-gif-maker.jpg'
            ],
            [
                'img' => 'lastone.jpg'
            ]

        ]);
    }
}
