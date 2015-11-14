<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;
use App\Http\modules\planweb;
use Illuminate\Database\Eloquent\Model;
 class planwebcontroller extends Controller
{
    public static function insert()
    {
        $planweb = new planweb();
    	$data=array('name'=>"Gói theo yêu cầu","price"=>"giá liên hệ","setup"=>"Free setup","support"=>"24/7 support");
        $planweb->fill($data);
    	$planweb->save();
    }

    public static function get()
    {
        $planweb = planweb::get();
        return $planweb;
    }
}
