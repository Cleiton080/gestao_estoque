<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados = [
            'AC' => 'Acre', 'AM' => 'Amazonas', 'RR' => 'Roraima', 'AP' => 'Amapá', 'PA' => 'Pará', 'RO' => 'Rodônia', 'TO' => 'Tocantins',
            'MT' => 'Mato Grosso', 'MS' => 'Mato Grosso do Sul', 'GO' => 'Goiás', 'DF' => 'Distrito Federal', 'MA' => 'Maranhão',
            'PI' => 'Piuaí', 'CE' => 'Ceará', 'RN' => 'Rio Grande do Norte', 'PB' => 'Paraíba', 'PR' => 'Pernanbuco', 'AL' => 'Alagoas',
            'SE' => 'Sergipe', 'BA' => 'Bahia', 'MG' => 'Minas Gerais', 'SP' => 'São Paulo', 'RJ' => 'Rio de Janeiro', 'ES' => 'Espírito Santo',
            'PR' => 'Paraná', 'SC' => 'Santa Catarina', 'RS' => 'Rio Grande do Sul'
        ];

        foreach($estados as $uf => $estado):
            DB::table('estado')->insert(['uf' => $uf, 'estado' => $estado]);
        endforeach;
    }
}
