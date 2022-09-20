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
                'avatar' => 'avatar-0.jpg',
                'level' => 1,
                'description' => 'Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud amodo'
            ],
            [
                'id' => 4,
                'name' => 'Brandon Kelley',
                'email' => 'BrandonKelley@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-1.jpg',
                'level' => 1,
                'description' => null,
            ],
            [
                'id' => 5,
                'name' => 'Roy Banks',
                'email' => 'RoyBanks@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-2.jpg',
                'level' => 1,
                'description' => null,
            ],
        ]);

        DB::table('blogs')->insert([
            [
                'user_id' => 1,
                'title' => 'Top 10 best selling Tendence watches in 2022',
                'image' => 'tendence.jpg',
                'category' => '',
                'content' => 'As a famous Swiss watch brand, Tendence is increasingly popular in the world market because of its relentless...',
            ],
            [
                'user_id' => 2,
                'title' => 'What is Tretinoin Obagi? Is that good? Actual effect?',
                'image' => 'tretinoin.jpg',
                'category' => '',
                'content' => 'Tretinoin Obagi là dòng sản phẩm đang rất hot trên thị trường ngành hàng mỹ phẩm trị mụn. Sản phẩm được coi là tượng...',
            ],
            [
                'user_id' => 3,
                'title' => 'Review Japanese Mama Ramune candy for babies',
                'image' => 'kmama-ramune.jpg',
                'category' => '',
                'content' => 'Children often anorexic will lead to a lack of nutrients in the body. This limits the development of....',
            ],
            [
                'user_id' => 4,
                'title' => 'What is Tretinoin Obagi? Is that good? Actual effect?',
                'image' => 'tretinoin.jpg',
                'category' => '',
                'content' => 'Tretinoin Obagi là dòng sản phẩm đang rất hot trên thị trường ngành hàng mỹ phẩm trị mụn. Sản phẩm được coi là tượng...',
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


        DB::table('product_categories')->insert([
            [
                'name' => 'Hand Bag',
                'path' => '',
            ],
            [
                'name' => 'Clock',
                'path' => '',
            ],
            [
                'name' => 'Shirt',
                'path' => '',
            ],
            [
                'name' => 'Car',
                'path' => '',
            ],
            [
                'name' => 'Houseware',
                'path' => '',
            ],
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'product_category_id' => 1,
                'name' => 'New men postman bag large capacity one shoulder portable casual notebook computer men logo bag can be customized LOGO for men',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 10.0,
                'qty' => 1,
                'weight' => 0.6,
                'sku' => '002654',
                'featured' => true,
            ],

            [
            'id' => 2,
            'product_category_id' => 1,
            'name' => 'leather ladies shoulder bags vintage PU purse vegan handbag women hand bag',
            'start_time' => '2022-09-07 12:21:57',
            'end_time' => '2022-11-07 12:21:57',
            'description' => '',
            'price' => 25.0,
            'qty' => 4,
            'weight' => 0.9,
            'sku' => '002664',
            'featured' => true,
            ],

            [
                'id' => 3,
                'product_category_id' => 1,
                'name' => '4 In 1 Set Crossbody Bag Popular Pu Leather Ladies Tote Bags 2021 Women Shoulder Handbag Set',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 19.0,
                'qty' => 3,
                'weight' => 0.5,
                'sku' => '002644',
                'featured' => false,
            ],

            [
                'id' => 4,
                'product_category_id' => 1,
                'name' => 'Oxford Backpack For Women 2019 Hot Style Korean Joker Fashion Travel Backpack Casual School Bag',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 23.0,
                'qty' => 1,
                'weight' => 0.8,
                'sku' => '002675',
                'featured' => false,
            ],

            [
                'id' => 5,
                'product_category_id' => 1,
                'name' => 'Marrant 7601 men genuine leather large capacity chest bag durable leather crossbody sling bag for men sling bag',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 38.0,
                'qty' => 1,
                'weight' => 0.850,
                'sku' => '002675',
                'featured' => false,
            ],

            [
                'id' => 6,
                'product_category_id' => 1,
                'name' => 'Factory price bags women handbags bucket card holder crossbody for women custom purses fashion designer leather handbag',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 28.0,
                'qty' => 1,
                'weight' => 0.850,
                'sku' => '002685',
                'featured' => false,
            ],

            [
                'id' => 7,
                'product_category_id' => 1,
                'name' => 'Custom Logo Travel Accessoires Unisex Multifunction Water Resistant OEM Gym Bag Duffle Bag Sport Pink Overnight Bag',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 18.0,
                'qty' => 1,
                'weight' => 0.850,
                'sku' => '002688',
                'featured' => false,
            ],

            [
                'id' => 8,
                'product_category_id' => 1,
                'name' => 'Multifunctional family travel first aid kit doctor outdoor medical bags emergency medicine storage bags',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 28.0,
                'qty' => 1,
                'weight' => 0.850,
                'sku' => '002699',
                'featured' => false,
            ],

            [
                'id' => 9,
                'product_category_id' => 1,
                'name' => 'New style mens handbag PU leather multi-pocket business casual tide bag Messenger bag to work mens bag',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 40.0,
                'qty' => 2,
                'weight' => 0.98,
                'sku' => '003699',
                'featured' => false,
            ],

            [
                'id' => 10,
                'product_category_id' => 1,
                'name' => 'Customized wholesale womens fashion shoulder messenger bag handbag Candy colored leather crossbody bag',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 0.5,
                'qty' => 2,
                'weight' => 0.98,
                'sku' => '005699',
                'featured' => false,
            ],

            [
                'id' => 11,
                'product_category_id' => 1,
                'name' => '2020 Stylish handbag PU leather bag beautiful bag handbag oblique cross bag',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 0.4,
                'qty' => 1,
                'weight' => 0.3,
                'sku' => '004699',
                'featured' => false,
            ],

            [
                'id' => 12,
                'product_category_id' => 1,
                'name' => 'Girls shoulder bags Vendor Supply Lightweight fashion Shiny messenger shoulder bag',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 1,
                'qty' => 1,
                'weight' => 0.3,
                'sku' => '007699',
                'featured' => false,
            ],


            [
                'id' => 13,
                'product_category_id' => 2,
                'name' => 'SINOBI Simple Women Wrist Watches Gold Watchband Top Luxury Brand Girl Look Crystal Quartz Clock Ladies Wristwatch Reloj Mujer',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 40.0,
                'qty' => 1,
                'weight' => 0.63,
                'sku' => '004899',
                'featured' => true,
            ],

            [
                'id' => 14,
                'product_category_id' => 2,
                'name' => 'INFINITY TIME Oversized Large Industrial Loft Metal Moving Gear Wall Clock for Modern Living Room Decor',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 36.0,
                'qty' => 1,
                'weight' => 0.9,
                'sku' => '069569',
                'featured' => true,
            ],

            [
                'id' => 15,
                'product_category_id' => 2,
                'name' => 'WOZOOM Custom Luxury Metal Decoration Home Wall Decor Fancy Design Large Iron Wall Clocks Elegant Clock With Walnut Wood Gold',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 400.0,
                'qty' => 1,
                'weight' => 0.9,
                'sku' => '004879',
                'featured' => false,
            ],

            [
                'id' => 16,
                'product_category_id' => 2,
                'name' => 'SKMEI 9260 quartz wristwatch men watch luxury watches mens branded waterproof',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 42.0,
                'qty' => 1,
                'weight' => 0.9,
                'sku' => '001279',
                'featured' => false,
            ],

            [
                'id' => 17,
                'product_category_id' => 2,
                'name' => 'Top sale 2019 SKMEI 9196 montre homme luxury leather band quartz men wrist watch clocks hand watches men',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 20.0,
                'qty' => 1,
                'weight' => 0.7,
                'sku' => '001379',
                'featured' => false,
            ],

            [
                'id' => 18,
                'product_category_id' => 2,
                'name' => 'SKMEI 1854 bling small face diamond watch strap stainless steel luxury womens watch with bracelets',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 36.0,
                'qty' => 1,
                'weight' => 0.79,
                'sku' => '068479',
                'featured' => false,
            ],

            [
                'id' => 19,
                'product_category_id' => 2,
                'name' => '2022 SKMEI 1904 luxury custom logo stainless steel strap with date 3bar water proof watches men wrist',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 46.0,
                'qty' => 1,
                'weight' => 1.2,
                'sku' => '066379',
                'featured' => false,
            ],

            [
                'id' => 20,
                'product_category_id' => 2,
                'name' => '020 New SKMEI 9208 custom logo mesh stainless steel waterproof quartz uhren men watch luxury jam tangan pria',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 7.0,
                'qty' => 1,
                'weight' => 1.2,
                'sku' => '001179',
                'featured' => false,
            ],

            [
                'id' => 21,
                'product_category_id' => 2,
                'name' => 'Skmei 1870 trendy 30m water resistant calendar luxury watch stainless steel original watches brand men wrist gold',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 21.0,
                'qty' => 1,
                'weight' => 1.2,
                'sku' => '002379',
                'featured' => false,
            ],

            [
                'id' => 22,
                'product_category_id' => 2,
                'name' => 'SKMEI 1954 customized business wrist luxury quartz 30m water resistant square case gold casual watch for men',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 66.0,
                'qty' => 1,
                'weight' => 1.0,
                'sku' => '006379',
                'featured' => false,
            ],

            [
                'id' => 23,
                'product_category_id' => 2,
                'name' => 'skmei 1335 hot sale stainless steel 5atm Waterproof led multifunction wrist watches men digital watch',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 33.0,
                'qty' => 1,
                'weight' => 1.0,
                'sku' => '076379',
                'featured' => false,
            ],

            [
                'id' => 24,
                'product_category_id' => 2,
                'name' => 'colorful twin bell alarm Clock',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 1,
                'qty' => 1,
                'weight' => 1.0,
                'sku' => '056429',
                'featured' => false,
            ],

            //Shirt

            [
                'id' => 25,
                'product_category_id' => 3,
                'name' => 'Wholesale high quality outdoor men sublimation print polo shirt custom 100%polyester men short sleeve sports golf polo shirt',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 15.0,
                'qty' => 1,
                'weight' => 0.5,
                'sku' => '056439',
                'featured' => false,
            ],

            [
                'id' => 26,
                'product_category_id' => 3,
                'name' => 'Custom Logo wholesale t-shirts plain dyed velvet Men Turtleneck t shirt Velvet Casual Long Sleeve Tshirt',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 18.0,
                'qty' => 1,
                'weight' => 0.7,
                'sku' => '056629',
                'featured' => false,
            ],

            [
                'id' => 27,
                'product_category_id' => 3,
                'name' => 'Custom Printing Hooded Short Sleeve T Shirt 100% Polyester Solid Color Men GYM Slim Fit Face Masked T-shirt',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 13.0,
                'qty' => 1,
                'weight' => 0.7,
                'sku' => '056119',
                'featured' => false,
            ],

            [
                'id' => 28,
                'product_category_id' => 3,
                'name' => 'KLBG outdoor winter mens jackets for man custom down jacket',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 23.0,
                'qty' => 1,
                'weight' => 1.5,
                'sku' => '055119',
                'featured' => false,
            ],

            [
                'id' => 29,
                'product_category_id' => 3,
                'name' => 'JC thick high quality winter outdoor jacket oversized detachable hoodie bomber jacket mens',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 30.0,
                'qty' => 1,
                'weight' => 1.5,
                'sku' => '056119',
                'featured' => false,
            ],

            [
                'id' => 30,
                'product_category_id' => 3,
                'name' => 'The Cloudy Crane Ao Dai with your baby',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 40.0,
                'qty' => 1,
                'weight' => 0.89,
                'sku' => '055119',
                'featured' => false,
            ],

            [
                'id' => 31,
                'product_category_id' => 3,
                'name' => 'Baby boy Gile striped outfit made in Vietnam',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 20.0,
                'qty' => 1,
                'weight' => 0.89,
                'sku' => '064519',
                'featured' => false,
            ],

            [
                'id' => 32,
                'product_category_id' => 3,
                'name' => 'Wholesale 2022 New Collection US Army Huey Helicopter Hawaiian Shirt Made in Vietnam Contact us for Best Price',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 7.0,
                'qty' => 1,
                'weight' => 0.80,
                'sku' => '066619',
                'featured' => false,
            ],

            [
                'id' => 33,
                'product_category_id' => 3,
                'name' => 'Basic Men Polo Shirts Striped Loose Fit Long Sleeve Polo Shirt',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 16.0,
                'qty' => 1,
                'weight' => 0.80,
                'sku' => '057329',
                'featured' => false,
            ],

            [
                'id' => 34,
                'product_category_id' => 3,
                'name' => '100% Cotton polo shirts Custom logo soft comfortable bulk quantity polo t-shirt',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 6.9,
                'qty' => 1,
                'weight' => 0.80,
                'sku' => '056529',
                'featured' => true,
            ],


            [
                'id' => 35,
                'product_category_id' => 3,
                'name' => 'Professional Manufacturer custom mens shirt AOSHI plus size shirts men shirts for men',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 37.2,
                'qty' => 1,
                'weight' => 0.80,
                'sku' => '651329',
                'featured' => false,
            ],

            [
                'id' => 36,
                'product_category_id' => 3,
                'name' => 'Baju koszulka bluz poloshirt polotroja kemeja ao thun co camisa magliette da chemise hemd shirts t mens custom men polo shirt',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 3.0,
                'qty' => 1,
                'weight' => 0.80,
                'sku' => '654329',
                'featured' => false,
            ],

            //Car

            [
                'id' => 37,
                'product_category_id' => 4,
                'name' => 'Electric car high speed chinese vehicles 4x4 chavy menlo ev electric car chassis',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 3000.0,
                'qty' => 1,
                'weight' => 1490.0,
                'sku' => '654649',
                'featured' => true,
            ],

            [
                'id' => 38,
                'product_category_id' => 4,
                'name' => 'New and Second Hand used car High Speed 150km/h Electric Car Vehicles Made In China New Electric Car automotives',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 6000.0,
                'qty' => 1,
                'weight' => 1490.0,
                'sku' => '656649',
                'featured' => true,
            ],

            [
                'id' => 39,
                'product_category_id' => 4,
                'name' => 'car vinfat',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 16000.0,
                'qty' => 1,
                'weight' => 1490.0,
                'sku' => '664649',
                'featured' => true,
            ],

            [
                'id' => 40,
                'product_category_id' => 4,
                'name' => '2022 NEW Tourism 8 seater classic electric vintage car',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 26000.0,
                'qty' => 1,
                'weight' => 1290.0,
                'sku' => '764649',
                'featured' => false,
            ],

            [
                'id' => 41,
                'product_category_id' => 4,
                'name' => 'Mercede Benz licesed 12v ride on car children electric toy cars to drive baby toy for wholesale',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 26000.0,
                'qty' => 1,
                'weight' => 1390.0,
                'sku' => '666649',
                'featured' => false,
            ],

            [
                'id' => 42,
                'product_category_id' => 4,
                'name' => 'used TOYOTA RAV 4 HYBRID LHD',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 500.0,
                'qty' => 1,
                'weight' => 1490.0,
                'sku' => '636649',
                'featured' => false,
            ],

            [
                'id' =>43,
                'product_category_id' => 4,
                'name' => 'Used Toyota Land Cruiser Double Cab VDJ79 Pickup Diesel 4.5L',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 1500.0,
                'qty' => 1,
                'weight' => 1490.0,
                'sku' => '633649',
                'featured' => false,
            ],

            [
                'id' => 44,
                'product_category_id' => 4,
                'name' => 'Price list for BMW 118i in September 2022',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 10500.0,
                'qty' => 1,
                'weight' => 1380.0,
                'sku' => '637649',
                'featured' => false,
            ],

            [
                'id' => 45,
                'product_category_id' => 4,
                'name' => 'Mercedes-Benz E200 2018',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 10500.0,
                'qty' => 1,
                'weight' => 1480.0,
                'sku' => '636549',
                'featured' => false,
            ],

            [
                'id' => 46,
                'product_category_id' => 4,
                'name' => 'Mercedes-Benz G63 4.0 V8 2022',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 199999.0,
                'qty' => 1,
                'weight' => 3650.0,
                'sku' => '633549',
                'featured' => true,
            ],

            [
                'id' => 47,
                'product_category_id' => 4,
                'name' => 'Audi A4 40 TFSI Advanced 2019',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 9999.0,
                'qty' => 1,
                'weight' => 1650.0,
                'sku' => '636349',
                'featured' => false,
            ],

            [
                'id' => 48,
                'product_category_id' => 4,
                'name' => 'Nissan Navara EL Premium R 2017',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 9990.0,
                'qty' => 1,
                'weight' => 1650.0,
                'sku' => '636419',
                'featured' => true,
            ],

            //Houseware

            [
                'id' => 49,
                'product_category_id' => 5,
                'name' => 'Xiaomi TV EA43 2022 Series - 100% New - Xiaomi Hanoi TV',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 90.0,
                'qty' => 1,
                'weight' => 15.0,
                'sku' => '636499',
                'featured' => true,
            ],

            [
                'id' => 50,
                'product_category_id' => 5,
                'name' => 'Smart rice cooker GAABOR GR-S30A large capacity 3L - 500W - Genuine product',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 72.0,
                'qty' => 1,
                'weight' => 1.9,
                'sku' => '637499',
                'featured' => false,
            ],

            [
                'id' => 51,
                'product_category_id' => 5,
                'name' => 'Smart rice cooker Sunhouse SHB9005-EC electric double cooker',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 66.0,
                'qty' => 1,
                'weight' => 7.037,
                'sku' => '637229',
                'featured' => false,
            ],

            [
                'id' => 52,
                'product_category_id' => 5,
                'name' => 'Refrigerator Samsung Family Hub 641L RS64T5F01B4',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 99.0,
                'qty' => 1,
                'weight' => 115.037,
                'sku' => '633529',
                'featured' => false,
            ],

            [
                'id' => 53,
                'product_category_id' => 5,
                'name' => 'Factory MDF Closets Bedroom Modern Wardrobe Wooden Closet Cabinet Clothes For Sale',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 99.0,
                'qty' => 1,
                'weight' => 23.037,
                'sku' => '636379',
                'featured' => false,
            ],

            [
                'id' => 54,
                'product_category_id' => 5,
                'name' => 'Particle Board Material Storage Modern Wardrobe Bedroom Wardrobes Closet',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 77.0,
                'qty' => 1,
                'weight' => 29.037,
                'sku' => '756179',
                'featured' => false,
            ],

            [
                'id' => 55,
                'product_category_id' => 5,
                'name' => 'factory 2022 new design modern kitchen appliances wall cabinet design arc glass hidden range hoods in stainless steel',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 77.0,
                'qty' => 1,
                'weight' => 12.037,
                'sku' => '751579',
                'featured' => false,
            ],

            [
                'id' => 56,
                'product_category_id' => 5,
                'name' => 'LG Air Conditioner Wifi Inverter 1.5 HP V13APF - Model 2018 - Free Installation',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 79.0,
                'qty' => 1,
                'weight' => 22.037,
                'sku' => '776579',
                'featured' => false,
            ],

            [
                'id' => 57,
                'product_category_id' => 5,
                'name' => 'Philips HD9270/90 air fryer - 6.2L',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 79.0,
                'qty' => 1,
                'weight' => 1.27,
                'sku' => '726579',
                'featured' => false,
            ],

            [
                'id' => 58,
                'product_category_id' => 5,
                'name' => 'Vie poco bladeless tower fan with integrated negative ion supply mode, air purification',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 79.0,
                'qty' => 1,
                'weight' => 5.27,
                'sku' => '064134',
                'featured' => false,
            ],

            [
                'id' => 59,
                'product_category_id' => 5,
                'name' => '3500W Large Capacity Hot & Cold 2-Way Hair Dryer. Large capacity hair dryer',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 2.0,
                'qty' => 1,
                'weight' => 1.037,
                'sku' => '761279',
                'featured' => false,
            ],

            [
                'id' => 60,
                'product_category_id' => 5,
                'name' => 'Table top water heater imported from Japan Fujihome WD5510E',
                'start_time' => '2022-09-07 12:21:57',
                'end_time' => '2022-11-07 12:21:57',
                'description' => '',
                'price' => 15.0,
                'qty' => 1,
                'weight' => 3.037,
                'sku' => '003165',
                'featured' => false,
            ],










        ]);

        DB::table('product_images')->insert([

            //Hand Bag

            [
                'product_id' => 1,
                'path' => 'men_postman_bag1.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'men_postman_bag2.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'men_postman_bag3.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'men_postman_bag4.jpg',
            ],

            [
                'product_id' => 2,
                'path' => 'women_book_bag1.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'women_book_bag2.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'women_book_bag3.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'women_book_bag4.jpg',
            ],

            [
                'product_id' => 3,
                'path' => 'Tote_Bags_1.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'Tote_Bags_2.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'Tote_Bags_3.jpg',
            ],
            [
                'product_id' => 3,
               'path' => 'Tote_Bags_4.jpg',
            ],

            [
                'product_id' => 4,
                'path' => 'Oxford_Backpack1.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'Oxford_Backpack2.jpg',
            ],
            [
               'product_id' => 4,
                'path' => 'Oxford_Backpack3.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'Oxford_Backpack4.jpg',
            ],

            [
                'product_id' => 5,
                'path' => 'sling_bag_for_men_sling_bag1.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'sling_bag_for_men_sling_bag2.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'sling_bag_for_men_sling_bag3.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'sling_bag_for_men_sling_bag4.jpg',
            ],

            [
                'product_id' => 6,
                'path' => 'women_handbags1.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'women_handbags2.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'women_handbags3.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'women_handbags4.jpg',
            ],

            [
                'product_id' => 7,
                'path' => 'OEM_Gym_Bag 1.jpg',
            ],
            [
                'product_id' => 7,
                'path' => 'OEM_Gym_Bag 2.jpg',
            ],
            [
                'product_id' => 7,
                'path' => 'OEM_Gym_Bag 3.jpg',
            ],
            [
                'product_id' => 7,
                'path' => 'OEM_Gym_Bag 4.jpg',
            ],

            [
                'product_id' => 8,
                'path' => 'medical_bags1.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'medical_bags2.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'medical_bags3.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'medical_bags4.jpg',
            ],

            [
                'product_id' => 9,
                'path' => 'work_mens_bag1.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'work_mens_bag2.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'work_mens_bag3.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'work_mens_bag4.jpg',
            ],

            [
                'product_id' => 10,
                'path' => 'shoulder_messenger_bag_handbag1.jpeg',
            ],
            [
                'product_id' => 10,
                'path' => 'shoulder_messenger_bag_handbag2.jpeg',
            ],
            [
                'product_id' => 10,
                'path' => 'shoulder_messenger_bag_handbag3.jpeg',
            ],
            [
                'product_id' => 10,
                'path' => 'shoulder_messenger_bag_handbag4.jpeg',
            ],

            [
                'product_id' => 11,
                'path' => 'Stylish_handbag_PU1.jpg',
            ],
            [
                'product_id' => 11,
                'path' => 'Stylish_handbag_PU2.jpg',
            ],
            [
                'product_id' => 11,
                'path' => 'Stylish_handbag_PU3.jpg',
            ],
            [
                'product_id' => 11,
                'path' => 'Stylish_handbag_PU4.jpg',
            ],

            [
                'product_id' => 12,
                'path' => 'Girls_shoulder_bags1.jpg',
            ],
            [
                'product_id' => 12,
                'path' => 'Girls_shoulder_bags2.jpg',
            ],
            [
                'product_id' => 12,
                'path' => 'Girls_shoulder_bags3.jpg',
            ],
            [
                'product_id' => 12,
                'path' => 'Girls_shoulder_bags4.jpg',
            ],

            //Clock

            [
                'product_id' => 13,
                'path' => 'Watches_Gold_Watchband1.jpg',
            ],
            [
                'product_id' => 13,
                'path' => 'Watches_Gold_Watchband2.jpg',
            ],
            [
                'product_id' => 13,
                'path' => 'Watches_Gold_Watchband3.jpg',
            ],
            [
                'product_id' => 13,
                'path' => 'Watches_Gold_Watchband4.jpg',
            ],

            [
                'product_id' => 14,
                'path' => 'Wall_Clock1.jpg',
            ],
            [
                'product_id' => 14,
                'path' => 'Wall_Clock2.png',
            ],
            [
                'product_id' => 14,
                'path' => 'Wall_Clock3.jpg',
            ],
            [
                'product_id' => 14,
                'path' => 'Wall_Clock4.jpg',
            ],

            [
                'product_id' => 15,
                'path' => 'Clock_With_Walnut_Wood_Gold1.jpg',
            ],
            [
                'product_id' => 15,
                'path' => 'Clock_With_Walnut_Wood_Gold2.jpg',
            ],
            [
                'product_id' => 15,
                'path' => 'Clock_With_Walnut_Wood_Gold3.jpg',
            ],
            [
                'product_id' => 15,
                'path' => 'Clock_With_Walnut_Wood_Gold4.jpg',
            ],

            [
                'product_id' => 16,
                'path' => 'men_watch_luxury1.jpg',
            ],
            [
                'product_id' => 16,
                'path' => 'men_watch_luxury2.jpg',
            ],
            [
                'product_id' => 16,
                'path' => 'men_watch_luxury3.jpg',
            ],
            [
                'product_id' => 16,
                'path' => 'men_watch_luxury4.jpg',
            ],

            [
                'product_id' => 17,
                'path' => 'SKMEI_9196_luxury1.jpg',
            ],
            [
                'product_id' => 17,
                'path' => 'SKMEI_9196_luxury2.jpg',
            ],
            [
                'product_id' => 17,
                'path' => 'SKMEI_9196_luxury3.jpg',
            ],
            [
                'product_id' => 17,
                'path' => 'SKMEI_9196_luxury4.jpg',
            ],

            [
                'product_id' => 18,
                'path' => 'steel_luxury_women_atch1.jpg',
            ],
            [
                'product_id' => 18,
                'path' => 'steel_luxury_women_atch2.jpg',
            ],
            [
                'product_id' => 18,
                'path' => 'steel_luxury_women_atch3.jpg',
            ],
            [
                'product_id' => 18,
                'path' => 'steel_luxury_women_atch4.jpg',
            ],

            [
                'product_id' => 19,
                'path' => 'SKMEI_1904_luxury1.jpg',
            ],
            [
                'product_id' => 19,
                'path' => 'SKMEI_1904_luxury2.jpg',
            ],
            [
                'product_id' => 19,
                'path' => 'SKMEI_1904_luxury3.jpg',
            ],
            [
                'product_id' => 19,
                'path' => 'SKMEI_1904_luxury4.jpg',
            ],

            [
                'product_id' => 20,
                'path' => 'quartz_uhren_men_watch1.jpg',
            ],
            [
                'product_id' => 20,
                'path' => 'quartz_uhren_men_watch2.jpg',
            ],
            [
                'product_id' => 20,
                'path' => 'quartz_uhren_men_watch3.jpg',
            ],
            [
                'product_id' => 20,
                'path' => 'quartz_uhren_men_watch4.jpg',
            ],

            [
                'product_id' => 21,
                'path' => 'watches_brand_men_wrist_gold1.jpg',
            ],
            [
                'product_id' => 21,
                'path' => 'watches_brand_men_wrist_gold2.jpg',
            ],
            [
                'product_id' => 21,
                'path' => 'watches_brand_men_wrist_gold3.jpg',
            ],
            [
                'product_id' => 21,
                'path' => 'watches_brand_men_wrist_gold4.jpg',
            ],

            [
                'product_id' => 22,
                'path' => 'watch_for_men1.jpg',
            ],
            [
                'product_id' => 22,
                'path' => 'watch_for_men2.jpg',
            ],
            [
                'product_id' => 22,
                'path' => 'watch_for_men3.jpg',
            ],
            [
                'product_id' => 22,
                'path' => 'watch_for_men4.jpg',
            ],

            [
                'product_id' => 23,
                'path' => 'wrist_watches_men1.jpg',
            ],
            [
                'product_id' => 23,
                'path' => 'wrist_watches_men2.jpg',
            ],
            [
                'product_id' => 23,
                'path' => 'wrist_watches_men3.jpg',
            ],
            [
                'product_id' => 23,
                'path' => 'wrist_watches_men4.jpg',
            ],

            [
                'product_id' => 24,
                'path' => 'twin_bell_alarm_Clock1.jpg',
            ],
            [
                'product_id' => 24,
                'path' => 'twin_bell_alarm_Clock2.jpg',
            ],
            [
                'product_id' => 24,
                'path' => 'twin_bell_alarm_Clock3.jpg',
            ],
            [
                'product_id' => 24,
                'path' => 'twin_bell_alarm_Clock4.jpg',
            ],

            // Shirt

            [
                'product_id' => 25,
                'path' => 'sports_golf_polo_shirt1.png',
            ],
            [
                'product_id' => 25,
                'path' => 'sports_golf_polo_shirt2.png',
            ],
            [
                'product_id' => 25,
                'path' => 'sports_golf_polo_shirt3.png',
            ],
            [
                'product_id' => 25,
                'path' => 'sports_golf_polo_shirt4.png',
            ],

            [
                'product_id' => 26,
                'path' => 'Casual_Long_Sleeve1.jpg',
            ],
            [
                'product_id' => 26,
                'path' => 'Casual_Long_Sleeve2.jpg',
            ],
            [
                'product_id' => 26,
                'path' => 'Casual_Long_Sleeve3.jpg',
            ],
            [
                'product_id' => 26,
                'path' => '!Casual_Long_Sleeve4.jpg',
            ],

            [
                'product_id' => 27,
                'path' => 'Men_GYM_Slim_Fit_Face_Masked_T-shirt1.jpg',
            ],
            [
                'product_id' => 27,
                'path' => 'Men_GYM_Slim_Fit_Face_Masked_T-shirt2.jpg',
            ],
            [
                'product_id' => 27,
                'path' => 'Men_GYM_Slim_Fit_Face_Masked_T-shirt3.jpg',
            ],
            [
                'product_id' => 27,
                'path' => 'Men_GYM_Slim_Fit_Face_Masked_T-shirt4.jpg',
            ],

            [
                'product_id' => 28,
                'path' => 'mens_jackets1.jpg',
            ],
            [
                'product_id' => 28,
                'path' => 'mens_jackets2.jpg',
            ],
            [
                'product_id' => 28,
                'path' => 'mens_jackets3.jpg',
            ],
            [
                'product_id' => 28,
                'path' => 'mens_jackets4.jpg',
            ],

            [
                'product_id' => 29,
                'path' => 'detachable_hoodie1.jpg',
            ],
            [
                'product_id' => 29,
                'path' => 'detachable_hoodie2.jpg',
            ],
            [
                'product_id' => 29,
                'path' => 'detachable_hoodie3.jpg',
            ],
            [
                'product_id' => 29,
                'path' => 'detachable_hoodie4.jpg',
            ],

            [
                'product_id' => 30,
                'path' => 'Ao_dai_baby1.jpg',
            ],
            [
                'product_id' => 30,
                'path' => 'Ao_dai_baby2.jpg',
            ],
            [
                'product_id' => 30,
                'path' => 'Ao_dai_baby3.jpg',
            ],
            [
                'product_id' => 30,
                'path' => 'Ao_dai_baby4.jpg',
            ],

            [
                'product_id' => 31,
                'path' => 'Baby_boy_Gile_striped1.jpg',
            ],
            [
                'product_id' => 31,
                'path' => 'Baby_boy_Gile_striped2.jpg',
            ],
            [
                'product_id' => 31,
                'path' => 'Baby_boy_Gile_striped3.jpg',
            ],
            [
                'product_id' => 31,
                'path' => 'Baby_boy_Gile_striped4.jpg',
            ],

            [
                'product_id' => 32,
                'path' => 'Hawaiian_Shirt1.jpg',
            ],
            [
                'product_id' => 32,
                'path' => 'Hawaiian_Shirt2.jpg',
            ],
            [
                'product_id' => 32,
                'path' => 'Hawaiian_Shirt3.jpg',
            ],
            [
                'product_id' => 32,
                'path' => 'Hawaiian_Shirt4.jpg',
            ],

            [
                'product_id' => 33,
                'path' => 'Polo_Shirt1.jpg',
            ],
            [
                'product_id' => 33,
                'path' => 'Polo_Shirt2.jpg',
            ],
            [
                'product_id' => 33,
                'path' => 'Polo_Shirt3.jpg',
            ],
            [
                'product_id' => 33,
                'path' => 'Polo_Shirt4.jpg',
            ],

            [
                'product_id' => 34,
                'path' => 'polo_t-shirt1.jpg',
            ],
            [
                'product_id' => 34,
                'path' => 'polo_t-shirt2.jpg',
            ],
            [
                'product_id' => 34,
                'path' => 'polo_t-shirt3.jpg',
            ],
            [
                'product_id' => 34,
                'path' => 'polo_t-shirt4.jpg',
            ],

            [
                'product_id' => 35,
                'path' => 'shirts_for_men1.jpg',
            ],
            [
                'product_id' => 35,
                'path' => 'shirts_for_men2.jpg',
            ],
            [
                'product_id' => 35,
                'path' => 'shirts_for_men3.jpg',
            ],
            [
                'product_id' => 35,
                'path' => 'shirts_for_men4.jpg',
            ],

            [
                'product_id' => 36,
                'path' => 'men_polo_shirt1.jpg',
            ],
            [
                'product_id' => 36,
                'path' => 'men_polo_shirt2.jpg',
            ],
            [
                'product_id' => 36,
                'path' => 'men_polo_shirt3.jpg',
            ],
            [
                'product_id' => 36,
                'path' => 'men_polo_shirt4.jpg',
            ],

            //car

            [
                'product_id' => 37,
                'path' => 'chevrolet_menlo1.jpg',
            ],
            [
                'product_id' => 37,
                'path' => 'chevrolet_menlo2.jpg',
            ],
            [
                'product_id' => 37,
                'path' => 'chevrolet_menlo2.jpg',
            ],
            [
                'product_id' => 37,
                'path' => 'chevrolet_menlo4.jpg',
            ],

            [
                'product_id' => 38,
                'path' => 'G-HS1.jpg',
            ],
            [
                'product_id' => 38,
                'path' => 'G-HS2.jpg',
            ],
            [
                'product_id' => 38,
                'path' => 'G-HS3.jpg',
            ],
            [
                'product_id' => 38,
                'path' => 'G-HS4.png',
            ],

            [
                'product_id' => 39,
                'path' => 'vinfat1.jpg',
            ],
            [
                'product_id' => 39,
                'path' => 'vinfat2.jpg',
            ],
            [
                'product_id' => 39,
                'path' => 'vinfat3.jpg',
            ],
            [
                'product_id' => 39,
                'path' => 'vinfat4.jpg',
            ],

            [
                'product_id' => 40,
                'path' => 'vintage_car1.jpg',
            ],
            [
                'product_id' => 40,
                'path' => 'vintage_car2.jpg',
            ],
            [
                'product_id' => 40,
                'path' => 'vintage_car3.jpg',
            ],
            [
                'product_id' => 40,
                'path' => 'vintage_car4.jpg',
            ],

            [
                'product_id' => 41,
                'path' => 'Mercede_Benz1.jpg',
            ],
            [
                'product_id' => 41,
                'path' => 'Mercede_Benz2.jpg',
            ],
            [
                'product_id' => 41,
                'path' => 'Mercede_Benz3.jpg',
            ],
            [
                'product_id' => 41,
                'path' => 'Mercede_Benz4.jpg',
            ],

            [
                'product_id' => 42,
                'path' => 'TOYOTA_RAV1.jpg',
            ],
            [
                'product_id' => 42,
                'path' => 'TOYOTA_RAV2.jpeg',
            ],
            [
                'product_id' => 42,
                'path' => 'TOYOTA_RAV3.jpg',
            ],
            [
                'product_id' => 42,
                'path' => 'TOYOTA_RAV4.jpg',
            ],

            [
                'product_id' => 43,
                'path' => 'Toyota_Land-Cruise1.jpg',
            ],
            [
                'product_id' => 43,
                'path' => 'Toyota_Land-Cruise2.jpg',
            ],
            [
                'product_id' => 43,
                'path' => 'Toyota_Land-Cruise3.jpg',
            ],
            [
                'product_id' => 43,
                'path' => 'Toyota_Land-Cruise4.jpg',
            ],

            [
                'product_id' => 44,
                'path' => 'BMW_118I1.jpeg',
            ],
            [
                'product_id' => 44,
                'path' => 'BMW_118I2.jpg',
            ],
            [
                'product_id' => 44,
                'path' => 'BMW_118I3.jpg',
            ],
            [
                'product_id' => 44,
                'path' => 'BMW_118I4.jpg',
            ],

            [
                'product_id' => 45,
                'path' => 'Mercedes-Benz_E200_1018_1.jpg',
            ],
            [
                'product_id' => 45,
                'path' => 'Mercedes-Benz_E200_1018_2.jpg',
            ],
            [
                'product_id' => 45,
                'path' => 'Mercedes-Benz_E200_1018_3.jpg',
            ],
            [
                'product_id' => 45,
                'path' => 'Mercedes-Benz_E200_1018_4.jpg',
            ],

            [
                'product_id' => 46,
                'path' => 'Mercedes-Benz-G63-4.0-V8_2022-1.jpg',
            ],
            [
                'product_id' => 46,
                'path' => 'Mercedes-Benz-G63-4.0-V8_2022-2.jpg',
            ],
            [
                'product_id' => 46,
                'path' => 'Mercedes-Benz-G63-4.0-V8_2022-3.jpg',
            ],
            [
                'product_id' => 46,
                'path' => 'Mercedes-Benz-G63-4.0-V8_2022-4.jpg',
            ],

            [
                'product_id' => 47,
                'path' => 'Audi_A4-2019-1.jpg',
            ],
            [
                'product_id' => 47,
                'path' => 'Audi_A4-2019-2.jpg',
            ],
            [
                'product_id' => 47,
                'path' => 'Audi_A4-2019-3.jpg',
            ],
            [
                'product_id' => 47,
                'path' => 'Audi_A4-2019-4.jpg',
            ],

            [
                'product_id' => 48,
                'path' => 'Nissan_Navara1.jpg',
            ],
            [
                'product_id' => 48,
                'path' => 'Nissan_Navara2.jpg',
            ],
            [
                'product_id' => 48,
                'path' => 'Nissan_Navara3.jpg',
            ],
            [
                'product_id' => 48,
                'path' => 'Nissan_Navara4.jpg',
            ],

            //Houseware

            [
                'product_id' => 49,
                'path' => 'tivixiaomi1.jpg',
            ],
            [
                'product_id' => 49,
                'path' => 'tivixiaomi2.jpg',
            ],
            [
                'product_id' => 49,
                'path' => 'tivixiaomi3.jpg',
            ],
            [
                'product_id' => 49,
                'path' => 'tivixiaomi4.jpg',
            ],

            [
                'product_id' => 50,
                'path' => 'Smart_rice_cooker1.jpg',
            ],
            [
                'product_id' => 50,
                'path' => 'Smart_rice_cooker2.png',
            ],
            [
                'product_id' => 50,
                'path' => 'Smart_rice_cooker3.jpg',
            ],
            [
                'product_id' => 50,
                'path' => 'Smart_rice_cooker4.jpg',
            ],

            [
                'product_id' => 51,
                'path' => 'EC_electric_double_cooker1.jpg',
            ],
            [
                'product_id' => 51,
                'path' => 'EC_electric_double_cooker1.png',
            ],
            [
                'product_id' => 51,
                'path' => 'EC_electric_double_cooker2.jpg',
            ],
            [
                'product_id' => 51,
                'path' => 'EC_electric_double_cooker4.png',
            ],

            [
                'product_id' => 52,
                'path' => 'Refrigerator_Samsung1.png',
            ],
            [
                'product_id' => 52,
                'path' => 'Refrigerator_Samsung2.jpg',
            ],
            [
                'product_id' => 52,
                'path' => 'Refrigerator_Samsung3.jpg',
            ],
            [
                'product_id' => 52,
                'path' => 'Refrigerator_Samsung4.png',
            ],

            [
                'product_id' => 53,
                'path' => 'kitchen_Cabinets1.jpg',
            ],
            [
                'product_id' => 53,
                'path' => 'kitchen_Cabinets2.jpg',
            ],
            [
                'product_id' => 53,
                'path' => 'kitchen_Cabinets3.jpg',
            ],
            [
                'product_id' => 53,
                'path' => 'kitchen_Cabinets4.jpg',
            ],

            [
                'product_id' => 54,
                'path' => 'Bedroom_Wardrobes1.jpg',
            ],
            [
                'product_id' => 54,
                'path' => 'Bedroom_Wardrobes2.jpg',
            ],
            [
                'product_id' => 54,
                'path' => 'Bedroom_Wardrobes3.jpg',
            ],
            [
                'product_id' => 54,
                'path' => 'Bedroom_Wardrobes4.jpg',
            ],

            [
                'product_id' => 55,
                'path' => 'kitchen_range_hood1.jpg',
            ],
            [
                'product_id' => 55,
                'path' => 'kitchen_range_hood2.jpg',
            ],
            [
                'product_id' => 55,
                'path' => 'kitchen_range_hood3.jpg',
            ],
            [
                'product_id' => 55,
                'path' => 'kitchen_range_hood4.jpg',
            ],

            [
                'product_id' => 56,
                'path' => 'Air_Conditioner1.jpg',
            ],
            [
                'product_id' => 56,
                'path' => 'Air_Conditioner2.jpg',
            ],
            [
                'product_id' => 56,
                'path' => 'Air_Conditioner3.jpg',
            ],
            [
                'product_id' => 56,
                'path' => 'Air_Conditioner4.jpg',
            ],

            [
                'product_id' => 57,
                'path' => 'Philips_air_fryer1.jpg',
            ],
            [
                'product_id' => 57,
                'path' => 'Philips_air_fryer2.jpg',
            ],
            [
                'product_id' => 57,
                'path' => 'Philips_air_fryer3.jpg',
            ],
            [
                'product_id' => 57,
                'path' => 'Philips_air_fryer4.jpg',
            ],

            [
                'product_id' => 58,
                'path' => 'bladeless_tower_fan1.jpg',
            ],
            [
                'product_id' => 58,
                'path' => 'bladeless_tower_fan2.jpg',
            ],
            [
                'product_id' => 58,
                'path' => 'bladeless_tower_fan3.jpg',
            ],
            [
                'product_id' => 58,
                'path' => 'bladeless_tower_fan4.jpg',
            ],

            [
                'product_id' => 59,
                'path' => 'Hair_Dryer1.jpg',
            ],
            [
                'product_id' => 59,
                'path' => 'Hair_Dryer2.jpg',
            ],
            [
                'product_id' => 59,
                'path' => 'Hair_Dryer3.jpg',
            ],
            [
                'product_id' => 59,
                'path' => 'Hair_Dryer4.jpg',
            ],

            [
                'product_id' => 60,
                'path' => 'Table-top-water_heater1.jpg',
            ],
            [
                'product_id' => 60,
                'path' => 'Table-top-water_heater2.jpg',
            ],
            [
                'product_id' => 60,
                'path' => 'Table-top-water_heater3.jpg',
            ],
            [
                'product_id' => 60,
                'path' => 'Table-top-water_heater4.jpg',
            ],








        ]);


        DB::table('product_details')->insert([
            //Hand Bag
            [
                'product_id' => 1,
                'color' => 'black',
                'size' => '33*15*26',
                'qty' => 0,
            ],

            [
                'product_id' => 2,
                'color' => '4Colors',
                'size' => '33*15*24',
                'qty' => 0,
            ],

            [
                'product_id' => 3,
               'color' => '3Colors',
                'size' => '33*15*26',
                'qty' => 0,
            ],

            [
                'product_id' => 4,
                'color' => 'red',
                'size' => '34x31x14',
                'qty' => 0,
            ],

            [
                'product_id' => 5,
                'color' => 'black',
                'size' => '22X12X34',
                'qty' => 0,
            ],

            [
                'product_id' => 6,
                'color' => 'multicolor',
                'size' => 'm',
                'qty' => 0,
            ],

            [
                'product_id' => 7,
                'color' => 'multicolor',
                'size' => '4*25*25',
                'qty' => 0,
            ],

            [
                'product_id' => 8,
                'color' => 'red',
                'size' => '43*14*32',
                'qty' => 0,
            ],

            [
                'product_id' => 9,
                'color' => 'Black/Brown',
                'size' => '29*6*31',
                'qty' => 0,
            ],

            [
                'product_id' => 10,
                'color' => 'Customizable',
                'size' => '20X8X13',
                'qty' => 0,
            ],

            [
                'product_id' => 11,
                'color' => 'Customizable',
                'size' => '17X11X4.5',
                'qty' => 0,
            ],

            [
                'product_id' => 12,
                'color' => 'Customizable',
                'size' => '25*18*8.5',
                'qty' => 0,
            ],

            //Clock

            [
                'product_id' => 13,
                'color' => 'Customizable',
                'size' => '',
                'qty' => 0,
            ],

            [
                'product_id' => 14,
                'color' => 'Customizable',
                'size' => '53.5*7.5*53.5',
                'qty' => 0,
            ],

            [
                'product_id' => 15,
                'color' => 'Customizable',
                'size' => '39*45.3',
                'qty' => 0,
            ],

            [
                'product_id' => 16,
                'color' => 'Customizable',
                'size' => '',
                'qty' => 0,
            ],

            [
                'product_id' => 17,
                'color' => 'Customizable',
                'size' => '',
                'qty' => 0,
            ],

            [
                'product_id' => 18,
                'color' => 'Customizable',
                'size' => '',
                'qty' => 0,
            ],

            [
                'product_id' => 19,
                'color' => 'Customizable',
                'size' => '',
                'qty' => 0,
            ],

            [
                'product_id' => 20,
                'color' => 'black',
                'size' => '',
                'qty' => 0,
            ],

            [
                'product_id' => 21,
                'color' => 'gold',
                'size' => '',
                'qty' => 0,
            ],

            [
                'product_id' => 22,
                'color' => 'Customizable',
                'size' => '',
                'qty' => 0,
            ],

            [
                'product_id' => 23,
                'color' => 'Customizable',
                'size' => '',
                'qty' => 0,
            ],

            [
                'product_id' => 24,
                'color' => 'Customizable',
                'size' => '12.5',
                'qty' => 0,
            ],

            //Shirt

            [
                'product_id' => 25,
                'color' => 'Customizable',
                'size' => '3xl',
                'qty' => 0,
            ],

            [
                'product_id' => 26,
                'color' => 'Customizable',
                'size' => 's,m,xl,2xl,3xl',
                'qty' => 0,
            ],

            [
                'product_id' => 27,
                'color' => 'Customizable',
                'size' => 's,m,xl,2xl,3xl',
                'qty' => 0,
            ],

            [
                'product_id' => 28,
                'color' => 'Customizable',
                'size' => 's,m,xl,2xl,3xl',
                'qty' => 0,
            ],

            [
                'product_id' => 29,
                'color' => 'Customizable',
                'size' => 'l,xl,2xl',
                'qty' => 0,
            ],

            [
                'product_id' => 30,
                'color' => 'yellow',
                'size' => '2year->6year',
                'qty' => 0,
            ],

            [
                'product_id' => 31,
                'color' => 'Customizable',
                'size' => '3year->7year',
                'qty' => 0,
            ],

            [
                'product_id' => 32,
                'color' => 'pink',
                'size' => 'S,M,L,XL,2Xl',
                'qty' => 0,
            ],

            [
                'product_id' => 33,
                'color' => ' pink , black ,yellow',
                'size' => 'S,M,Xl,2Xl,3Xl',
                'qty' => 0,
            ],

            [
                'product_id' => 34,
                'color' => 'white,red',
                'size' => 'S,M,Xl,XXL',
                'qty' => 0,
            ],

            [
                'product_id' => 35,
                'color' => 'black,white,brown ',
                'size' => 'M,L,Xl,2XL,3XL',
                'qty' => 0,
            ],

            [
                'product_id' => 36,
                'color' => 'Customizable',
                'size' => 'XXS,XS,S,M,L,XL',
                'qty' => 0,
            ],


            //Car

            [
                'product_id' => 37,
                'color' => 'white',
                'size' => '4665x1813x1513mm',
                'qty' => 0,
            ],

            [
                'product_id' => 38,
                'color' => 'Customizable',
                'size' => '4950x1850x1650',
                'qty' => 0,
            ],

            [
                'product_id' => 39,
                'color' => 'Customizable',
                'size' => '4950x1850x1650',
                'qty' => 0,
            ],

            [
                'product_id' => 40,
                'color' => 'Customizable',
                'size' => '3950x1550x1250',
                'qty' => 0,
            ],

            [
                'product_id' => 41,
                'color' => 'blue',
                'size' => '4528x1840x1689',
                'qty' => 0,
            ],

            [
                'product_id' => 42,
                'color' => 'Customizable',
                'size' => '4528x1840x1689',
                'qty' => 0,
            ],

            [
                'product_id' => 43,
                'color' => 'Customizable',
                'size' => '4928x1940x1789',
                'qty' => 0,
            ],

            [
                'product_id' => 44,
                'color' => 'red',
                'size' => '4456x1803x1446',
                'qty' => 0,
            ],

            [
                'product_id' => 45,
                'color' => ' black',
                'size' => '4528x1840x1689',
                'qty' => 0,
            ],

            [
                'product_id' => 46,
                'color' => ' black',
                'size' => '4528x1840x1689',
                'qty' => 0,
            ],

            [
                'product_id' => 47,
                'color' => ' black',
                'size' => '4528x1840x1689',
                'qty' => 0,
            ],

            [
                'product_id' => 48,
                'color' => ' black',
                'size' => '4528x1840x1689',
                'qty' => 0,
            ],

            //Houseware

            [
                'product_id' => 49,
                'color' => 'black',
                'size' => '43 inch',
                'qty' => 0,
            ],

            [
                'product_id' => 50,
                'color' => 'black',
                'size' => '255x290x205',
                'qty' => 0,
            ],

            [
                'product_id' => 51,
                'color' => 'black',
                'size' => '680 x 400 x 81',
                'qty' => 0,
            ],

            [
                'product_id' => 52,
                'color' => 'black',
                'size' => '179.3x83.3x74',
                'qty' => 0,
            ],

            [
                'product_id' => 53,
                'color' => 'Customizable',
                'size' => '120*60*194',
                'qty' => 0,
            ],

            [
                'product_id' => 54,
                'color' => 'Customizable',
                'size' => '',
                'qty' => 0,
            ],

            [
                'product_id' => 55,
                'color' => 'Customizable',
                'size' => '960*560*505mm',
                'qty' => 0,
            ],

            [
                'product_id' => 56,
                'color' => 'Customizable',
                'size' => '',
                'qty' => 0,
            ],

            [
                'product_id' => 57,
                'color' => 'black',
                'size' => '403x315x307mm',
                'qty' => 0,
            ],

            [
                'product_id' => 58,
                'color' => 'Customizable',
                'size' => '',
                'qty' => 0,
            ],

            [
                'product_id' => 59,
                'color' => 'Customizable',
                'size' => '',
                'qty' => 0,
            ],

            [
                'product_id' => 60,
                'color' => 'Customizable',
                'size' => '275*298*397mm',
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

