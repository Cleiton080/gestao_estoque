<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{
    protected $table = 'produto';

    protected $guard = ['id'];

    protected $fillable = [''];


    public function categorias()
    {

    }

    public function fornecedor()
    {
        
    }
}
