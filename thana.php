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


$query="Select * from districts order by name";

$stmt=$connect->query($query);
$stmt->execute();
$district=$stmt->fetchAll();



?>

 
        
         <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                        <h3 class="panel-title">Add thana</h3>
                        </div>
                        <div class="panel-body">
                        <form role="form"  action="addthana.php" method="post">
                            
                           <div class="form-group">
                                            <select name="district"  class="form-control" required>
                                    <option value="" >District</option>      
                                    <?php foreach($district as $district){?>  

                                    <option value="<?php echo $district['id']?>"><?php echo ucfirst($district['name'])?></option>                                    
                                    
                                               <?php  }    ?>                     
                                                                       
                                </select>
                                    </div>


                             <div class="form-group">
                                <input type="text" name="thanas" id="thana" class="form-control input-sm" placeholder="thana Address" required>
                            </div>

                            
                            
                            
                            <button type="submit" class="btn btn-info btn-block" name="thana">Add Thana</button>
                            
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php 
    require_once"partial/fotter.php";
?>
          