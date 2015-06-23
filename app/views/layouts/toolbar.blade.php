@section('toolbar')


<nav class="navbar navbar-default">
 	<div class="container-fluid">
   		<div class="navbar-header">
   		<a class="navbar-brand" href="#">
        @if (Auth::check())
        {{
        'Welcome ', Auth::user()->name, ' !'
        }}
        @endif

      </a>
	
	<div class="btn-group">	 	
  		<button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
   			Home Pages <span class="caret"></span>
  		</button>
  			<ul class="dropdown-menu" role="menu">
    			 <li ><a href="/tasks">Tasks</a></li>
   	 			 <li><a href="/calendar">Calandar</a></li>
   	 			 <li><a href="/forex">Forex</a></li>
   	 			 <li><a href="/budget">Budget</a></li>
   	 			 <li><a href="/goals">Goals</a></li>
   			 	 <li><a href="/admin">Projects</a></li>
   			 	 <li class="divider"></li>
   				 <li><a href="/admin">Admin</a></li>
  			</ul>
  	
  	<div class="btn-group">
  		<button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
   			Tasks <span class="caret"></span>
  		</button>
  			<ul class="dropdown-menu" role="menu">
    			 <li><a href="/tasks">All Tasks</a></li>      
   	 			 <li><a href="/tasks/home">Home Tasks</a></li>
     	 			 <li><a href="/tasks/auto">Automotive Tasks</a></li>
   	 			 <li><a href="/tasks/work">Work Tasks</a></li>
   			 	 <li><a href="/tasks/projects">Projects Tasks</a></li>
   			 	 <li class="divider"></li>
   			 	 <li><a href="/tasks/completed">Completed Tasks</a></li>
  			</ul>
	
  	<div class="btn-group">
  		<button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
   			Finance <span class="caret"></span>
  		</button>
  			<ul class="dropdown-menu" role="menu">
    			 <li><a href="/budget">Budget Status</a></li>
   	 			 <li><a href="/transactions">Transactions</a></li>
   	 			 <li><a href="/budget">Stocks and Mutual funds</a></li>
   			 	 <li class="divider"></li>
   			 	 <li><a href="/forex">Forex Trading</a></li>
  			</ul>

    <div class="btn-group">
      <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
        Admin <span class="caret"></span>
      </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="/admin/users/">Users</a></li>
           <li><a href="/chris/tasks">Server Status</a></li>
           <li><a href="/calendar">Logs</a></li>
           <li><a href="/budget">Run Tasks</a></li>
           <li class="divider"></li>
           <li><a href="/forex">Reboot</a></li>
        </ul>
      <a href="/logout">
      <button class="btn btn-warning btn-sm pull-right" type="button" >
        Logout 
      </button>
      </a> 
      
  
    
    </div>
    </div>      
	  </div>
   	</div>
   	</div>
   	</div>
</nav>




@stop 