<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermissaoModel extends Model
{
    protected $table = 'permissao';

    protected $guard = ['id'];

    protected $fillable = [''];
    
}
