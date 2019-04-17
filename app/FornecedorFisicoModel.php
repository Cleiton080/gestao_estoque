<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FornecedorFisicoModel extends Model
{
    protected $table = 'fornecedor_fisico';

    protected $guard = ['cpf'];

    protected $fillable = ['cpf'];

    public $timestamps = false;
    
    public function fornecedor()
    {

    }
}
