<?php

use Illuminate\Database\Seeder;

class turmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('turmas')->insert(
            [
            ['disciplina_id' => 1, 'professor_id'=>1],
            ['disciplina_id' => 2, 'professor_id'=>1],
            ['disciplina_id' => 3, 'professor_id'=>1],
            ['disciplina_id' => 1, 'professor_id'=>2],
            ['disciplina_id' => 2, 'professor_id'=>1],
            ['disciplina_id' => 3, 'professor_id'=>3]
            ]
        );
    }
}
