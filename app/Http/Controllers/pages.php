<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;
use App\Http\modules\pagesModule;
 class pages extends Controller
{
    public function getpage($name)
    {
    	$name=explode(".",$name)[0];
    	$address = addresscontroller::get();
    	$pages = pagesModule::findname($name);  
    	return View::make('sidepages',array("address"=>$address[0],"pages"=>$pages[0]));
    }

   
}
