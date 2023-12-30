<?php

class logoutClass {
	
	public function __construct(){
		
		
		session_start(); 
		
		$this->logout();
		
		
		
	}
	
	
	public function logout(){
		if($_SESSION['u_type']==1){
		$page = "login_admin";	
		}
		else{
			$page = "login";	
			
		}
		
		// Unset all session variables
        $_SESSION = [];

        // Destroy the session
        session_destroy();

        // Redirect to the login page after logout
        header("Location: $page.php");
        exit();
		
		
		
	}
	
	
	
	
	
}

new logoutClass();


?>