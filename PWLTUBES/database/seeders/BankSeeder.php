<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('banks')->truncate();
        \DB::table('banks')->insert([
            [
                'id' => '1',
                'nama_bank' => 'Mandiri',
            ],
            [
                'id' => '2',
                'nama_bank' => 'BCA',
            ],
            [
                'id' => '3',
                'nama_bank' => 'BNI',
            ],
        ]);
    }
}