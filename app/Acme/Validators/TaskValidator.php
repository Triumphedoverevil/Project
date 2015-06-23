<?php 	namespace Acme\Validators;

use Acme\Validators\TaskValidator;


class TaskValidator extends Validator {

	protected ststic $rules = [

		'title'		=>	'required',
		'body'		=>	'required',
		'user_id'	=>	'required'


	];







}