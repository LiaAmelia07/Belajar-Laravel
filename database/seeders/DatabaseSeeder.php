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
        $this->call(PostsTableSeeder::class);
        $this->call(BarangsTableSeeder::class);
        $this->call(PembelisTableSeeder::class);
        $this->call(PEmbeliansTableSeeder::class);
        $this->call(PesanansTableSeeder::class);
        $this->call(SupliersTableSeeder::class);
    }
}
