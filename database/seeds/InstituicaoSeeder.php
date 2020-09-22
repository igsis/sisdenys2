<?php

use Illuminate\Database\Seeder;
use App\Models\Instituicao;

class InstituicaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Instituicao::create([
                'nome' => 'Secretaria Municipal de Cultura',
                'sigla' => 'SMC'
        ]);

        Instituicao::create([
                'nome' => 'Coordenação do Sistema Municipal de Bibliotecas',
                'sigla' => 'CSMB'
        ]);

        Instituicao::create([
                'nome' => 'Centro Cultural São Paulo',
                'sigla' => 'CCSP'
        ]);

        Instituicao::create([
            'nome' => 'Biblioteca Mário de Andrade',
            'sigla' => 'BMA'
        ]);

        Instituicao::create([
            'nome' => 'Centro Cultural da Juventude',
            'sigla' => 'CCJ'
        ]);
    }
}
