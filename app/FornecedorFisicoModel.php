<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FornecedorFisicoModel extends Model
{
    protected $table = 'endereco_fisico';

    protected $guard = ['cpf'];

    protected $fillable = [''];

    
    public function fornecedor()
    {

    }
}
