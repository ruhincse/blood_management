<?php
 require_once"bootstrap.php";

if(is_admin()!="admin"){
    redirect('login');
}



 if(isset($_POST['thana'])){

    $district=$_POST['district'];
    $thana=$_POST['thanas'];
  




 	$query="INSERT INTO thanas  (name,dist_id) values (:thananame,:district)";
		$stmt=$connect->prepare($query);

		$stmt->bindParam(":thananame",$thana);
		$stmt->bindParam(":district",$district);
		
		$result=$stmt->execute();
		if($result==true){
			redirect('thana');
		}

		




 }

?>