<?php
namespace Classes ;
require_once 'Database.php' ;
require_once 'RefGen.php' ;



class Transaction {
	
	public function __construct(){
		
		
		$this->db = new Database() ;
		
		
	} 
	
	public function deposite($DepositeAmount, $Details, $Date, $particular_id, $posted_by){
		
		
		
		$connect = $this->db->connect();
		
		
		
		
		$smht = $connect->prepare("select MAX(RIGHT(ref_id,13)) as ref_id from transaction");
		$smht->execute();
		
		$result = $smht->get_result();
		$fresult = $result->fetch_assoc();
		
		 $lastRefNumber=$fresult['ref_id'];
		
		  $newref_id = RefGen::generateRefNumber($lastRefNumber);
		
	
		
	
			
			$smht = $connect->prepare("INSERT INTO transaction ( `ref_id`, `particular_id`, `debit`, `Details`, `customer_id`, `posted_by`, `date`) VALUES (?, ?, ?, ?, ?, ?, ?)");
		$smht->bind_param("ssssiis",$newref_id,$particular_id,$DepositeAmount,$Details,$posted_by,$posted_by,$Date);
		$smht->execute();
		
		return true;
			
		
		
		
		$smht->close();
		
		$connect->close();
		
		
	}
		
	public function withdraw($WithdrawAmount, $Details, $Date, $particular_id, $posted_by){
		
		
		
		$connect = $this->db->connect();
		
		
		
		
		$smht = $connect->prepare("select MAX(RIGHT(ref_id,13)) as ref_id from transaction");
		$smht->execute();
		
		$result = $smht->get_result();
		$fresult = $result->fetch_assoc();
		
		 $lastRefNumber=$fresult['ref_id'];
		
		  $newref_id = RefGen::generateRefNumber($lastRefNumber);
		
	
		
	
			
			$smht = $connect->prepare("INSERT INTO transaction ( `ref_id`, `particular_id`, `credit`, `Details`, `customer_id`, `posted_by`, `date`) VALUES (?, ?, ?, ?, ?, ?, ?)");
		$smht->bind_param("ssssiis",$newref_id,$particular_id,$WithdrawAmount,$Details,$posted_by,$posted_by,$Date);
		$smht->execute();
		
		return true;
			
		
		
		
		$smht->close();
		
		$connect->close();
		
		
	}
	
	
		
	public function transfer($WithdrawAmount, $transfer_to, $Details, $Date, $particular_id, $posted_by){
		
		
		
		$connect = $this->db->connect();
		
		
		
		
		$smht = $connect->prepare("select MAX(RIGHT(ref_id,13)) as ref_id from transaction");
		$smht->execute();
		
		$result = $smht->get_result();
		$fresult = $result->fetch_assoc();
		
		 $lastRefNumber=$fresult['ref_id'];
		
		  $newref_id = RefGen::generateRefNumber($lastRefNumber);
		
	
		
	$smht = $connect->prepare("select users_id from users where email='$transfer_to'");
		$smht->execute();
		
		$result2 = $smht->get_result();
		$fresult = $result2->fetch_assoc();
		
		 $transfer_to=$fresult['users_id'];	
				
		
		
	
			
			$smht = $connect->prepare("INSERT INTO transaction ( `ref_id`, `particular_id`, `credit`, `Details`, `customer_id`, `posted_by`, `date`) VALUES (?, ?, ?, ?, ?, ?, ?)");
		$smht->bind_param("ssssiis",$newref_id,$particular_id,$WithdrawAmount,$Details,$posted_by,$posted_by,$Date);
		$smht->execute();
		
	
			
			$smht2 = $connect->prepare("INSERT INTO transaction ( `ref_id`, `particular_id`, `debit`, `Details`, `customer_id`, `posted_by`, `date`) VALUES (?, ?, ?, ?, ?, ?, ?)");
		$smht2->bind_param("ssssiis",$newref_id,$particular_id,$WithdrawAmount,$Details,$transfer_to,$posted_by,$Date);
		$smht2->execute();
		
		return true;
			
		
		
		
		$smht->close();
		
		$connect->close();
		
		
	}
	
	
	
	
public function getTransactionsTable($email) {
        $connect = $this->db->connect();
        
		//echo $email;
		
		
		$balance = 0 ;
		$users_id = $_SESSION['users_id'];
		$u_type = $_SESSION['u_type'];
		
		
	
		
		if($u_type==1){
			
			$u_qry = "1"; 
			
		if(!empty($email)){
			
				
	$smht = $connect->prepare("select users_id from users where email='$email'");
		$smht->execute();
		
		$result2 = $smht->get_result();
		$fresult = $result2->fetch_assoc();
		
		 $users_id=$fresult['users_id'];	
			
			
		$u_qry = "customer_id=$users_id"; 
		
		}
			
		}
		else{
			
			
			$u_qry = "customer_id=$users_id"; 
		}
		
		
        $result = $connect->query("SELECT * FROM transaction where $u_qry");
        
        if ($result->num_rows > 0) {
            // Output table header
      

            // Output data of each row
            while($row = $result->fetch_assoc()) {
				
				
				$particular_id=$row['particular_id'];
				$customer_id=$row['customer_id'];
				$posted_id=$row['posted_by'];
				
				$balance = $balance + ($row['debit'] - $row['credit'] ) ;
				
				
				
			$smht = $connect->prepare("select particular_name from particular where particular_id=$particular_id");
		$smht->execute();
		
		$result2 = $smht->get_result();
		$fresult = $result2->fetch_assoc();
		
		 $particular_name=$fresult['particular_name'];		
				
		
		if(!empty($customer_id))	{	
			$smht = $connect->prepare("select username from users where users_id=$customer_id");
		$smht->execute();
		
		$result2 = $smht->get_result();
		$fresult = $result2->fetch_assoc();
		
		 $customer_name=$fresult['username'];	

		}
else{
	
	$customer_name="N/A";
}		


		if(!empty($posted_id))	{	
			$smht = $connect->prepare("select username from users where users_id=$posted_id");
		$smht->execute();
		
		$result2 = $smht->get_result();
		$fresult = $result2->fetch_assoc();
		
		 $posted_name=$fresult['username'];	

		}
else{
	
	$posted_name="N/A";
}		
		

		
                echo "<tr>
                        <td>{$row['ref_id']}</td>
                        <td>{$row['date']}</td>
                        <td>{$particular_name}</td>
                        <td>{$row['debit']}</td>
                        <td>{$row['credit']}</td>
                        <td>{$balance}</td>
                        <td>{$row['Details']}</td>
                        <td>{$customer_name}</td>
                        <td>{$posted_name}</td>
                      </tr>";
            }

            
        } else {
            echo "<tr><td colspan='8'>No transactions found</td></tr>";
        }

        $connect->close();
    }	
	
	
}



?>