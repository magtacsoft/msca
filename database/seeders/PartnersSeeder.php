<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnersSeeder extends Seeder
{

    public function run()
    {
        //

        DB::table('partners')->insert([
            [
                'img' => '785AP3sXBsJaUiK4r081jrjqABsUsG9fbCO8IhyS.png',
                'url' => 'https://example.com'
            ],
            [
                'img' => 't45wiw9qjxTGmYeuwrtU3iHvMQyd7Oro1Hylry9n.png',
                'url' => 'https://example.com'
            ],
            [
                'img' => 'r0vnE8mXWGV6qVzNKhhSbBRiAKSg755KtEeX9OAh.png',
                'url' => 'https://example.com'
            ],
            [
                'img' => '2cM178DOH6hjpd1Lundl8lC6J7kLEpLeLuQkzVU6.png',
                'url' => 'https://example.com'
            ],
            [
                'img' => '5egbEL7GzAKD6y5PQKOYfRWPbKbeWDsVBEcWXkIV.png',
                'url' => 'https://example.com'
            ],
            [
                'img' => 'BurLsdblmkPkxiVRjVN4kkNkcR7ZozsDjOiPj4hU.png',
                'url' => 'https://example.com'
            ],
            [
                'img' => 'YdVKPCQ59OmNmBwVry6eGQxzvn0CXfmYtjG6EeuC.png',
                'url' => 'https://example.com'
            ],
            [
                'img' => 'HRALjxypBAehGfDRB2tGolUqeslNgm8DDUO3D22y.png',
                'url' => 'https://example.com'
            ]

        ]);
    }
}
