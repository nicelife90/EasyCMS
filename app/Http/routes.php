<?php
Route::group(['middleware' => ['web']], function () {
   
	//FRONTEND ROUTE
	Route::get('/', 'FrontendController@index');
	Route::get('/page/{id}', 'FrontendController@page')->where('id', '[0-9]+');
	

	//BACKEND ROUTE
	Route::group(array('prefix'=>'admin'), function(){
		
		//Dashboard	
		Route::get('/dashboard', 'DashboardController@show');
		
		
		
		//POST
		Route::get('/post', 'PostController@show');
		Route::get('/post/edit/{id}', 'PostController@edit')->where('id', '[0-9]+'); 
		Route::post('/post/edit/{n}', 'PostController@save');
		Route::get('/post/delete/{n}', 'PostController@delete');
		
		//User
		Route::get('/users', 'UserController@show');
		Route::get('/users/add', 'UserController@add');
		Route::get('/users/edit/{n}', 'UserController@edit')->where('n', '[0-9]+');
		Route::post('/users/edit/{n}', 'UserController@save')->where('n', '[0-9]+');
		Route::get('/users/delete/{n}', 'UserController@delete')->where('n', '[0-9]+');
		
		//TOOLS
		Route::get('/tools/db', 'ToolsController@show');
		
		//Logout
		Route::get('/logout', 'LogoutController@logout');
	});
});
