<?php

 /**
  * 
  */
 class User
 {
 	
 	static public function login($data){

       $username=$data['username'];
       try{
          $query='SELECT * FROM users WHERE username=:username';
          $stmt=DB::connect()->prepare($query);
          
          $stmt->execute(array(':username'=>$username));
          $user=$stmt->fetch(PDO::FETCH_OBJ);
          return $user;
       }catch(PDOExeption $e){
         echo "error ".$e.getMessage();
       }

 	}

 	static public function createUser($data)
	{
       $stmt=DB::connect()->prepare("INSERT INTO users (fullName,username,email,password) values (:fullName,:username,:email,:password)");
       $stmt->bindParam('fullName',$data['fullName']);
       $stmt->bindParam('username',$data['username']);
       $stmt->bindParam('email',$data['email']);
       $stmt->bindParam('password',$data['password']);
      
      $stmt->execute();

	}

 }