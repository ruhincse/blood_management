<?php 
 require_once"bootstrap.php";
   require_once"partial/header.php";

  

if(!is_login()){
    redirect('login');
}




    $id=$_SESSION['id'];

    $query=" SELECT * FROM users where id=:id";

        $stmt=$connect->prepare($query);

        $stmt->bindParam(":id",$id);      
        $stmt->execute();
        $result=$stmt->fetch();
?>

  <section>
        
         <div class="container">
        <div class="row">
       
            <div class="panel panel-default">
              <?php require_once('partial/message.php')?>
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
                              <th scope="col">Mobile</th>
                              <th scope="col">Image</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                             
                              <td><?php echo $result['name']?></td>
                              <td><?php echo $result['email']?></td>
                              <td><?php echo $result['blood']?></td>
                              <td><?php echo $result['mobile'] ?></td>
                              <td><img src="<?php echo $result['image']?>" height="150" width="150" /> </td>
                              <td>

                                <?php if(is_admin()=="admin"){?>
                                    <a class="btn btn-primary" href="edit.php">Edit</a> 
                                      <a class="btn btn-info" href="list.php">Userlist</a> 

                                    <?php if($_SESSION['id']!=$result['id']):?>
                                        <a class="btn btn-danger" href="delete.php?id=$result['id']">Delete</a> 
                                      


                                  <?php  endif;?>
                                   


                               <?php }

                                else{?>
                                     <a class="btn btn-primary" href="edit.php">Edit</a> 

                               <?php }

                                 ?>
                                


                              </td>


                            </tr>
                            
                          </tbody>
                        </table>
                    </div>

               
            </div>
             <a href="logout.php" class="btn btn-danger pull-right">Logout</a>
          <?php  if(is_admin()=="admin"):?>
             <a href="district.php" class="btn btn-primary pull-left">Add District</a> 
             &nbsp; &nbsp; &nbsp;<a href="thana.php" class="btn btn-primary pull-left">Add Thana</a>
           <?php endif;?>
             <br>

        </div>
        <br>
    </div>
  </section>






<?php 
    require_once"partial/fotter.php";
?>
          