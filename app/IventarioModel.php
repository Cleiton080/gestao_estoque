<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IventarioModel extends Model
{
    protected $table = 'iventario';

    protected $guard = ['id'];

    protected $fillable = [''];

    
    public function produtos()
    {

    }
}
