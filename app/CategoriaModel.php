<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    protected $table = 'categoria';

    protected $guard = ['id'];

    protected $fillable = ['nome', 'descricao'];

    
    public function produtos()
    {
        $this->belongsTo(ProdutoModel::class);
    }
}
