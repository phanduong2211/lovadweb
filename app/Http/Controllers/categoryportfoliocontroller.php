<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;
use App\Http\modules\categoryportfolio;
use Illuminate\Database\Eloquent\Model;
 class categoryportfoliocontroller extends Controller
{
    public static function insert()
    {   	
        $categoryportfolio = new categoryportfolio();
        $data=array("name"=>"Camera");
        $categoryportfolio->fill($data);
        $categoryportfolio->save();
    }

    public static function get()
    {   	
       $categoryportfolio = new categoryportfolio();        
        return $categoryportfolio->get();
    }

    public function find($id)
    {   	
       $categoryportfolio = categoryportfolio::find($id);        
        return $categoryportfolio;
    }
}
