<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstornoProdutoModel extends Model
{
    protected $table = 'estorno_produto';

    protected $guard = ['id'];

    protected $fillable = [''];
    
}
