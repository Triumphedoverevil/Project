<?php

class UserController extends BaseController {

public function index()

	{	

	$users = User::get();

	return View::make('admin.users.index', compact('users'));

	}


public function store()

	{

//	$input = Input::all();

//	$this->taskCreator->make($input);

//	User::create([
//		'title' 	=>	$input['title'],
//		'body'		=>	$input['body'],
//		'user_id'	=>	$input['assign']

//				]);
	return Redirect::to('/admin/users');

	}

public function edit($id)

	{

	$user = User::find($id);

//		$task->'title' 		=>	$input['title'],
//		$task->'body'		=>	$input['body'],
//		$task->'user_id'	=>	$input['assign']

//				]);

	$user->save();

	return Redirect::to('/admin/users');

	}


public function update($id)

	{

	$user = Task::find($id);
					
	$task->save();

	return Redirect::to('/admin/users');

	}

public function destroy($id)
    
    {        
    $user = User::find($id);

    $user->delete();	

	return Redirect::to('/admin/users');

    }





}