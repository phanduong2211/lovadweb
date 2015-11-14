<?php

namespace App\Http\modules;
use Illuminate\Database\Eloquent\Model;


class address extends Model
{
    
    protected $table = 'address';

    
    protected $fillable = ['address','phone','email','maps','facebookpage','youtubepage','googlepage','twitterpage'];

  
}
