<?php

use Carbon\Carbon;
use Khill\Lavacharts\Lavacharts;

class TransactionController extends BaseController {


public function index()

	{	


	$accounts = DB::table('accounts')->lists('name','id');
	
	$subCategory = DB::table('subCategories')->where('category','=', Input::get('Category'))->lists('name');

	return View::make('budget.transactions', compact('accounts','subCategory'));

	}


public function store()

	{

	}

public function edit($id)

	{


	}


public function update($id)

	{


	}

public function destroy($id)
    
    {        

    }





}