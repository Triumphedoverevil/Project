<?php

//dump query for troubleshooting

/*
Event::listen('illuminate.query', function($query)
{
	var_dump($query)	
}):
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function()
{
	$data = array();
	if(Auth::check()){
		$data = Auth::user();
	}

	return View::make('hello');
});

//login

Route::get('/login', 'LoginController@login');

Route::get('login/callback', 'LoginController@callback');

Route::get('/logout', function()
{
	Auth::logout();
	return Redirect::to('/');
});



//Route::get('{username}/tasks','UserTasksController@index');

//Route::get('{username}/tasks/{id}',['as'=> 'user.task.show', 'uses'=>'UserTasksController@show'])->where('id','\d+');
Route::get('/tasks/completed','TasksController@index_completed');
Route::get('/tasks/home','TasksController@index_home');
Route::get('/tasks/work','TasksController@index_work');
Route::get('/tasks/auto','TasksController@index_auto');
Route::get('/tasks/projects','TasksController@index_projects');
Route::resource('/tasks', 'TasksController');
Route::post('/tasks/{id}/complete',['uses' => 'TasksController@complete']);



//admin 

Route::resource('/admin/users' , 'UserController');


// Calendar

Route::resource('/calendar','EventsController');


// Finance Transactions

Route::resource('/transactions','TransactionController');



// Blank Routes for clean website

Route::get('/budget',function()
{
	return View::make('budget.show');
});

Route::get('/forex',function()
{
	return View::make('forex.show');
});

Route::get('/goals',function()
{
	return View::make('goals.show');
});

Route::get('/admin',function()
{
	return View::make('admin.show');
});

