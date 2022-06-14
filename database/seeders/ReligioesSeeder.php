<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReligioesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('religioes')->insert(['nome' => 'Católica']);
        DB::table('religioes')->insert(['nome' => 'Evangélica']);
        DB::table('religioes')->insert(['nome' => 'Não tem religião']);
        DB::table('religioes')->insert(['nome' => 'Espírita']);
        DB::table('religioes')->insert(['nome' => 'Umbanda, candomblé ou outras religiões afro-brasileiras']);
        DB::table('religioes')->insert(['nome' => 'Outra']);
        DB::table('religioes')->insert(['nome' => 'Ateu']);
        DB::table('religioes')->insert(['nome' => 'Judaica']);
    }
}
