<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;
use App\Http\modules\portfolio;
use Illuminate\Database\Eloquent\Model;
 class portfoliocontroller extends Controller
{
    public static function insert()
    {   	
        $portfolio = new portfolio();
        $data=array("name"=>"name portfolio","images"=>"images","contents"=>"some thing contents","url"=>"http://example.com"
            ,"namecustom"=>"name customer","skills"=>"css, html, jquery");
        $portfolio->fill($data);
        $portfolio->save();
    }

    public static function get()
    {       
        $portfolio = new portfolio();        
        return $portfolio->get();
    }
}
