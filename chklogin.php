<?php
require_once"bootstrap.php";

if(isset($_POST['login'])) {
	
	
		$email=$_POST['email'];
		
		$password=$_POST['password'];
		


		$query=" SELECT * FROM users where email=:email";

		$stmt=$connect->prepare($query);

    	$stmt->bindParam(":email",$email);		
		$stmt->execute();
		$result=$stmt->fetch();
		if($result>0){
			if(password_verify($password, $result['password'])){

				if($result['mail_status']==0){
				notification("Please Verified Your Mail",'danger');			
				redirect('login');
				}

				$_SESSION["id"]=$result['id'];
				$_SESSION["email"]=$result['email'];
				$_SESSION["role"]=$result['role'];
				notification("You are  logged in");			
				redirect('dashboard');
			}
			else{


			    notification("Invalid password");			
				redirect('login');

				
			}
		}
		else{

			notification("email dosen't exists");			
				redirect('login');
			
		}



									
}

?>