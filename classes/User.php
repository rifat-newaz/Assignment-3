<?php
namespace Classes ;
require_once 'Database.php' ;



class User {
	
	public function __construct(){
		
		
		$this->db = new Database() ;
		
		
	} 
	
	public function register($username,$email,$password,$type){
		
		$hashdPass = password_hash($password, PASSWORD_DEFAULT);
		
		$connect = $this->db->connect();
		
		$smht = $connect->prepare("select * from users where username=? OR  email=?");
		$smht->bind_param("ss",$username,$email);
		$smht->execute();
		
		$result = $smht->get_result();
		
		if($result->num_rows<1){
			
			$smht = $connect->prepare("INSERT INTO users (username, email, password, type) VALUES (?, ?, ?, ?)");
		$smht->bind_param("sssi",$username,$email,$hashdPass,$type);
		$smht->execute();
		
		return true;
			
		}
		else{
			
			return false;
		}
		
		
		
		$smht->close();
		
		$connect->close();
		
		
	}
	
	public function login($email,$password,$type,$status){
		
		
		
		$connect = $this->db->connect();
		
		$smht = $connect->prepare("select * from users where email=? AND type=? AND status=?");
		$smht->bind_param("sii",$email,$type,$status);
		$smht->execute();
		
		$result = $smht->get_result();
		
		if($result->num_rows===1){
			
			$user = $result->fetch_assoc();
			
			if(password_verify($password,$user['password'])){
				
				
				$_SESSION['users_id'] = $user['users_id'];
				$_SESSION['username'] = $user['username'];
				$_SESSION['u_type'] = $user['type'];
				
		return true;
				
				
			}
			
			
			
		}
		
		return false ;
		
		
		
		
		
		
		
		
		$smht->close();
		
		$connect->close();
		
		
		
		
		
		
	}
	
	
	
	
	
	
	
	
	
		
public function getUserList($email) {
        $connect = $this->db->connect();
        
		//echo $email;
		
		
		$i=0;
		$balance = 0 ;
		$users_id = $_SESSION['users_id'];
		$u_type = $_SESSION['u_type'];
		
		
	
		
		if($u_type==1){
			
			$u_qry = "where status<2 ORDER BY `users`.`status` ASC"; 
			
		if(!empty($email)){
			
		$u_qry = "where email='$email'"; 
		
		}
			
		}
		else{
			
			
			$u_qry = "where users_id=$users_id"; 
		}
		
		
        $result = $connect->query("SELECT * FROM users $u_qry");
        
        if ($result->num_rows > 0) {
            // Output table header
      

            // Output data of each row
            while($row = $result->fetch_assoc()) {
				
				 $i++;
				$row_users_id=$row['users_id'];
				$row_username=$row['username'];
				$status=$row['status'];
				$type=$row['type'];
				
			if($status==0){
				
				$statustxt = "Pending";
				
			}	
	elseif($status==1){
		
		$statustxt = "Active";
		
	}	
	elseif($status==2){
		
		$statustxt = "Inactive";
		
	}	
			if($type==1){
				
				$typetxt = "Admin";
				
			}	
	elseif($type==2){
		
		$typetxt = "Customer";
		
	}

		
                echo "<tr>
                        <td>{$row['username']}
						 <input type='hidden' id='zipsearch$i' value='$row_users_id'/>
						 <input type='hidden' id='username$i' value='$row_username'/>
						</td>
                        <td>{$row['email']}</td>
                        <td>{$typetxt}</td>
                        <td>{$statustxt}</td>
                        <td>"; 
						if($status==0){
						echo "<button type='button' class='btn btn-sm btn-success' data-toggle='modal' data-target='#exampleModal' onClick='sync$i()' data-whatever='@mdo' type='button'>Accept</button>";
						}
						
						echo "<button type='button' data-target='#RejectModal' data-toggle='modal' onClick='Rejectsync$i()' data-whatever='@mdo' class='btn btn-sm btn-danger' type='button'>Reject</button></td>
                      </tr>";
					  
					  
					  									
										echo "<script>
function sync$i()
{
  var collect = document.getElementById('zipsearch$i');
  var entry = document.getElementById('xpaytype');
  
  
  var usernamecollect = document.getElementById('username$i');
  var usernameentry = document.getElementById('username');
  
  
  entry.value = collect.value;
  usernameentry.value = usernamecollect.value;
  
 
}
</script> ";
					  									
										
echo "<script>
function Rejectsync$i()
{
  var collect = document.getElementById('zipsearch$i');
  var entry = document.getElementById('RejectUsers_id');
  
  
  var usernamecollect = document.getElementById('username$i');
  var usernameentry = document.getElementById('RejectUsername');
  
  
  entry.value = collect.value;
  usernameentry.value = usernamecollect.value;
  
 
}
</script> ";
					  
					  
					  
            }

            
        } else {
            echo "<tr><td colspan='8'>No transactions found</td></tr>";
        }

        $connect->close();
    }	
	








	public function accept_reject($users_id, $status){
		
		
		
		$connect = $this->db->connect();
		
		$smht = $connect->prepare("UPDATE users SET status =? where users_id=? ");
		$smht->bind_param("ii",$status,$users_id);
		$smht->execute();
		
		return true;
		
	
		
		
		$smht->close();
		
		$connect->close();
		
		
	}

















	
	
}



?>