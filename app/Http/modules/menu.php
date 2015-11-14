<?php

namespace App\Http\modules;
use Illuminate\Database\Eloquent\Model;


class menu extends Model
{
    
    protected $table = 'menu';

    
    protected $fillable = ['name','root'];

  
}
