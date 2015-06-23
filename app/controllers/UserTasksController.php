<?php

class UserTasksController extends BaseController {

public function index($username)

	{
		//$tasks = Task::byUsername($username);

		$tasks= User::byUsername($username)->first()->tasks;


		$users 	= User::lists('username','id');

		return View::make('tasks.index',compact('tasks', 'users'));
	}

public function show($username, $taskId)

	{

	$task = Task::find($taskId, $username);
	

	return View::make('tasks.show',compact('task'));

	}



}	