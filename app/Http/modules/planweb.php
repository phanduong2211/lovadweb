<?php

namespace App\Http\modules;
use Illuminate\Database\Eloquent\Model;


class planweb extends Model
{
    
    protected $table = 'planweb';

    
    protected $fillable = ['name','price','setup','support','details'];

  
}
