<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContatoModel extends Model
{
    protected $table = 'contato';

    protected $guard = ['id'];

    protected $fillable = ['telefone', 'celular', 'email', 'fornecedor'];

    public $timestamps = false;
}
