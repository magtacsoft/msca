<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = [
            [
                'title' => 'Haqqımızda',
                'path' => 'about',
                'ordering' => 1
            ],
            [
                'title' => 'Xidmətlər',
                'path' => 'services',
                'ordering' => 2
            ],
            [
                'title' => 'Agro',
                'path' => 'construction',
                'ordering' => 3,
            ],
            [
                'title' => 'Əkin Sahələri',
                'path' => 'ekin-saheleri',
                'ordering' => 4,
            ],
            [
                'title' => 'Agro Servis',
                'path' => 'agro-servis',
                'ordering' => 5,
            ],
            [
                'title' => 'Layihələr',
                'path' => 'projects',
                'ordering' => 6,
            ],
            [
                'title' => 'Beton Zavod',
                'path' => 'beton-zavod',
                'ordering' => 7,
            ],
            [
                'title' => 'Əlaqə',
                'path' => 'contact',
                'ordering' => 8,
            ]
        ];

        foreach ($links as $key => $menu) {
                Menu::create($menu);
        }
    }
}
