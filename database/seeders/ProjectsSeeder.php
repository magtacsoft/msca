<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                    'title'=> 'Title' . rand(0,10),
                    'img' => 'BkEeGT3a8Sx1emtlenL4y1vrQKxGJlHftd8oAQZb.jpg',
                    'text'=>    'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.'
            ],
            [
                'title'=> 'Title' . rand(0,10),
                'img' => 'BkEeGT3a8Sx1emtlenL4y1vrQKxGJlHftd8oAQZb.jpg',
                'text'=>    'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.'
            ],
            [
                'title'=> 'Title' . rand(0,10),
                'img' => 'BkEeGT3a8Sx1emtlenL4y1vrQKxGJlHftd8oAQZb.jpg',
                'text'=>    'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.'
            ],
            [
                'title'=> 'Title' . rand(0,10),
                'img' => 'BkEeGT3a8Sx1emtlenL4y1vrQKxGJlHftd8oAQZb.jpg',
                'text'=>    'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.'
            ],
            [
                'title'=> 'Title' . rand(0,10),
                'img' => 'BkEeGT3a8Sx1emtlenL4y1vrQKxGJlHftd8oAQZb.jpg',
                'text'=>    'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.'
            ],
            [
                'title'=> 'Title' . rand(0,10),
                'img' => 'BkEeGT3a8Sx1emtlenL4y1vrQKxGJlHftd8oAQZb.jpg',
                'text'=>    'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.'
            ],
            [
                'title'=> 'Title' . rand(0,10),
                'img' => 'BkEeGT3a8Sx1emtlenL4y1vrQKxGJlHftd8oAQZb.jpg',
                'text'=>    'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.'
            ],

        ]);
    }
}
