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

?>

 
        
         <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                        <h3 class="panel-title">Add District</h3>
                        </div>
                        <div class="panel-body">
                        <form role="form"  action="adddist.php" method="post">
                            
                            <div class="form-group">
                                <input type="text" name="district" id="district" class="form-control input-sm" placeholder="district Address" required>
                            </div>

                            
                            
                            
                            <button type="submit" class="btn btn-info btn-block" name="addDist">Add District</button>
                            
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php 
    require_once"partial/fotter.php";
?>
          