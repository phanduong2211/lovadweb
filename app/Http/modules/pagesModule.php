<?php

namespace App\Http\modules;
use Illuminate\Database\Eloquent\Model;
use DB;
class pagesModule extends Model
{
    
    protected $table = 'pages';

    
    protected $fillable = ['name','details','title','keyword','description'];
    public static function findname($name)
    {
    	return DB::table('pages')->where('name','=',$name)->get();
    }
  
}
