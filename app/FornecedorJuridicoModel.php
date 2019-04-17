<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FornecedorJuridicoModel extends Model
{
    protected $table = 'fornecedor_juridico';

    protected $guard = ['cnpj'];

    protected $fillable = ['cnpj', 'razao_social'];

    public $timestamps = false;

    public function fornecedor()
    {

    }
}
