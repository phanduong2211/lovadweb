<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;
use App\Http\modules\menu;
use Illuminate\Database\Eloquent\Model;
 class masterpage extends Controller
{
    public static function getMenu()
    {
    	/*$menu = new menu();
    	$menu->get();*/
    	$menu=menu::get();
    	return $menu;
    }
}
