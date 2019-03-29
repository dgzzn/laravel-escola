<?php

use Illuminate\Database\Seeder;

class alunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alunos')->insert(
            [
                ['nome' => 'José da Silva', 'matricula'=>2019001, 'telefone'=>'101020203030', 'email'=>'josesilva@email.com', 'data_nascimento'=>'2008-01-01 00:00:01'],
                ['nome' => 'Maria da Penha', 'matricula'=>2019002, 'telefone'=>'202030304040', 'email'=>'marinhapenha@email.com', 'data_nascimento'=>'2008-01-01 00:00:01'],
                ['nome' => 'Pedro Henrique', 'matricula'=>2019003, 'telefone'=>'404050506060', 'email'=>'pedroh@email.com', 'data_nascimento'=>'2008-01-01 00:00:01'],
                ['nome' => 'Mario Mario', 'matricula'=>2019004, 'telefone'=>'505060607070', 'email'=>'mariom@email.com', 'data_nascimento'=>'2008-01-01 00:00:01'],
                ['nome' => 'Luigi Mario', 'matricula'=>2019005, 'telefone'=>'606070708080', 'email'=>'luigim@email.com', 'data_nascimento'=>'2008-01-01 00:00:01'],
                ['nome' => 'Aleatório Random', 'matricula'=>2019006, 'telefone'=>'707080809090', 'email'=>'random@email.com', 'data_nascimento'=>'2008-01-01 00:00:01'],
            ]
        );
    }
}
