<?php 
  require_once"bootstrap.php";
    require_once"partial/header.php";

    if(is_login()){
    redirect('dashboard');
}
?>

 
        
         <div class="container">
        <div class="row centered-form">

            <?php require_once('partial/message.php')?>
            
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
             

            <div class="panel panel-default">
                <div class="panel-heading">
                        <h3 class="panel-title">Please sign up to become A Blood Doner</h3>
                        </div>
                        <div class="panel-body">
                        <form role="form"  action="chklogin.php" method="post">
                            
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" required>
                            </div>

                            
                            <div class="row">
                                <div class="col-xs-12col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <button type="submit" class="btn btn-info btn-block" name="login">Login</button>
                            
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php 
    require_once"partial/fotter.php";
?>
          