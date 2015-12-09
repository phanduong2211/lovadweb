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
	class login extends Controller
	{
		public function getLogin()
		{
				return View::make("admin.login");			
		}
		public function boollogin()
		{
			$Inputdata=array("username"=>Input::get("username"),"password"=>Input::get("password"));		
			foreach (User::get() as $user) {
				if(strtolower($user->acc) == strtolower($Inputdata["username"])
					&& $user->pass==$Inputdata["password"])
				{
					Session::put("login","true");
					Session::put("nameuser",$user->name);				
					return true;
				}
				
			}
			Session::put("login","false");
			return false;
		}
		public function checklogin()
		{

			if($this->boollogin())	
			{		
				return Redirect::to("admin/index");
			}
			else
			{
				return redirect()->back();
			}
			
		}
		public function boolchecksessionlogin()
		{
			if(Session::has("nameuser"))
			{
				return true;
			}
			return false;
		}
		public function checksessionlogin()
		{
			if($this->boolchecksessionlogin())
			{
				return $this->getIndexAdmin();
			}
			return Redirect::to("admin/login");
		}
		public function getIndexAdmin()
		{
			return View::make("admin.dashboard");
		}
		public function logout()
		{
			Session::forget("nameuser");
			return Redirect::to("admin/login");
		}
		public function products_list()
		{
			if($this->boolchecksessionlogin())
			{
				return View::make("admin.products.products-list");
			}
			return Redirect::to("admin/login");
			
		}
		public function add_product()
		{
			if($this->boolchecksessionlogin())
			{
				//$menudistinct=DB::table('menu')->orderBy('root','ASC')->groupBy('root')->get();
				/*$menu=DB::table('menu')->get();
				$arryTreeMenu=array();
				foreach($menu as $values) {
					
						$data=DB::table('menu')->where("root","=",$values->ID)->get();

						if($data==null)
						{
							array_push($arryTreeMenu,$values->ID);			
						}
						
					}*/

				return View::make("admin.products.add-product"/*,array("menu"=>$menu,"arryTreeMenu"=>$arryTreeMenu)*/);
			}
			return Redirect::to("admin/login");
			
		}
		
		public function test()
		{
			return View::make("admin.products.products-list");
		}
	}
 ?>