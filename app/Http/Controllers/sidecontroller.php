<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;
use App\Http\modules\sideModule;
use Illuminate\Database\Eloquent\Model;
 class sidecontroller extends Controller
{
    public static function getside()
    {
        $side = new sideModule();
        return $side->get();    	
    }
}
