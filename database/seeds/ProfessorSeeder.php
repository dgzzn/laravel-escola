<?php

use Illuminate\Database\Seeder;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professores')->insert(
            [
                ['nome' => 'Jão Matemático', 'matricula'=>2019001,'cpf'=>'123456', 'telefone'=>'101020203030', 'email'=>'josesilva@email.com', 'cep'=>'72200889'],
                ['nome' => 'Ronaldo Treze', 'matricula'=>2019002,'cpf'=>'1220856', 'telefone'=>'202030304040', 'email'=>'marinhapenha@email.com', 'cep'=>'72200889'],
                ['nome' => 'Marcos Lousa', 'matricula'=>2019003,'cpf'=>'97456', 'telefone'=>'404050506060', 'email'=>'pedroh@email.com', 'cep'=>'72200889'],
                ['nome' => 'Cascata Lol', 'matricula'=>2019004,'cpf'=>'176456', 'telefone'=>'505060607070', 'email'=>'mariom@email.com', 'cep'=>'72200889'],
                ['nome' => 'Lucas Tantofaz', 'matricula'=>2019005,'cpf'=>'157656', 'telefone'=>'606070708080', 'email'=>'luigim@email.com', 'cep'=>'72200889'],
                ['nome' => 'Roberto Queisso', 'matricula'=>2019006,'cpf'=>'456256', 'telefone'=>'707080809090', 'email'=>'random@email.com', 'cep'=>'72200889'],
            ]
        );
    }
}
