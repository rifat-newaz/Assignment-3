<?php 
session_start(); 
require_once 'vendor/autoload.php' ;

use Classes\Transaction;



//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if(isset($_POST['deposite'])) // To check 'submmited or not' by if(isset($_POST['submit'])) 
{
    $DepositeAmount = $_POST['Amount'];
    $Details = $_POST['Details'];
    $Date = $_POST['Date'];
    $particular_id = 1;
	$posted_by = $_SESSION['users_id'] ;
	
	 $Date = date("Y-m-d", strtotime($Date));
	
	if(!empty($DepositeAmount) && !empty($Details) && !empty($Date) && !empty($particular_id) && !empty($posted_by)){
		
		$Transaction = new Transaction();
		if ($Transaction->deposite($DepositeAmount, $Details, $Date, $particular_id, $posted_by)) {
			
		
			
             header("Location: deposit.php?message=success");
        exit();
        } else {
            header("Location: deposit.php?message=faild");
        exit();
        }
		
			  
		  
    } else {
          
		   header("Location: deposit.php?message=faild");
        exit();
    }
	
	
}



if(isset($_POST['withdraw'])) // To check 'submmited or not' by if(isset($_POST['submit'])) 
{
    $WithdrawAmount = $_POST['Amount'];
    $Details = $_POST['Details'];
    $Date = $_POST['Date'];
    $particular_id = 2;
	$posted_by = $_SESSION['users_id'] ;
	
	 $Date = date("Y-m-d", strtotime($Date));
	
	if(!empty($WithdrawAmount) && !empty($Details) && !empty($Date) && !empty($particular_id) && !empty($posted_by)){
		
		$Transaction = new Transaction();
		if ($Transaction->withdraw($WithdrawAmount, $Details, $Date, $particular_id, $posted_by)) {
			
		
			
             header("Location: withdraw.php?message=success");
        exit();
        } else {
            header("Location: withdraw.php?message=faild");
        exit();
        }
		
			  
		  
    } else {
          
		   header("Location: withdraw.php?message=faild");
        exit();
    }
	
	
}



if(isset($_POST['transfer'])) // To check 'submmited or not' by if(isset($_POST['submit'])) 
{
    $WithdrawAmount = $_POST['Amount'];
    $transfer_to = $_POST['transfer_to'];
    $Details = $_POST['Details'];
    $Date = $_POST['Date'];
    $particular_id = 3;
	$posted_by = $_SESSION['users_id'] ;
	
	 $Date = date("Y-m-d", strtotime($Date));
	
	if(!empty($WithdrawAmount) && !empty($transfer_to) && !empty($Details) && !empty($Date) && !empty($particular_id) && !empty($posted_by)){
		
		$Transaction = new Transaction();
		if ($Transaction->transfer($WithdrawAmount, $transfer_to, $Details, $Date, $particular_id, $posted_by)) {
			
		
			
             header("Location: transfer.php?message=success");
        exit();
        } else {
            header("Location: transfer.php?message=faild");
        exit();
        }
		
			  
		  
    } else {
          
		   header("Location: transfer.php?message=faild");
        exit();
    }
	
	
}








?>