<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Nette\Utils\Random;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'title'            =>  'Xidmət1',
                'icon'             => 'fa fa-cube',
                'text'             => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
             The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making
              it look like readable English.'
            ],
            [
                'title'            =>  'Xidmət2',
                'icon'             => 'fa fa-cube',
                'text'             => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
             The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making
              it look like readable English.'
            ],
            [
                'title'            =>  'Xidmət3',
                'icon'             => 'fa fa-cube',
                'text'             => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
             The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making
              it look like readable English.'
            ],
            [
                'title'            =>  'Xidmət4',
                'icon'             => 'fa fa-cube',
                'text'             => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
             The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making
              it look like readable English.'
            ],
            [
                'title'            =>  'Xidmət5',
                'icon'             => 'fa fa-cube',
                'text'             => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
             The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making
              it look like readable English.'
            ],
            [
                'title'            =>  'Xidmət6',
                'icon'             => 'fa fa-cube',
                'text'             => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
             The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making
              it look like readable English.'
            ],
            [
                'title'            =>  'Xidmət7',
                'icon'             => 'fa fa-cube',
                'text'             => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
             The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making
              it look like readable English.'
            ],
            [
                'title'            =>  'Xidmət8',
                'icon'             => 'fa fa-cube',
                'text'             => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
             The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making
              it look like readable English.'
            ]


        ]);
    }
}
