<?php 	namespace Acme\Services;

use Acme\Validators\TaskValidator;


class TaskCreatorService	{

	protected $validator;

	public function __construct(TaskValidator $validator)

	{
		$this->validator = $validator;

	}

	public function make(array $attributes)

	{
		if ($this->validator->isValid($attributes))

			{
				Task::create([
					'title' 	=>	$input['title'],
					'body'		=>	$input['body'],
					'user_id'	=>	$input['assign']

				]);

				return true;
			}	
		
		thow new Acme\Validators\ValidationException;

	}









}