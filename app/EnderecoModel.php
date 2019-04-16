<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnderecoModel extends Model
{
    protected $table = 'endereco';

    protected $guard = ['id'];

    protected $fillable = ['cep', 'logradouro', 'bairro', 'cidade', 'estado', 'fornecedor'];

    public $timestamps = false;


    public function postmon($cep)
    {
        $endereco = file_get_contents('https://api.postmon.com.br/v1/cep/'.$cep);

        return (array) json_decode($endereco);
    }
}
