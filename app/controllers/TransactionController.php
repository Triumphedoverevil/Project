<?php

use Carbon\Carbon;
use Khill\Lavacharts\Lavacharts;

class TransactionController extends BaseController {


public function index()

	{	

	$transactions = DB::table('transactions')->get();

	$accounts = DB::table('accounts')->lists('name','id');

	$subCategory = DB::table('subCategories')->lists('name');
	
	//$subCategory = DB::table('subCategories')->where('category','=', Input::get('Category'))->lists('name');

	return View::make('budget.transactions', compact('accounts','subCategory','transactions'));

	}


public function store()
	{
	
	$bankaccountID 	= DB::table('accounts')->where('name', Input::get('bankAccount'))->pluck('id');
		
	$newtrans = array(
            'bankAccountID'    	=>	1, //$bankaccountID,
            'transactionDate' 	=>	Input::get('transactionDate'),
            'isNegitive' 		=>	Input::get('isNegitive'),
            'amount'     	  	=>	Input::get('amount'),
            'description'		=>	Input::get('description'),       
            'category' 			=>	Input::get('category'),
            'subCategory' 		=>  Input::get('subCategory'),
            'creator'			=>  Auth::user()->name,  

        );   

	//dd($newtrans);

	Transaction::create([
		'bankAccountID' 	=>  $newtrans['bankAccountID'],
		'transactionDate' 	=>	$newtrans['transactionDate'],
		'isNegitive' 		=>	$newtrans['isNegitive'],
		'amount'			=>	$newtrans['amount'],
		'description'		=>	$newtrans['description'],
		'category'			=>  $newtrans['category'],
		'subCategory' 		=>	$newtrans['subCategory'],
		'creator'			=>	$newtrans['creator'],
		
				]);
	     	
	return Redirect::back();

	}


public function edit($id)

	{


	}


public function update($id)

	{


	}

public function destroy($id)
    
    {       

    $transaction = Transaction::find($id);
    $transaction->delete();	
	return Redirect::back();


    }





}