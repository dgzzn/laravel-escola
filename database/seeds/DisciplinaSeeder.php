<?php

use Illuminate\Database\Seeder;

class DisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disciplinas')->insert(
            [
                ['nome' => 'Programação Orientado Objeto', 'curso_id'=> 1,],
                ['nome' => 'TCP/IP', 'curso_id'=> 2],
                ['nome' => 'BLABLABLA', 'curso_id'=> 3],
                ['nome' => 'Cálculo I', 'curso_id'=> 4],
                ['nome' => 'w/e', 'curso_id'=> 5],
                ['nome' => 'Marketing Digital', 'curso_id'=> 6],
                ['nome' => 'França', 'curso_id'=> 7],
            ]
        );
    }

}
