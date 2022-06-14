<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InteressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('interesses')->insert(['nome' => 'Ler']);
        DB::table('interesses')->insert(['nome' => 'Escrever']);
        DB::table('interesses')->insert(['nome' => 'Cozinhar']);
        DB::table('interesses')->insert(['nome' => 'Esportes']);
        DB::table('interesses')->insert(['nome' => 'Tocar instrumentos musicais']);
        DB::table('interesses')->insert(['nome' => 'Atividades artísticas']);
        DB::table('interesses')->insert(['nome' => 'Meditação']);
        DB::table('interesses')->insert(['nome' => 'Viagens']);
        DB::table('interesses')->insert(['nome' => 'Decoração']);
        DB::table('interesses')->insert(['nome' => 'Marcenaria']);
        DB::table('interesses')->insert(['nome' => 'Jardinagem']);
        DB::table('interesses')->insert(['nome' => 'Natureza']);
        DB::table('interesses')->insert(['nome' => 'Música']);
        DB::table('interesses')->insert(['nome' => 'Fotografia']);
        DB::table('interesses')->insert(['nome' => 'Causas sociais']);
        DB::table('interesses')->insert(['nome' => 'Línguas estrangeiras']);
        DB::table('interesses')->insert(['nome' => 'Artes plásticas']);
        DB::table('interesses')->insert(['nome' => 'Cinema/teatro']);
        DB::table('interesses')->insert(['nome' => 'Poesia']);
    }
}
