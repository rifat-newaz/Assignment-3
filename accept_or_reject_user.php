<?php 
session_start(); 
require_once 'vendor/autoload.php' ;

use Classes\User;


//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if(isset($_POST['accept'])) // To check 'submmited or not' by if(isset($_POST['submit'])) 
{
    $users_id = $_POST['users_id'];
	$status = 1 ;
	
	if(!empty($users_id) && !empty($status)){
		
		$user = new User();
		if ($user->accept_reject($users_id, $status)) {
			
		
			
             header("Location: index.php");
        exit();
        } else {
            header("Location: index.php?message=faild");
        exit();
        }
		
			  
		  
    } else {
          
		   header("Location: index.php?message=faild");
        exit();
    }
	
	
}



//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if(isset($_POST['reject'])) // To check 'submmited or not' by if(isset($_POST['submit'])) 
{
    $users_id = $_POST['users_id'];
	$status = 2 ;
	
	if(!empty($users_id) && !empty($status)){
		
		$user = new User();
		if ($user->accept_reject($users_id, $status)) {
			
		
			
             header("Location: index.php");
        exit();
        } else {
            header("Location: index.php?message=faild");
        exit();
        }
		
			  
		  
    } else {
          
		   header("Location: index.php?message=faild");
        exit();
    }
	
	
}



?>