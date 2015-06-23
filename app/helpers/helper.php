<?php

use Khill\Lavacharts\Lavacharts;

function profilepic_url($email)
	{
		
	//$queryurl = 'https://api.fullcontact.com/v2/person.json?emailMD5='.md5($email).'&apiKey=ee359339f522443f';
	//$queryurl = 'https://graph.facebook.com/search?q='.$email.'&type=user&access_token=ee359339f522443f';
	//$contact = file_get_contents($queryurl, true);
	//$contact = json_decode($contact, true);
	//$url= $contact["photos"][0]["url"];

	//return $url;

	//return 'http://graph.facebook.com/'.$user_id.'/picture?type=square';
	//return 'https://plus.google.com/s2/photos/profile/'.md5($email).'?sz=30';
	//return 'http://www.gravatar.com/avatar/'. md5($email) . '?s=40';
	//https://graph.facebook.com/search?access_token=YOUR_ACCESS_TOKEN&q=EMAIL_ADDRESS_URL_ENCODED&type=user
	}


//function link_to_task(Task $task)
//	{
//	return link_to_route('user.task.show', $task->title, [$task->user->username, $task->id]); 	
//	}

function randompassword($count){
 
$pass = str_shuffle('abcefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890@#%$*');
 
return substr($pass,3,$count);
 
}


function tasksgraphall(){

$homeHighNotCompleted 	= DB::table('tasks')->where('completed',0)->where('category',0)->where('priority',2)->count();
$homeMedNotCompleted 	= DB::table('tasks')->where('completed',0)->where('category',0)->where('priority',1)->count();
$homeLowNotCompleted 	= DB::table('tasks')->where('completed',0)->where('category',0)->where('priority',0)->count();

$workHighNotCompleted 	= DB::table('tasks')->where('completed',0)->where('category',1)->where('priority',2)->count();
$workMedNotCompleted 	= DB::table('tasks')->where('completed',0)->where('category',1)->where('priority',1)->count();
$workLowNotCompleted 	= DB::table('tasks')->where('completed',0)->where('category',1)->where('priority',0)->count();

$autoHighNotCompleted 	= DB::table('tasks')->where('completed',0)->where('category',2)->where('priority',2)->count();
$autoMedNotCompleted 	= DB::table('tasks')->where('completed',0)->where('category',2)->where('priority',1)->count();
$autoLowNotCompleted 	= DB::table('tasks')->where('completed',0)->where('category',2)->where('priority',0)->count();


$tasksdata = Lava::DataTable();

		$tasksdata->addStringColumn('Category')
		         ->addNumberColumn('High')
		         ->addNumberColumn('Med')
		         ->addNumberColumn('Low')		         	         
		         ->addRow(['Home', $homeHighNotCompleted, $homeMedNotCompleted, $homeLowNotCompleted])
		         ->addRow(['Work', $workHighNotCompleted, $workMedNotCompleted,  $workLowNotCompleted])
		         ->addRow(['Automotive', $autoHighNotCompleted, $autoMedNotCompleted, $autoLowNotCompleted]);
		         
		$columnchart = Lava::ColumnChart('tasks')
		                    ->setOptions([
		                    'datatable' => $tasksdata,
		                    'title' => 'Priority',
		                    'titleTextStyle' => Lava::TextStyle([
		                        'color' => '#333333',
		                        'fontSize' => 12
		                        ]),
		                     	'legend' => Lava::Legend([
                     			'position' => 'none'                     			
                      			]),
                      		'colors' => ['red','orange','grey']

		                    ]);

return $columnchart;

}

function tasksgraphwork(){

$workHighNotCompleted 	= DB::table('tasks')->where('completed',0)->where('category',1)->where('priority',2)->count();
$workMedNotCompleted 	= DB::table('tasks')->where('completed',0)->where('category',1)->where('priority',1)->count();
$workLowNotCompleted 	= DB::table('tasks')->where('completed',0)->where('category',1)->where('priority',0)->count();

$tasksdata = Lava::DataTable();

		$tasksdata->addStringColumn('Category')
		         ->addNumberColumn('High')
		         ->addNumberColumn('Med')
		         ->addNumberColumn('Low')		         	         
		         ->addRow(['Work', $workHighNotCompleted, $workMedNotCompleted,  $workLowNotCompleted]);
		         
		$columnchart = Lava::ColumnChart('tasksWork')
		                    ->setOptions([
		                    'datatable' => $tasksdata,
		                    'title' => 'Priority',
		                    'titleTextStyle' => Lava::TextStyle([
		                        'color' => '#333333',
		                        'fontSize' => 12
		                        ]),
		                     	'legend' => Lava::Legend([
                     			'position' => 'none'                     			
                      			]),
                      		'colors' => ['red','orange','grey']

		                    ]);

return $columnchart;

}

