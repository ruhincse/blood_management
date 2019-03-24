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

				$_SESSION["id"]=$result['id'];
				$_SESSION["email"]=$result['email'];
				$_SESSION["role"]=$result['role'];
				
				redirect('dashboard');
			}
			else{
				echo "Invalid password";
			}
		}
		else{
			echo "email dosen't exists";
		}



									
}

?>