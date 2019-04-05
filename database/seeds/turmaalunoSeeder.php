<?php

use Illuminate\Database\Seeder;

class turmaalunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('turma_alunos')->insert([
            ['turma_id' => 1, 'aluno_id'=>1, 'semestre'=>1],
            ['turma_id' => 2, 'aluno_id'=>2, 'semestre'=>1],
            ['turma_id' => 3, 'aluno_id'=>3, 'semestre'=>1],
            ['turma_id' => 3, 'aluno_id'=>4, 'semestre'=>1],
            ['turma_id' => 2, 'aluno_id'=>5, 'semestre'=>1],
            ['turma_id' => 1, 'aluno_id'=>6, 'semestre'=>1]
                ]
        );
    }
}
