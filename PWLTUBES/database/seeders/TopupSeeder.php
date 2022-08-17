<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TopupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('topups')->truncate();
        \DB::table('topups')->insert([
            [
                'id' => '1',
                'id_siswa' => '2',
                'id_bank' => '1',
                'nominal' => '600000',
                'status' => 'lunas',
            ],
            [
                'id' => '2',
                'id_siswa' => '3',
                'id_bank' => '2',
                'nominal' => '600000',
                'status' => 'pending',
            ],
            [
                'id' => '3',
                'id_siswa' => '4',
                'id_bank' => '3',
                'nominal' => '600000',
                'status' => 'lunas',
            ],
            [
                'id' => '4',
                'id_siswa' => '5',
                'id_bank' => '1',
                'nominal' => '600000',
                'status' => 'pending',
            ],
            [
                'id' => '5',
                'id_siswa' => '6',
                'id_bank' => '2',
                'nominal' => '600000',
                'status' => 'lunas',
            ],
            [
                'id' => '6',
                'id_siswa' => '7',
                'id_bank' => '3',
                'nominal' => '600000',
                'status' => 'pending',
            ],


            [
                'id' => '7',
                'id_siswa' => '7',
                'id_bank' => '1',
                'nominal' => '500000',
                'status' => 'lunas',
            ],
            [
                'id' => '8',
                'id_siswa' => '6',
                'id_bank' => '2',
                'nominal' => '500000',
                'status' => 'pending',
            ],
            [
                'id' => '9',
                'id_siswa' => '5',
                'id_bank' => '3',
                'nominal' => '500000',
                'status' => 'lunas',
            ],
            [
                'id' => '10',
                'id_siswa' => '4',
                'id_bank' => '1',
                'nominal' => '500000',
                'status' => 'pending',
            ],
            [
                'id' => '11',
                'id_siswa' => '3',
                'id_bank' => '2',
                'nominal' => '500000',
                'status' => 'lunas',
            ],
            [
                'id' => '12',
                'id_siswa' => '2',
                'id_bank' => '3',
                'nominal' => '500000',
                'status' => 'pending',
            ],
            
        ]);
    }
}
