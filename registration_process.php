<?php 
require_once 'vendor/autoload.php' ;

use Classes\User;

$user = new User();

//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	

if(isset($_POST['reg'])) // To check 'submmited or not' by if(isset($_POST['submit'])) 
{
    $email = $_POST['email'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = 2;
	
	
	if(!empty($username) && !empty($email) && !empty($password) && !empty($type)){
		
		
		if($user->register($username,$email,$password,$type)){
			
			header("Location: registration_form.php?message=success");
        exit();
			
		}
		else{
			
			 header("Location: registration_form.php?message=faild");
        exit();
		}
			  
		   
		
		
		
		
		
		
    } else {
          
		   header("Location: registration_form.php?message=faild");
        exit();
    }
	
	
}

	
	

if(isset($_POST['admin_reg'])) // To check 'submmited or not' by if(isset($_POST['submit'])) 
{
    $email = $_POST['email'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = 1;
	
	
	if(!empty($username) && !empty($email) && !empty($password) && !empty($type)){
		
		
		if($user->register($username,$email,$password,$type)){
			
			header("Location: registration_form_admin.php?message=success");
        exit();
			
		}
		else{
			
			 header("Location: registration_form_admin.php?message=faild");
        exit();
		}
			  
		   
		
		
		
		
		
		
    } else {
          
		   header("Location: registration_form.php?message=faild");
        exit();
    }
	
	
}





?>