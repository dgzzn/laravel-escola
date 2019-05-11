<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CursoSeeder::class);
        $this->call(DisciplinaSeeder::class);
        $this->call(alunoSeeder::class);
        $this->call(ProfessorSeeder::class);
        $this->call(turmaSeeder::class);
        $this->call(turmaalunoSeeder::class);
        $this->call(UfSeeder::class);
        $this->call(municipioSeeder::class);
    }
}
