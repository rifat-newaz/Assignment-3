<?php 
session_start(); 
require_once 'vendor/autoload.php' ;

use Classes\User;


//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if(isset($_POST['login'])) // To check 'submmited or not' by if(isset($_POST['submit'])) 
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = 2;
    $status = 1;
	
	
	if(!empty($email) && !empty($password) && !empty($type) && !empty($status)){
		
		$user = new User();
		if ($user->login($email, $password, $type, $status)) {
			
		
			
             header("Location: transaction_list.php");
        exit();
        } else {
            header("Location: login.php?message=faild");
        exit();
        }
		
			  
		  
    } else {
          
		   header("Location: login.php?message=faild");
        exit();
    }
	
	
}


if(isset($_POST['admin_login'])) // To check 'submmited or not' by if(isset($_POST['submit'])) 
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = 1;
    $status = 1;
	
	
	
	if(!empty($email) && !empty($password) && !empty($type) && !empty($status)){
		
		$user = new User();
		if ($user->login($email, $password, $type, $status)) {
			
		
			
             header("Location: index.php");
        exit();
        } else {
            header("Location: login_admin.php?message=faild");
        exit();
        }
		
			  
		  
    } else {
          
		   header("Location: login.php?message=faild");
        exit();
    }
	
	
}





?>