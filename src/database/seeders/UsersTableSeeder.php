<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            //Admin (0)

            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123'),
                'role' => '0',
                'status' => 'active',
            ],
            //Vendor(1)
            [
                'name' => 'Simonas Vendor',
                'username' => 'Simonas',
                'email' => 'vendor@gmail.com',
                'password' => Hash::make('123'),
                'role' => '1',
                'status' => 'active',
            ],
            //User(2)
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('123'),
                'role' => '2',
                'status' => 'active',
            ],


        ]);


    }
}