<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;
use App\Http\modules\address;
use Illuminate\Database\Eloquent\Model;
 class addresscontroller extends Controller
{
    public static function insert()
    {   	
        $address = new address();
        $data=array("address"=>"11 Số 38, Hiệp Bình Chánh, Thủ Đức, Hồ Chí Minh, Việt Nam","maps"=>"chua co maps","email"=>"info@lovadweb.com","facebookpage"=>"http://facebook.com/pages"
            ,"youtubepage"=>"http://youtube.com/pages","googlepage"=>"http://google.com/pages","twitterpage"=>"http://twitter.com/pages");
        $address->fill($data);
        $address->save();
    }

    public static function get()
    {       
        $address = new address();        
        return $address->get();
    }
}
