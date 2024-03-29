<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('DISABILITANDO AS FOREIGNS KEYS, PARA PODER DAR UM TRUNCATE.');
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        $this->command->info('Seed de Corridas');
        \CPrado\Models\ProvaCorrida::truncate();
        $this->call(ProvaCorridaSeeder::class);

        $this->command->info('Seed de Corredor');
        \CPrado\Models\Corredor::truncate();
        $this->call(CorredoresSeeder::class);

        $this->command->info('Criando os Usuario dos Corredor');
        \CPrado\Models\Usuario::truncate();
        $this->call(UsuariosSeeder::class);

        $this->command->info('Colocando os corredores em provas');
        \CPrado\Models\CorredorProva::truncate();
        $this->call(CorredoresProvasSeeder::class);

        $this->command->info('Colocando resultado nas provas ja realizadas');
        \CPrado\Models\ResultadoProva::truncate();
        $this->call(CorredoresProvasResultadoSeeder::class);

        $this->command->info('---------Finalizado o db:seed---------');
        $this->command->info('HABILITANDO AS FOREIGNS KEYS NOVAMENTE');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
