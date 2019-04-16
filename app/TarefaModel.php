<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TarefaModel extends Model
{
    protected $table = 'tarefa';

    protected $guard = ['id'];

    protected $fillable = [''];
    
}
