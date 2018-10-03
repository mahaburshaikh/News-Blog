<?php

//user route
Route::group(['namespace'=>'User'],function(){

	 Route::get('/','HomeController@index');

     Route::get('post/{post}','PostController@post')->name('post');

     Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
 
     Route::get('post/category/{category}','HomeController@category')->name('category');

});  


//Admin route
Route::group(['namespace'=>'Admin'],function(){
	Route::get('admin/home','HomeController@index')->name('admin.home');
	//user route 
    Route::resource('admin/user','UserController');
    //role controller
	Route::resource('admin/role','RoleController');
    //Permission Controller
    Route::resource('admin/permission','PermissionController');
	//post route
	Route::resource('admin/post','PostController');
	//tag route
    Route::resource('admin/tag','TagController');
    //category routee
    Route::resource('admin/category','CategoryController');
    //Admin Auth Routes
    Route::get('admin-login','Auth\LoginController@showLoginForm')->name('admin.login') ;
    
    Route::post('admin-login','Auth\LoginController@login');
});
 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
