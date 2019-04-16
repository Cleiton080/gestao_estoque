<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FornecedorJuridicoModel extends Model
{
    protected $table = 'endereco_juridico';

    protected $guard = ['cnpj'];

    protected $fillable = [''];

    
    public function fornecedor()
    {

    }
}
