<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Auction',
                'email' => 'Auction@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 2,
                'description' => null,

                'company_name' => 'CodeGym',
                'country' => 'Viet Nam',
                'street_address' => 'Ha Noi, My Dinh 2, Nam Tu Liem',
                'postcode_zip' => 10000,
                'town_city' => 'Ha Noi',
                'phone' => '02462530029',

            ],
        ]);

        DB::table('users')->insert([
            [
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 3,
                'name' => 'Shane Lynch',
                'email' => 'ShaneLynch@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-0.png',
                'level' => 1,
                'description' => 'Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud amodo'
            ],
            [
                'id' => 4,
                'name' => 'Brandon Kelley',
                'email' => 'BrandonKelley@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-1.png',
                'level' => 1,
                'description' => null,
            ],
            [
                'id' => 5,
                'name' => 'Roy Banks',
                'email' => 'RoyBanks@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-2.png',
                'level' => 1,
                'description' => null,
            ],
        ]);

        DB::table('blogs')->insert([
            [
                'user_id' => 3,
                'title' => '',
                'image' => '',
                'category' => '',
                'content' => '',
            ],
        ]);

        DB::table('blogs_comments')->insert([
            [
                'blog_id' => 3,
                'user_id' => 1,
                'email' => '',
                'name' => '',
                'messages' => '',
            ],
        ]);

        DB::table('brands')->insert([
            [
                'name' => '',
            ],
        ]);

        DB::table('product_categories')->insert([
            [
                'name' => '',
            ],
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => '',
                'start_time' => '',
                'end_time' => '',
                'description' => '',
                'content' => '',
                'price' => 0,
                'qty' => 0,
                'discount' => 0,
                'weight' => 0,
                'sku' => '',
                'featured' => true,
                'tag' => '',
            ],
        ]);

        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => '',
            ],
            [
                'product_id' => 1,
                'path' => '',
            ],
        ]);

        DB::table('product_details')->insert([
            [
                'product_id' => 1,
                'color' => '',
                'size' => '',
                'qty' => 0,
            ],
        ]);

        DB::table('history_auctions')->insert([
            [
                'product_id' => 1,
                'user_id' => 4,
                'email' => 'BrandonKelley@gmail.com',
                'name' => 'Brandon Kelley',
                'price' => 0,
            ],
        ]);
    }
}

