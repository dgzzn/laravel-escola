<?php

use Illuminate\Database\Seeder;

class municipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipios')->insert(
            [
                ['nome' => 'São Paulo', 'uf_id' => 1],
                ['nome' => 'Rio de Janeiro', 'uf_id' => 2],
                ['nome' => 'Brasília', 'uf_id' => 3],

            ]
        );

    }
}
