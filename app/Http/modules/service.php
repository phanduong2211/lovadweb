<?php

namespace App\Http\modules;
use Illuminate\Database\Eloquent\Model;


class service extends Model
{
    
    protected $table = 'service';

    
    protected $fillable = ['name','images','contents','details'];

  
}
