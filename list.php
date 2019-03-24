
<?php 
    require_once"bootstrap.php";
    require_once"partial/header.php";



if(!is_login()){
    redirect('login');
    exit();
}

if(is_admin()!="admin"){
    redirect('login');
}




   

       $query=" SELECT * FROM users";

        $stmt=$connect->query($query);          
        $stmt->execute();
        $results=$stmt->fetchAll();
?>

  <section>
        
         <div class="container">
        <div class="row">
       
            <div class="panel panel-default">
                <div class="panel-heading">
                        <h3 class="panel-title">User Information</h3>
                        </div>
                        <div class="panel-body">
                       <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">Name</th>
                              <th scope="col">Email</th>
                              <th scope="col">Blood Group</th>
                              <th scope="col">Location</th>
                              <th scope="col">Image</th>
                              <th scope="col">Action</th>
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
                              <td><img src="<?php echo $result['image']?>" height="150" width="150" /> </td>
                              <td>

                                <?php if(is_admin()=="admin"){?>
                                    <a class="btn btn-primary" href="edit.php">Edit</a> 
                                      <a class="btn btn-info" href="list.php">Userlist</a> 

                                    <?php if($_SESSION['id']!=$result['id']):?>
                                        <a class="btn btn-danger" href="delete.php?id=<?=$result['id']?>">Delete</a> 
                                      


                                  <?php  endif;?>
                                   


                               <?php }

                                else{?>
                                     <a class="btn btn-primary" href="edit.php">Edit</a> 

                               <?php }

                                 ?>
                                


                              </td>


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
             <a href="logout.php" class="btn btn-danger pull-right">Logout</a>
             <br>

        </div>
        <br>
    </div>
  </section>






<?php 
    require_once"partial/fotter.php";
?>
          



?>