<?php

namespace App\Http\modules;
use Illuminate\Database\Eloquent\Model;


class sideModule extends Model
{
    
    protected $table = 'sideshow';

    
    protected $fillable = ['images', 'name', 'contents','details'];

  
}
