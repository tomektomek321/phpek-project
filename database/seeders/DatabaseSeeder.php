<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
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

        for($i=0; $i <= 10; $i++)  {
            DB::table('users')->insert([
                'id' => null,
                'name' => 'tomek'.$i,
                'email' => 'tomek'.$i.'@test.com',
                'username' => 'tomek'.$i,
                'password' => Hash::make('tomektomek'.$i)
            ]);
        }



        DB::table('posts')->insert([
            'id' => null,
            'user_id' => 1,
            'title' => 'spredam rower',
            'description' => 'nowy rowerek 26cali',
            'price' => 100,
            'created_at' => '2020-10-26 20:36:57',
            'updated_at' => '2020-10-26 20:36:57',
        ]);

        DB::table('posts')->insert([
            'id' => null,
            'user_id' => 1,
            'title' => 'spredam rower22',
            'description' => 'nowy rowerek 26cali22',
            'price' => 100,
            'created_at' => '2020-10-26 20:36:57',
            'updated_at' => '2020-10-26 20:36:57',
        ]);

        DB::table('posts')->insert([
            'id' => null,
            'user_id' => 2,
            'title' => 'spredam rower33',
            'description' => 'nowy rowerek 26cali33',
            'price' => 100,
            'created_at' => '2020-10-26 20:36:57',
            'updated_at' => '2020-10-26 20:36:57',
        ]);

        DB::table('posts')->insert([
            'id' => null,
            'user_id' => 2,
            'title' => 'spredam rower44',
            'description' => 'nowy rowerek 26cali44',
            'price' => 100,
            'created_at' => '2020-10-26 20:36:57',
            'updated_at' => '2020-10-26 20:36:57',
        ]);
    }
}
