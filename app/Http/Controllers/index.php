<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;
 class index extends Controller
{
    public function getindex()
    {
        $service = servicecontroller::get();
        $convert = new convertString();
        $side = sidecontroller::getside();
        $categoryprtfolio = categoryportfoliocontroller::get(); 
       $portfolio = portfoliocontroller::get();
       $members=membercontroller::get();
       $idcategoryprtfolio = new categoryportfoliocontroller();
    	return View::make('index',array("categoryprtfolio"=>$categoryprtfolio,"service"=>$service
            ,"portfolio"=>$portfolio,"members"=>$members,"idcategoryprtfolio"=>$idcategoryprtfolio,"side"=>$side,"convert"=>$convert));
    }
}
