<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'User1',
            'email' => 'admin@admin.com',
            'type' => 'Admin',
            'password' => bcrypt('password'),
        ]);
        DB::table('pain')->insert([
            'name' => 'Heart attack',
        ]);
        DB::table('pain')->insert([
            'name' => 'Slipped disc',
        ]);
        DB::table('pain')->insert([
            'name' => 'Broken bones',
        ]);
        DB::table('pain')->insert([
            'name' => 'Appendicitis',
        ]);
        DB::table('pain')->insert([
            'name' => 'CRPS—complex regional pain syndrome',
        ]);
    }
}
