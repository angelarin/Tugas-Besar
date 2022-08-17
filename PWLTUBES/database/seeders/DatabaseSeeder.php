<?php

namespace Database\Seeders;

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
        $this->call(UserSeeder::class);
        $this->call(BankSeeder::class);
        $this->call(SaldoSeeder::class);
        $this->call(TopupSeeder::class);
        $this->call(KegiatanSeeder::class);
        $this->call(TagihanSeeder::class);
    }
}
