<?php

class LoginController extends BaseController {

private $fb;  

public function __construct(FacebookHelper $fb){
   
    $this->fb = $fb;

}

public function login(){
    
    return Redirect::to($this->fb->getUrlLogin());

}

public function callback(){
    if (!$this->fb->generateSessionFromRedirect() ) {
    	return Redirect::to('/')->with('message',"Error who da fuck knows i quit");
    }

    $user_fb = $this->fb->getGraph();

    if(empty($user_fb)){
    	return Redirect::to('/')->with('message',"Error who da fuck knows i quit");    	
    }
    
    $user = User::whereUidFb($user_fb->getProperty('id'))->first();
  
    if(empty($user)){

        $password = randompassword(8);

    	$user = new User;        
    	$user->email 			= $user_fb->getProperty('email');
        $user->password         = Hash::make($password);
		$user->name 			= $user_fb->getProperty('name');
		$user->birthday		 	= date(strtotime($user_fb->getProperty('birthday')));
		$user->photo 			= 'http://graph.facebook.com/' . $user_fb->getProperty('id') . '/picture?type=large';
		$user->uid_fb 			= $user_fb->getProperty('id');
		$user->active 			= true;	
        $user->isAdmin          = false;	
        $user->save();

        $newuser = array(
            'email'     =>$user_fb->getProperty('email'),
            'name'      =>$user_fb->getProperty('name'),
            'password'  =>$password
        );
               
        Mail::queue('admin/users/mail/welcome',$newuser, function($message) use ($newuser)
        {
        $message->from('triumphedoverevil@visualize', 'Site Admin')
                ->to($newuser['email'], $newuser['name'])
                ->subject('Welcome to my site');
        });
        
         
        
    }

    	$user->access_token_fb	= $this->fb->getToken();
		$user->save();

		Auth::login($user);
		return Redirect::to('/tasks')->with('user', $user);
}







}
