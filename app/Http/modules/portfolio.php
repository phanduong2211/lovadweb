<?php

namespace App\Http\modules;
use Illuminate\Database\Eloquent\Model;


class portfolio extends Model
{
    
    protected $table = 'portfolio';

    
    protected $fillable = ['name','images','contents','url','skills','namecustom'];

  
}
