<?php

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
        DB::table('users')->insert([
            'name' => 'Phạm Quang Linh',
            'email' =>'linh2002gv@gmail.com',
            'password' => Hash::make('0302242462'),
            'role' => 0
        ]);
        DB::table('users')->insert([
            'name' => 'Người đăng bài',
            'email' =>'User@gmail.com',
            'password' => Hash::make('0302242462'),
            'role' => 1
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Son',
        ]);

        DB::table('products')->insert([
                'name' => 'Son mẫu',
                'user_id' => 2,
                'category_id' => 1,
                'price' => '10000',
                'old_price' => '200.000 đ',
                'thumbnail' => 'https://myphamchat.com/wp-content/uploads/2019/01/black-rouge-air-fit-velvet-tint-tk.jpg',
                'discout' => '50',
                'html_content' => '<h1>SON EXPAM</h1>'
        ]);

    }
}
