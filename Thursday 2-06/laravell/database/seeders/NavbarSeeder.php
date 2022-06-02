<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NavbarSeeder extends Seeder
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
                'name' => 'Home',
                'route' => 'home',
                'ordering' => 1,
            ],
            [
                'name' => 'Products',
                'route' => 'products.index',
                'ordering' => 2,
            ],
            [
                'name' => 'About US',
                'route' => 'about.us',
                'ordering' => 3,
            ]
        ];
  
        foreach ($links as $key => $navbar) {
            Navbar::create($navbar);
        }
    }
}
