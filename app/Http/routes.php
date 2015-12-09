<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/////////////////-------------------------------------------View pages--------------------------------------
Route::get('/','index@getindex');
Route::get('/pages/{name}','pages@getpage');


/////////////////-------------------------------------------Admin pages--------------------------------------

Route::get("admin/login","admin\login@getLogin");
Route::get("admin/index","admin\login@checksessionlogin");
Route::post("admin/login","admin\login@checklogin");
Route::get("admin/logout","admin\login@logout");
Route::get("admin/products-list","admin\login@products_list");
Route::get("admin/add-product","admin\login@add_product");
Route::post("admin/add-product","admin\products@insert");
Route::get("admin/add-pages","admin\pages@insertpage");
Route::post("admin/add-pages","admin\pages@insertpage");
Route::get("admin/pages-list","admin\pages@get");
Route::get("admin/edit-pages-{id}","admin\pages@getID");
Route::post("admin/edit-pages-{id}","admin\pages@editID");
Route::get("admin/test","admin\login@test");
//Route::get("admin/edit-pages-{id}","admin\pages@getID");
Route::get("admin/delete-pages-{id}","admin\pages@Delete");