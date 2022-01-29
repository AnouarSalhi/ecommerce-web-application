<?php


/**
 * 
 */
class UserController
{
       public function auth(){
         
         if (isset($_POST['submit'])) {
         	$data['username']=$_POST['username'];
         	$result=User::login($data);
         	if ( isset($result->username) && $result->username==$_POST['username'] && password_verify($_POST['password'], $result->password)) {
         		$_SESSION['logged']=true;
         		$_SESSION['username']=$result->username;
         		$_SESSION['fullName']=$result->fullName;
         		$_SESSION['admin']=$result->admin;
         		Session::set('success','you are loged now');
         		Redirect::to('home');

         	}else{
         		Session::set('error','mot de pass ou username est incorect !!');
         		Redirect::to('login');
         	}
         }

       }

     
      public function register(){

      	$option=[
      		'cost'=>12
      	];

      	$password=password_hash($_POST['password'], PASSWORD_BCRYPT,$option);
      	$data = array(

      		'fullName' =>$_POST['fullName'] ,
      		'username' =>$_POST['username'] ,
      		'email' =>$_POST['email'] ,
      		'password' =>$password 
      		 );
      	$result=User::createUser($data);
      	Session::set('success','compte a ete cree');
      	Redirect::to('login');
      }


}	
