<?php

 require_once"bootstrap.php";



if(isset($_GET['id'])){



  $id=$_GET['id'];

 
  


  $query="SELECT * FROM thanas where dist_id=:id ";


        $stmt=$connect->prepare($query);          
        $stmt->bindParam(':id',$id);          
        $stmt->execute();
        $results=$stmt->fetchAll();
        echo json_encode($results);



        

	

	
}

?>