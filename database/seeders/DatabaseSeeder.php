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
         \App\Models\users::factory(10)->create();
         \App\Models\provinsi::factory(10)->create();
         \App\Models\kota::factory(10)->create();
         \App\Models\kategori_bencana::factory(10)->create();
         \App\Models\role::factory(10)->create();



    }
}
