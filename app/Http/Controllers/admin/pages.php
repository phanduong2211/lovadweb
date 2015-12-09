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
	use App\Http\modules\pagesModule;
	class pages extends Controller
	{
		
		public function insertpage()
		{

			if($this->boolchecksessionlogin())
			{
				$pages= new pagesModule();				
				$data= Input::get();
				if(!isset($data) || $data!=null)
				{				
					//return $data;
					//$pages->fill($data);
					$pages->insert($data);
				}
				return View::make("admin.pages.addpages"/*,array("menu"=>$menu,"arryTreeMenu"=>$arryTreeMenu)*/);
			}
			return Redirect::to("admin/login");
			
		}

		public function get()
		{
			if($this->boolchecksessionlogin())
			{
				$pages= pagesModule::get();
				return View::make("admin.pages.pageslist",array("pages"=>$pages));
			}
			return Redirect::to("admin/login");
			
		}	
		public function getID($id)
		{
			if($this->boolchecksessionlogin())
			{
				$pages= pagesModule::find($id);
				return View::make("admin.pages.pagesedit",array("pages"=>$pages));
			}
			return Redirect::to("admin/login");
			
		}
		public function editID($id)
		{
			if($this->boolchecksessionlogin())
			{
				$pages= pagesModule::find($id);				
				$data= Input::get();

				$pages->fill($data);
				$pages->update();
				
				return View::make("admin.pages.pagesedit",array("pages"=>$pages));
			}
			return Redirect::to("admin/login");
			
		}
		public function Delete($id)
		{
			if($this->boolchecksessionlogin())
			{
				$pages= pagesModule::find($id);				
				$pages->delete();
				$pages= pagesModule::get();
				return Redirect::to("admin/pages-list")->with("pages",$pages);
				//return View::make("admin.pages.pageslist",array("pages"=>$pages));
				
			}
			return Redirect::to("admin/login");
			
		}
		public function boolchecksessionlogin()
		{
			if(Session::has("nameuser"))
			{
				return true;
			}
			return false;
		}
	}
 ?>