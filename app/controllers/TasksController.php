<?php

use Carbon\Carbon;
use Khill\Lavacharts\Lavacharts;

class TasksController extends BaseController {


public function index()

	{	

	$tasks	= Task::with('user')->where('completed',0)->orderBy('priority','desc')->get();

	$users 	= User::lists('name','id');

	$strcompleted = 'all';

	$columnchart = tasksgraphall();     

	View::share('columnchart',$columnchart);

	View::share('strcompleted',$strcompleted);

	return View::make('tasks.index', compact('tasks','users'));

	}

	
public function index_completed()

	{	

	$tasks	= Task::with('user')->where('completed',1)->orderBy('updated_at','desc')->get();

	$users 	= User::lists('name','id');

	$strcompleted = 'completed';

	View::share('strcompleted',$strcompleted);

	return View::make('tasks.index', compact('tasks','users'));

	}

public function index_home()

	{	

	$tasks	= Task::with('user')->where('completed',0)->where('category',0)->orderBy('priority','desc')->get();

	$users 	= User::lists('name','id');

	$strcompleted = 'home';

	View::share('strcompleted',$strcompleted);

	return View::make('tasks.index', compact('tasks','users'));

	}


public function index_work()

	{	

	$tasks	= Task::with('user')->where('completed',0)->where('category',1)->orderBy('priority','desc')->get();

	$users 	= User::lists('name','id');

	$strcompleted = 'work';

	$columnchart = tasksgraphwork();     

	View::share('columnchart',$columnchart);

	View::share('strcompleted',$strcompleted);

	return View::make('tasks.index', compact('tasks','users'));

	}


public function index_auto()

	{	

	$tasks	= Task::with('user')->where('completed',0)->where('category',2)->orderBy('priority','desc')->get();

	$users 	= User::lists('name','id');

	$strcompleted = 'automotive';

	View::share('strcompleted',$strcompleted);

	return View::make('tasks.index', compact('tasks','users'));

	}


public function index_projects()

	{	

	$tasks	= Task::with('user')->where('completed',0)->where('category',3)->orderBy('priority','desc')->get();
	$users 	= User::lists('name','id');

	$strcompleted = 'projects';

	View::share('strcompleted',$strcompleted);

	return View::make('tasks.index', compact('tasks','users'));

	}


public function show($username)

	{

	// $task = Task::byUsername($username);
	

	// return View::make('tasks.show',compact('task'));

	}

public function store()

	{
	
	if (Input::get('emailnotify') === '1')
	{
	   $emailnotify = true;
	}
	else
	{
	    $emailnotify = false;
	}

	$email 		= DB::table('users')->where('id', Input::get('user_id'))->pluck('email');
		
	$newtask = array(
            'title'    			=>	Input::get('title'),
            'category' 			=>	Input::get('category'),
            'priority' 			=>	Input::get('priority'),
            'body'     	 	 	=>	Input::get('body'),
            'user_id'			=>	Input::get('user_id'),
            'email'				=> 	$email,
            'notify'			=>	$emailnotify,
            'assignedBy'		=>	Auth::user()->name,
            'assignedByEmail' 	=>  Auth::user()->email,
            'attachment_id'		=>  'test',
            'dueDate'			=>	Input::get('dueDate'),

        );   

	Task::create([
		'category' 			=>	$newtask['category'],
		'priority' 			=>	$newtask['priority'],
		'title' 			=>	$newtask['title'],
		'body'				=>	$newtask['body'],
		'user_id'			=>	$newtask['user_id'],
		'assignedBy'		=>  $newtask['assignedBy'],
		'assignedByEmail' 	=>	$newtask['assignedByEmail'],
		'dueDate'			=>	$newtask['dueDate'],
		'attachment_id'		=>	$newtask['attachment_id'],


				]);

	 if($emailnotify == true){

        Mail::queue('admin/users/mail/newtask',$newtask, function($message) use ($newtask)
        {
        $message->from('triumphedoverevil@gmail.com', 'You Have a New Task!') 
                ->to($newtask['email'], $newtask['user_id'])
                ->subject($newtask['title']);
        });

    	}
     	
	return Redirect::back();

	}

public function edit($id)

	{
	return Redirect::back();
	}


public function update($id)

	{

	$task = Task::find($id);

	$input = Input::all();

	$task->fill(Input::all());

	$task->save();

	return Redirect::back();

	}


public function destroy($id)
    
    {        
    $task = Task::find($id);
    $task->delete();	
	return Redirect::back();
    }

public function complete($id)

	{

	$task = Task::find($id);
	$task->completed =1;				
	$task->save();

	return Redirect::back();

	}

public function graph()
	{

		$finances = Lava::DataTable();

		$finances->addDateColumn('Year')
		         ->addNumberColumn('Sales')
		         ->addNumberColumn('Expenses')
		         ->setDateTimeFormat('Y')
		         ->addRow(array('2004', 1000, 400))
		         ->addRow(array('2005', 1170, 460))
		         ->addRow(array('2006', 660, 1120))
		         ->addRow(array('2007', 1030, 54));

		$columnchart = Lava::ColumnChart('Finances')
		                    ->setOptions(array(
		                      'datatable' => $finances,
		                      'title' => 'Company Performance',
		                      'titleTextStyle' => Lava::TextStyle(array(
		                        'color' => '#eb6b2c',
		                        'fontSize' => 14
		                      ))
		                    ));             
	return 	 $columnchart;                  

    }                

}
