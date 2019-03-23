<?php

use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert(
            [
                ['nome' => 'ADS', 'duracao'=> 3,],
                ['nome' => 'Redes', 'duracao'=> 3],
                ['nome' => 'Direito', 'duracao'=> 5],
                ['nome' => 'Engenharia Civil', 'duracao'=> 5],
                ['nome' => 'Enfermagem', 'duracao'=> 4],
                ['nome' => 'Administração', 'duracao'=> 4],
                ['nome' => 'Gastronomia', 'duracao'=> 3],
            ]
        );
    }
}
