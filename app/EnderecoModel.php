<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnderecoModel extends Model
{
    protected $table = 'endereco';

    protected $guard = ['id'];

    protected $fillable = [''];


    public function postomon($cep)
    {

    }
}
