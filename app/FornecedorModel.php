<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FornecedorModel extends Model
{
    use SoftDeletes;

    protected $table = 'fornecedor';

    protected $guard = ['id'];

    protected $fillable = ['nome', 'descricao', 'imagem', 'fornecedor'];


    public function contato()
    {
        return $this->hasOne(ContatoModel::class, 'fornecedor');
    }

    public function endereco()
    {
        return $this->hasOne(EnderecoModel::class, 'fornecedor');
    }

    public function fisico()
    {

    }

    public function juridico()
    {
        
    }
}
