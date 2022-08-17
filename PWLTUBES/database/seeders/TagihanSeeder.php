<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('tagihans')->truncate();
        \DB::table('tagihans')->insert([
            [
                'id' => '1',
                'id_siswa' => '3',
                'id_kegiatan' => '5',
                'total_tagihan' => '10000',
            ],
            [
                'id' => '2',
                'id_siswa' => '2',
                'id_kegiatan' => '5',
                'total_tagihan' => '10000',
            ],
            [
                'id' => '3',
                'id_siswa' => '1',
                'id_kegiatan' => '5',
                'total_tagihan' => '10000',
            ],
            [
                'id' => '4',
                'id_siswa' => '4',
                'id_kegiatan' => '5',
                'total_tagihan' => '10000',
            ],
            [
                'id' => '5',
                'id_siswa' => '5',
                'id_kegiatan' => '5',
                'total_tagihan' => '10000',
            ],
            [
                'id' => '6',
                'id_siswa' => '6',
                'id_kegiatan' => '5',
                'total_tagihan' => '10000',
            ],
            [
                'id' => '7',
                'id_siswa' => '4',
                'id_kegiatan' => '4',
                'total_tagihan' => '75000',
            ],
            [
                'id' => '8',
                'id_siswa' => '7',
                'id_kegiatan' => '4',
                'total_tagihan' => '75000',
            ],
            [
                'id' => '9',
                'id_siswa' => '2',
                'id_kegiatan' => '3',
                'total_tagihan' => '40000',
            ],
            [
                'id' => '10',
                'id_siswa' => '3',
                'id_kegiatan' => '3',
                'total_tagihan' => '40000',
            ],
            [
                'id' => '11',
                'id_siswa' => '4',
                'id_kegiatan' => '3',
                'total_tagihan' => '40000',
            ],
            [
                'id' => '12',
                'id_siswa' => '2',
                'id_kegiatan' => '1',
                'total_tagihan' => '20000',
            ],
            [
                'id' => '13',
                'id_siswa' => '3',
                'id_kegiatan' => '1',
                'total_tagihan' => '20000',
            ],
            [
                'id' => '14',
                'id_siswa' => '5',
                'id_kegiatan' => '1',
                'total_tagihan' => '20000',
            ],
            [
                'id' => '15',
                'id_siswa' => '6',
                'id_kegiatan' => '1',
                'total_tagihan' => '20000',
            ],
            [
                'id' => '16',
                'id_siswa' => '5',
                'id_kegiatan' => '2',
                'total_tagihan' => '50000',
            ],
        ]);
    }
}
