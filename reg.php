<?php
require_once"bootstrap.php";

if(isset($_POST['register'])) {
	
		$name=$_POST['name'];
		$email=$_POST['email'];
		$bloodgroup=$_POST['blood'];

		$district=$_POST['district'];
		$thana=$_POST['thana'];
		$password=$_POST['password'];
		$password=password_hash($password, PASSWORD_DEFAULT);
		$image=$_FILES['image'];

		
		if(isset($image) ){
				$imagename=$_FILES['image']['name'];
				$tmp_file=$_FILES['image']['tmp_name'];

				$filepart=explode(".", $imagename);
				$extension=end($filepart);

				$imagenewName=uniqid()."_image".rand().time().$name.".".$extension;

				$file_info="uploads/".$imagenewName;

				move_uploaded_file($tmp_file, $file_info);




		}

		else{

			$file_info="default.png";


		}


		$query="INSERT INTO users (name,email,blood,district,thana,password,image) values(:name,:email,:blood,:district,:thana,:password,:image) ";
		$stmt=$connect->prepare($query);

		$stmt->bindParam(":name",$name);
		$stmt->bindParam(":email",$email);
		$stmt->bindParam(":blood",$bloodgroup);
		$stmt->bindParam(":district",$district);
		$stmt->bindParam(":thana",$thana);
		$stmt->bindParam(":password",$password);
		$stmt->bindParam(":image",$file_info);
		$result=$stmt->execute();
		if($result==true){
			redirect('login');
		}



									
}


?>