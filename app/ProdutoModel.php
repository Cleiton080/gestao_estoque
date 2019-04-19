<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{
    protected $table = 'produto';

    protected $guard = ['id'];

    protected $fillable = ['codigo_barras', 'nome', 'marca', 'descricao', 'grade_x', 'grade_y',
                           'ncm', 'valor_pago', 'valor_venda', 'quantidade', 'quantidade_min',
                           'imagem', 'fornecedor'];


    public function categorias()
    {
        return $this->hasMany(CategoriaModel::class, 'categoria');
    }

    public function fornecedor()
    {
        
    }
}
