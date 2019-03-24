<?php
 require_once"bootstrap.php";

if(is_admin()!="admin"){
    redirect('login');
}


 if(isset($_POST['addDist'])){

   $district=$_POST['district'];




 	$query="INSERT INTO districts  (name) values (:name)";
		$stmt=$connect->prepare($query);

		$stmt->bindParam(":name",$district);
		
		$result=$stmt->execute();
		if($result==true){
			redirect('district');
		}

		




 }

?>