<?php

namespace App\Http\modules;
use Illuminate\Database\Eloquent\Model;


class members extends Model
{
    
    protected $table = 'members';

    
    protected $fillable = ['name','position','images','facebook','skype','phone','skills'];

  
}
