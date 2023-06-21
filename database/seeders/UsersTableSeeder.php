<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'username'=>'admin',
                'email' => 'admin@gmail.com',
                'password'=>Hash::make('111'),
                'role'=>'admin',
                'status'=>'active',
            ],
            [
                'name' => 'Teacher',
                'username'=>'teacher',
                'email' => 'teacher@gmail.com',
                'password'=>Hash::make('222'),
                'role'=>'teacher',
                'status'=>'active',
            ],
            [
                'name' => 'Student',
                'username'=>'student',
                'email' => 'student@gmail.com',
                'password'=>Hash::make('333'),
                'role'=>'student',
                'status'=>'active',
            ]
        ]);
    }
}
