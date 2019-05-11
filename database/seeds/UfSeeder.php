<?php

use Illuminate\Database\Seeder;

class UfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ufs')->insert(
            [
                ['sigla'=> 'SP', 'nome' => 'São Paulo'],
                ['sigla'=> 'RJ', 'nome' => 'Rio de Janeiro'],
                ['sigla'=> 'DF', 'nome' => 'Distrito Federal'],
            ]
        );
    }
}
