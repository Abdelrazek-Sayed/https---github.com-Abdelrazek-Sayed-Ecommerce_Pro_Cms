<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clothes =   ProductCategory::create([
            'name' => 'Clothes',
            'cover' => 'clothes.jpg',
            'status' => true,
            'parent_id' => null,
        ]);
        ProductCategory::create([
            'name' => 'Women\'s T-sirts',
            'cover' => 'clothes.jpg',
            'status' => true,
            'parent_id' => $clothes->id,
        ]);

        ProductCategory::create([
            'name' => 'Men\'s T-sirts',
            'cover' => 'clothes.jpg',
            'status' => true,
            'parent_id' => $clothes->id,
        ]);
        ProductCategory::create([
            'name' => 'Women\'s sunglasses',
            'cover' => 'clothes.jpg',
            'status' => true,
            'parent_id' => $clothes->id,
        ]);

        ProductCategory::create([
            'name' => 'Men\'s sunglasses',
            'cover' => 'clothes.jpg',
            'status' => true,
            'parent_id' => $clothes->id,
        ]);

        ProductCategory::create([
            'name' => 'Dresses',
            'cover' => 'clothes.jpg',
            'status' => true,
            'parent_id' => $clothes->id,
        ]);

        ProductCategory::create([
            'name' => 'Novelty Socks',
            'cover' => 'clothes.jpg',
            'status' => true,
            'parent_id' => $clothes->id,
        ]);


        $shoes =   ProductCategory::create([
            'name' => 'Shoes',
            'cover' => 'shoes.jpg',
            'status' => true,
            'parent_id' => null,
        ]);
        ProductCategory::create([
            'name' => 'Women\'s shoes',
            'cover' => 'shoes.jpg',
            'status' => true,
            'parent_id' => $shoes->id,
        ]);

        ProductCategory::create([
            'name' => 'Men\'s shoes',
            'cover' => 'shoes.jpg',
            'status' => true,
            'parent_id' => $shoes->id,
        ]);
        ProductCategory::create([
            'name' => 'Boy\'s shoes',
            'cover' => 'shoes.jpg',
            'status' => true,
            'parent_id' => $shoes->id,
        ]);

        ProductCategory::create([
            'name' => 'Girl\'s shoes',
            'cover' => 'shoes.jpg',
            'status' => true,
            'parent_id' => $shoes->id,
        ]);

        $watches =   ProductCategory::create([
            'name' => 'Watches',
            'cover' => 'watches.jpg',
            'status' => true,
            'parent_id' => null,
        ]);
        ProductCategory::create([
            'name' => 'Women\'s watches',
            'cover' => 'watches.jpg',
            'status' => true,
            'parent_id' => $watches->id,
        ]);

        ProductCategory::create([
            'name' => 'Men\'s watches',
            'cover' => 'watches.jpg',
            'status' => true,
            'parent_id' => $watches->id,
        ]);
        ProductCategory::create([
            'name' => 'Boy\'s watches',
            'cover' => 'watches.jpg',
            'status' => true,
            'parent_id' => $watches->id,
        ]);

        ProductCategory::create([
            'name' => 'Girl\'s watches',
            'cover' => 'watches.jpg',
            'status' => true,
            'parent_id' => $watches->id,
        ]);

        $electronics =   ProductCategory::create([
            'name' => 'Electronics',
            'cover' => 'watches.jpg',
            'status' => true,
            'parent_id' => null,
        ]);
        ProductCategory::create([
            'name' => 'Flash USB',
            'cover' => 'electronics.jpg',
            'status' => true,
            'parent_id' => $electronics->id,
        ]);

        ProductCategory::create([
            'name' => 'HDD',
            'cover' => 'electronics.jpg',
            'status' => true,
            'parent_id' => $watches->id,
        ]);
        ProductCategory::create([
            'name' => 'SSD',
            'cover' => 'electronics.jpg',
            'status' => true,
            'parent_id' => $electronics->id,
        ]);

        ProductCategory::create([
            'name' => 'TV',
            'cover' => 'electronics.jpg',
            'status' => true,
            'parent_id' => $electronics->id,
        ]);
    }
}
