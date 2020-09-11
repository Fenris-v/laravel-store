<?php

use Database\Seeders\CategoriesSeeder;
use Database\Seeders\CategoryGoodSeeder;
use Database\Seeders\GoodImageSeeder;
use Database\Seeders\GoodsSeeder;
use Database\Seeders\GroupSeeder;
use Database\Seeders\GroupUserSeeder;
use Database\Seeders\ImageSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
                UserSeeder::class,
                GroupSeeder::class,
                GroupUserSeeder::class,
                CategoriesSeeder::class,
                GoodsSeeder::class,
                CategoryGoodSeeder::class,
                ImageSeeder::class,
                GoodImageSeeder::class
            ]
        );
    }
}
