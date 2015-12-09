<?php
	/**
	* 
	*/
	namespace App\Http\Controllers\admin;
	use App\User;
	use App\Http\Controllers\Controller;
	use View;
	use DB;
	use Input;
	use Session;
	use Redirect;
	class products extends Controller
	{
		public function insert()
		{
			
			try{
					$status=Input::get('status');
					if($status=='hide')
						$status=false;
					else
						$status=true;

						$data=array("name"=>Input::get('name'),"note"=>Input::get('note'),"url"=>Input::get('url'),"price"=>Input::get('price'),
						"promotion_price"=>Input::get('promotion-price'),"status"=>$status,"detail"=>Input::get('detail'),"img"=>Input::get('image'),"imgs"=>"","id_menu"=>Input::get('category'),
						"tag"=>strtoupper(Input::get('tag')),"keyword"=>Input::get('keyword'),"description"=>Input::get('description'));

						
						$tag=explode(",",Input::get('tag'));
						for($i=0;$i < count($tag);$i++)
						{
							$tag_data=DB::table('tag')->where("name","=",strtoupper($tag[$i]))->get();
							if($tag_data==null)
							{
								DB::table('tag')->insert(array('name' => strtoupper($tag[$i])));
							}
						}
						if(Input::hasFile('image')){
						$id=DB::table('product')->insertGetId($data);
						$extendfilename = Input::file('image')->getClientOriginalName();
						$extendfilename=explode(".",$extendfilename);
						$filename="image".$id.".".$extendfilename[1];
						DB::table('product')->where('ID', '=', $id)->update(array('img' => $filename));				
						    $file = Input::file('image');
							$destinationPath = 'upload/images/product';
							//$filename = $file->getClientOriginalName();
							Input::file('image')->move($destinationPath, $filename);
		 				}
		 				Session::put("success","True");
		 		}
		 		catch(Exception $er)
		 		{
		 			Session::put("success","False");
		 		}
			return Redirect::to('admin/add-product');
		}
		
	}
 ?>