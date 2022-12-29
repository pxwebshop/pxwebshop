<?php

namespace Database\Seeders;

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
        //
        $data = [
            [
                'username' => 'username1',
                'password' => bcrypt('12345'),
            ],
            [
                'username' => 'username2',
                'password' => bcrypt('12345'),
            ],
            [
                'username' => 'admin',
                'password' => bcrypt('admin!@#123'),
            ],
        ];

        \DB::table('users')->insert($data);

        $data1 = [
            [
                'name' => 'Danh muc du lich',
                'slug' => 'danh-muc-du-lich',
                'description' => 'desciption',
            ],
            [
                'name' => 'Danh muc ẩm thực',
                'slug' => 'danh-muc-am-thuc',
                'description' => 'desciption',
            ],
            [
                'name' => 'Danh muc blockchain',
                'slug' => 'danh-muc-blockchain',
                'description' => 'desciption',
            ],
        ];

        \DB::table('categories')->insert($data1);
    }
}
