<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create default user's
        DB::table('users')->insert([
            [
                'name' => 'admin user',
                'username' => 'admin-user',
                'phone' => '01833086035',
                'role' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'vendor user',
                'username' => 'vendor-user',
                'phone' => '01833086035',
                'role' => 'vendor',
                'email' => 'vendor@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'user',
                'username' => 'user',
                'phone' => '01833086035',
                'role' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('password'),
            ],
        ]);
    }
}
