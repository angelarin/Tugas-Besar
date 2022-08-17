<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('users')->truncate();
        \DB::table('users')->insert([
            [
                'id' => '1',
                'name' => 'Admin',
                'email' => 'admin123@contoh.com',
                'password' => bcrypt('admin123'),
                'pin' => NULL,
                'status' => 'admin',
            ],
            [
                'id' => '2',
                'name' => 'Karina Angela',
                'email' => 'karinaangelatobing@gmail.com',
                'password' => bcrypt('siswa123'),
                'pin' => '123456',
                'status' => 'siswa',
            ],
            [
                'id' => '3',
                'name' => 'Gery Jonathan',
                'email' => 'geryjonathan21@gmail.com',
                'password' => bcrypt('siswa123'),
                'pin' => '123456',
                'status' => 'siswa',
            ],
            [
                'id' => '4',
                'name' => 'Bagus Sadewo',
                'email' => 'bagus123@contoh.com',
                'password' => bcrypt('siswa123'),
                'pin' => '123456',
                'status' => 'siswa',
            ],
            [
                'id' => '5',
                'name' => 'Paulus Simon',
                'email' => 'paulussigalingging2803@gmail.com',
                'password' => bcrypt('siswa123'),
                'pin' => '123456',
                'status' => 'siswa',
            ],
            [
                'id' => '6',
                'name' => 'Jessica Larasty',
                'email' => 'ichameliala366@gmail.com',
                'password' => bcrypt('siswa123'),
                'pin' => '123456',
                'status' => 'siswa',
            ],
            [
                'id' => '7',
                'name' => 'Kevin Simamora',
                'email' => 'kevin123@contoh.com',
                'password' => bcrypt('siswa123'),
                'pin' => '123456',
                'status' => 'siswa',
            ],
        ]);
    }
}
