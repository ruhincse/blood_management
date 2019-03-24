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
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                        <h3 class="panel-title">Update Your Information </h3>
                        </div>
                        <div class="panel-body">
                        <form role="form" action="update.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                            <input type="text" name="name" value="<?php echo $result['name']?>" id="name" class="form-control input-sm" placeholder="Name" >
                                    </div>
                                </div>
                                
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="email" value="<?php echo $result['email']?>" class="form-control input-sm" placeholder="Email Address" >
                            </div>

                            <div class="form-group" >
                                <select name="blood"  class="form-control" >
                                    <option value="" >Blood Group</option>                                    
                                    <option value="A+">A+</option>                                    
                                    <option value="B+" >B+</option>                                    
                                    <option value="AB+" >AB+</option>                                    
                                     <option value="O+">O+</option>
                                     <option value="A-">A-</option>                                    
                                    <option value="B-" >B-</option>                                    
                                    <option value="AB-" >AB-</option>                                    
                                     <option value="O-">O-</option>  
                                                                          
                                                                       
                                </select>
                            </div>

                             <div class="form-group" >
                                <select name="district"  class="form-control" >
                                    <option value="">Select District</option>     
                                    <option value="Dhaka">Dhaka</option>     

                                                  
                                                                         
                                                                       
                                </select>
                            </div>


                             <div class="form-group" >
                                <select name="thana"  class="form-control" >
                                    <option value="">Select Thana</option>     
                                    <option value="Dhaka">Dhaka</option>     

                                                  
                                                                         
                                                                       
                                </select>
                            </div>


                            <div class="form-group" >
                              
                                 <input type="file" name="image"  class="form-control"> 
                            </div>







                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" >
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" >
                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-info btn-block" name="update">Update</button>
                            
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

<?php 
    require_once"partial/fotter.php";
?>
