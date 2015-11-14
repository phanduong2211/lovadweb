<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;
use App\Http\modules\members;
use Illuminate\Database\Eloquent\Model;
 class membercontroller extends Controller
{
    public static function insert()
    {   	
        $members = new members();
        $data=array("name"=>"your name","images"=>"images","contents"=>"some thing contents","position"=>"supporter"
            ,"facebook"=>"your facebook","skype"=>"your skype","skills"=>"css, html, jquery");
        $members->fill($data);
        $members->save();
    }

    public static function get()
    {       
        $members = new members();        
        return $members->get();
    }
}
