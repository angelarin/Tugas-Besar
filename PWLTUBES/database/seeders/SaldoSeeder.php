<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SaldoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('saldos')->truncate();
        \DB::table('saldos')->insert([
            [
                'id' => '1',
                'id_siswa' => '2',
                'saldo' => '530000',
            ],
            [
                'id' => '2',
                'id_siswa' => '3',
                'saldo' => '430000',
            ],
            [
                'id' => '3',
                'id_siswa' => '4',
                'saldo' => '475000',
            ],
            [
                'id' => '4',
                'id_siswa' => '5',
                'saldo' => '420000',
            ],
            [
                'id' => '5',
                'id_siswa' => '6',
                'saldo' => '570000',
            ],
            [
                'id' => '6',
                'id_siswa' => '7',
                'saldo' => '415000',
            ],
        ]);
    }
}