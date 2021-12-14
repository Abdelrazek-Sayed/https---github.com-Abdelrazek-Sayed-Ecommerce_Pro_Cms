<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\EntrustSeeder;
use Database\Seeders\ProductCategorySeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            EntrustSeeder::class,
            ProductCategorySeeder::class,
        ]);
    }
}
