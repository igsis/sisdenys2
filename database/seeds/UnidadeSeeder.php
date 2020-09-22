<?php

use Illuminate\Database\Seeder;
use App\Models\Unidade;

class UnidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unidade::create([
            'nome' => 'Vergueiro',
            'logradouro' => 'Rua 15 de Maior',
            'numero' => '100',
            'bairro' => 'Centro',
            'cep' => '03664-030',
            'instituicao_id' => 1,
        ]);

        Unidade::create([
            'nome' => 'Biblioteca Afonso de Taunay',
            'logradouro' => 'Rua 1 de Abril',
            'numero' => '1',
            'bairro' => 'Centro',
            'cep' => '03456-020',
            'instituicao_id' => 2,
        ]);

        Unidade::create([
            'nome' => 'Biblioteca Castro Alves',
            'logradouro' => 'Rua 1 de Abril',
            'numero' => '1',
            'bairro' => 'Centro',
            'cep' => '03456-020',
            'instituicao_id' => 2,
        ]);
    }
}
