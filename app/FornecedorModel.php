<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FornecedorModel extends Model
{
    use SoftDeletes;

    protected $table = 'fornecedor';

    protected $guard = ['id'];

    protected $fillable = [''];


    public function contato()
    {

    }

    public function endereco()
    {

    }

    public function fisico()
    {

    }

    public function juridico()
    {
        
    }
}
