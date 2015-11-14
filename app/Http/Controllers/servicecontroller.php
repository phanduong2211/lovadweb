<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;
use App\Http\modules\service;
use Illuminate\Database\Eloquent\Model;
 class servicecontroller extends Controller
{
    public function insert()
    {
        $service = new service();
    	$data=array('name'=>"Thiết kế web","images"=>"imgages","contents"=>"","details"=>"");
        $service->fill($data);
    	$service->save();
    }

    public static function get()
    {
        $service = service::get();
        return $service;
    }
}
