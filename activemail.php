<?php 
 require_once"bootstrap.php";
if(isset($_GET['token'])){
	$token=$_GET['token'];
	$sid=1;

	$query="SELECT * FROM users where mail_token=:token";
	$stmt=$connect->prepare($query);
	$stmt->bindParam(':token',$token);
	$stmt->execute();
	$result=$stmt->fetch();
	if($result>0){
		$id=$result['id'];
		$query="update  users set mail_token=NULL , mail_status=:status  where id=:id";
		$stmt=$connect->prepare($query);
		$stmt->bindParam(':id',$id);
		$stmt->bindParam(':status',$sid);
		$stmt->execute();

		$result=$stmt->rowCount();

		if($result>0){
			notification('Your Account is Actived');
		  redirect('login');

		}


	}
	else{
		notification('Token has expired','danger');
		redirect('login');
	}

}

?>