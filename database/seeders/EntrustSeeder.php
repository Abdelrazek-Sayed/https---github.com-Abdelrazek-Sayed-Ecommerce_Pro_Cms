<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Faker\Factory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class EntrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $admin_role = Role::create([
            'name' => 'admin',
            'display_name' => 'Adminstartor',
            'description' => 'Adminstartor',
            'allowed_route' => 'admin',
        ]);


        $superAdmin_role = Role::create([
            'name' => 'superadmin',
            'display_name' => 'Super Adminstartor',
            'description' => 'Super Adminstartor',
            'allowed_route' => 'admin',
        ]);

        $customer_role = Role::create([
            'name' => 'customer',
            'display_name' => 'Customer',
            'description' => 'Customer',
            'allowed_route' => null,
        ]);

        $admin = User::create([
            'first_name' => 'Admin',
            'last_name' => 'System',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'mobile' => '11111111111',
            'user_image' => 'avatar.svg',
            'status' => 1,
            'email_verified_at' => now(),
            'password' => bcrypt('123123123'),
            'remember_token' => Str::random(10),
        ]);
        $admin->attachRole($admin_role);


        $super_admin = User::create([
            'first_name' => 'Super Admin',
            'last_name' => 'System',
            'email' => 'superadmin@superadmin.com',
            'username' => 'superadmin',
            'mobile' => '22222222222',
            'user_image' => 'avatar.svg',
            'status' => 1,
            'email_verified_at' => now(),
            'password' => bcrypt('123123123'),
            'remember_token' => Str::random(10),
        ]);
        $super_admin->attachRole($superAdmin_role);


        $customer = User::create([
            'first_name' => 'Client',
            'last_name' => 'System',
            'email' => 'client@client.com',
            'username' => 'customer',
            'mobile' => '33333333333',
            'user_image' => 'avatar.svg',
            'status' => 1,
            'email_verified_at' => now(),
            'password' => bcrypt('123123123'),
            'remember_token' => Str::random(10),
        ]);
        $customer->attachRole($customer_role);

        for ($i = 1; $i <= 20; $i++) {
            $customer = User::create([
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'email' => $faker->unique()->safeEmail,
                'username' => $faker->userName(),
                'mobile' => '3333' . $faker->numberBetween(1000, 5000),
                'user_image' => 'avatar.svg',
                'status' => 1,
                'email_verified_at' => now(),
                'password' => bcrypt('123123123'),
                'remember_token' => Str::random(10),
            ]);
            $customer->attachRole($customer_role);
        }

        // first permission
        $manage_main =  Permission::create([
            'name' => 'main',
            'display_name' => 'Main',
            // 'description' => '',
            'route' => 'index',
            'module' => 'index',
            'as' => 'index',
            // 'icon' => 'fas fa-fw fa-tachometer-alt',
            'icon' => 'fas fa-home',
            'parent' => '0',
            // 'parent_show' => '',
            'parent_original' => '0',
            'sidebar_link' => '1',
            'appear' => '1',
            'ordering' => '1',
        ]);
        $manage_main->parent_show = $manage_main->id;
        $manage_main->save();


        // product category  permissions [create-update-delete-show-display]
        $manage_product_categories =  Permission::create([
            'name' => 'manage_product_categories',
            'display_name' => 'Categories',
            // 'description' => '',
            'route' => 'product_categories',
            'module' => 'product_categories',
            'as' => 'product_categories.index',
            'icon' => 'fas fa-file-archive',
            'parent' => '0',
            // 'parent_show' => '',
            'parent_original' => '0',
            'sidebar_link' => '1',
            'appear' => '1',
            'ordering' => '5',
        ]);
        $manage_product_categories->parent_show = $manage_product_categories->id;
        $manage_product_categories->save();


        $show_product_categories =  Permission::create([
            'name' => 'show_product_categories',
            'display_name' => 'All Categories',
            // 'description' => '',
            'route' => 'product_categories',
            'module' => 'product_categories',
            'as' => 'product_categories.index',
            'icon' => 'fas fa-file-archive',
            'parent' => $manage_product_categories->id,
            'parent_show' => $manage_product_categories->id,
            'parent_original' => $manage_product_categories->id,
            'sidebar_link' => '1',
            'appear' => '1',
        ]);

        $create_product_categories =  Permission::create([
            'name' => 'create_product_categories',
            'display_name' => 'Create Category',
            // 'description' => '',
            'route' => 'product_categories',
            'module' => 'product_categories',
            'as' => 'product_categories.create',
            'icon' => null,
            'parent' => $manage_product_categories->id,
            'parent_show' => $manage_product_categories->id,
            'parent_original' => $manage_product_categories->id,
            'sidebar_link' => '1',
            'appear' => '0',
        ]);


        $display_product_categories =  Permission::create([
            'name' => 'display_product_categories',
            'display_name' => 'Show One Category',
            // 'description' => '',
            'route' => 'product_categories',
            'module' => 'product_categories',
            'as' => 'product_categories.show',
            'icon' => null,
            'parent' => $manage_product_categories->id,
            'parent_show' => $manage_product_categories->id,
            'parent_original' => $manage_product_categories->id,
            'sidebar_link' => '1',
            'appear' => '0',
        ]);

        $update_product_categories =  Permission::create([
            'name' => 'update_product_categories',
            'display_name' => 'Update Category',
            // 'description' => '',
            'route' => 'product_categories',
            'module' => 'product_categories',
            'as' => 'product_categories.edit',
            'icon' => null,
            'parent' => $manage_product_categories->id,
            'parent_show' => $manage_product_categories->id,
            'parent_original' => $manage_product_categories->id,
            'sidebar_link' => '1',
            'appear' => '0',
        ]);
        $delete_product_categories =  Permission::create([
            'name' => 'delete_product_categories',
            'display_name' => 'Delete Category',
            // 'description' => '',
            'route' => 'product_categories',
            'module' => 'product_categories',
            'as' => 'product_categories.destroy',
            'icon' => null,
            'parent' => $manage_product_categories->id,
            'parent_show' => $manage_product_categories->id,
            'parent_original' => $manage_product_categories->id,
            'sidebar_link' => '1',
            'appear' => '0',
        ]);
    }
}
