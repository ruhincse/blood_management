<?php 
    require_once"bootstrap.php";
    require_once"partial/header.php";
    if(is_login()){
    redirect('dashboard');
}

$query="Select * from  districts  order by name ";

$stmt=$connect->query($query);
$stmt->execute();
$district=$stmt->fetchAll();

?>

   <section>
        
         <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                        <h3 class="panel-title">Please sign up to become A Blood Doner</h3>
                        </div>
                        <div class="panel-body">
                        <form role="form" action="reg.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control input-sm" placeholder="Name" required>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" required>
                            </div>

                            <div class="form-group" >
                                <select name="blood"  class="form-control" required>
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
                                <div class="form-group">
                                            <select name="district"  class="form-control" required>
                                    <option value="" >District</option>      
                                    <?php foreach($district as $district){?>  

                                    <option value="<?php echo $district['id']?>"><?php echo ucfirst($district['name'])?></option>                                    
                                    
                                               <?php  }    ?>                     
                                                                       
                                </select>
                                  </div>

                                   <div class="form-group">
                                            <select name="thana"  class="form-control" required>
                                    <option value="" >Select Thana</option>                          
                                                                       
                                </select>
                                </div>


                             </div>

                                
                                   

                                   

                                


                            <div class="form-group" >
                              
                                 <input type="file" name="image"  class="form-control"> 
                            </div>







                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" required>
                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-info btn-block" name="register">Register</button>
                            
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>


<script type="text/javascript"> 

        $('document').ready(function(){

            $('select[name="district"]').on('change',function(){
                var district=$(this).val();
                    if(district){
                        console.log(district);

                        $.ajax({
                            url:"showthana.php",
                            type:"get", 
                             dataType:"json",
                            data:{'id':district},
                            success:function(data){
                               // console.log(data);
                               
                                $('select[name="thana"]').empty();
                                    $.each(data, function(key, value) {
                                        $('select[name="thana"]').append('<option value="'+ key +'">'+ value.name +'</option>');
                                    });
                            }


                        });
                    }
                





            })




        })

</script>


<?php 
    require_once"partial/fotter.php";
?>
          