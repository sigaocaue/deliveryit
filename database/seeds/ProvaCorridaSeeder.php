<?php

use Illuminate\Database\Seeder;

class ProvaCorridaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\CPrado\Models\ProvaCorrida::class, 20)->create();
    }
}
