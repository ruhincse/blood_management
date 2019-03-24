
<?php 
    require_once"bootstrap.php";
    require_once"partial/header.php";
  
if(!isset($_POST['search'])){
	redirect('index');
	}


	$bdgroup=$_POST['blood'];
	$district=$_POST['district'];
	$thana=$_POST['thana'];
    $query=" SELECT * FROM users where blood=:blood OR district=:district OR thana=:thana";

        $stmt=$connect->prepare($query);          
        $stmt->bindParam(':blood',$bdgroup);          
        $stmt->bindParam(':district',$district);          
        $stmt->bindParam(':thana',$thana);          
        $stmt->execute();
        $results=$stmt->fetchAll();

?>

  <section>
        
         <div class="container">
        <div class="row">
       
            <div class="panel panel-default">
                <div class="panel-heading">
                        <h3 class="panel-title">Blood Donner</h3>
                        </div>
                        <div class="panel-body">
                       <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">Name</th>
                              <th scope="col">Email</th>
                              <th scope="col">Blood Group</th>
                              <th scope="col">Location</th>
                    
                              <th scope="col">Mobile</th>
                            </tr>
                          </thead>
                          <tbody>

                          	<?php 
                          	if($results){

                          		foreach ($results as $key => $result) {?>

                          			<tr>
                             
                              <td><?php echo $result['name']?></td>
                              <td><?php echo $result['email']?></td>
                              <td><?php echo $result['blood']?></td>
                              <td><?php echo $result['district']. ",".$result['thana'] ?></td>
                              <td><?php echo $result['mobile'] ?></td>
                         
                             


                          </tr>


                          			<?php
                          		}

                          	}

                          		else{

                          			echo"<h2> No Data Available </h2>";
                          		}

                          	?>
                           
                            
                          </tbody>
                        </table>
                    </div>

               
            </div>
             <a href="index.php" class="btn btn-primary pull-right">Back</a>
             <br>

        </div>
        <br>
    </div>
  </section>






<?php 
    require_once"partial/fotter.php";
?>
          



?>