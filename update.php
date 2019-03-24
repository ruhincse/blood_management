<?php
require_once"bootstrap.php";


if(!is_login()){
    redirect('login');
}





if(isset($_POST['update'])){

$id=$_SESSION['id'];

	//fatching Old Data
        $query=" SELECT * FROM users where id=:id";
        $stmt=$connect->prepare($query);
        $stmt->bindParam(":id",$id);      
        $stmt->execute();
        $result=$stmt->fetch();

			if($_POST['email']==NULL){
				$email=$result['email'];
			}
			else{
				$email=$_POST['email'];
			}

			if($_POST['name']==NULL){
				$name=$result['name'];
			}
			else{
				$name=$_POST['name'];
			}

			if($_POST['password']==NULL){
				$password=$result['password'];
			}
			else{
				$password=password_hash($_POST['password'], PASSWORD_DEFAULT);
			}

		if($_POST['blood']==NULL){
				$bloodgroup=$result['blood'];
			}
			else{
				$bloodgroup=$_POST['blood'];
			}



			if($_POST['district']==NULL){
				$district=$result['district'];
			}
			else{
				$district=$_POST['district'];
			}


			if($_POST['thana']==NULL){
				$thana=$result['thana'];
			}
			else{
				$thana=$_POST['thana'];
			}

			





			if($_FILES['image']==NULL){
				$file_info=$result['image'];
			}

			else{
				if($result['image']){
				 unlink($result['image']);
				}

				$imagename=$_FILES['image']['name'];
				$tmp_file=$_FILES['image']['tmp_name'];

				$filepart=explode(".", $imagename);
				$extension=end($filepart);

				$imagenewName=uniqid()."_image".rand().time().$name.".".$extension;

				$file_info="uploads/".$imagenewName;

				move_uploaded_file($tmp_file, $file_info);
			}

			$query="UPDATE users SET name=:name,email=:email,blood=:blood,district=:district,thana=:thana,password=:password,image=:image where id=:id";
		$stmt=$connect->prepare($query);

		$stmt->bindParam(":name",$name);
		$stmt->bindParam(":email",$email);
		$stmt->bindParam(":blood",$bloodgroup);
		$stmt->bindParam(":district",$district);
		$stmt->bindParam(":thana",$thana);
		$stmt->bindParam(":password",$password);
		$stmt->bindParam(":image",$file_info);
		$stmt->bindParam(":id",$id);
        $stmt->execute();
		$result=$stmt->rowCount();

		if($result>0){

		redirect('dashboard');

		}
		






}


?>