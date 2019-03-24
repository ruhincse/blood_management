<?php

 require_once"bootstrap.php";

if(is_admin()!="admin"){
    redirect('login');
}


if(isset($_GET['id'])){



  $id=$_GET['id'];




  $query="SELECT * FROM thanas where dist_id=$id";


        $stmt=$connect->query($query);          
        $stmt->execute();
        $results=$stmt->fetchAll();
       echo json_encode($results);



        

	

	
}

?>