<?php 
  require_once"bootstrap.php";
    require_once"partial/header.php";

$query="Select * from  districts  order by name ";

$stmt=$connect->query($query);
$stmt->execute();
$district=$stmt->fetchAll();


?>

        <!--  HOME SLIDER BLOCK  -->
        
        <div class="slider-wrap">
            <div id="slider_1" class="owl-carousel" data-nav="true" data-dots="false" data-autoplay="true" data-autoplaytimeout="17000">

                <div class="slider_item_container" data-bg_img="images/home_1_slider_1.jpg" data-bg_color="#555555" data-bg_opacity="0.0">
                    <div class="item">
                        <div class="slider-content">
                            <div class="container text-left">
                                <div class="row">
                                    <div class="slider-bg">                                    
                                        <div class="col-sm-12 wow zoomInUp" data-wow-duration="1s">  
                                            
                                                <h3>Donate blood,save life !</h3>
                                                <h2>
                                                    YOUR BLOOD  
                                                    <br>
                                                    CAN BRING SMILE  
                                                    <br />
                                                    IN OTHER PERSON FACE
                                                </h2>
                                                <a href="#" class="btn btn-theme margin-top-24">Donate Now</a>
                                                <a href="#" class="btn btn-theme btn-theme-invert margin-top-24">CALL : 411-009-872-333</a>
                                            </div>                                      
                                    </div> <!-- end .col-sm-12  -->
                                </div> <!-- end .row  -->
                            </div><!-- end .container -->
                        </div> <!--  end .slider-content -->
                    </div> <!-- end .item  -->
                </div> <!-- end .slider_item_container  -->

                <div class="slider_item_container" data-bg_img="images/home_1_slider_2.jpg" data-bg_color="#555555" data-bg_opacity="0.0" >
                    <div class="item">
                        <div class="slider-content">
                            <div class="container text-left">
                                <div class="row">
                                    <div class="slider-bg" data-animation-in="zoomInUp" data-animation-out="zoomInDown">                                    
                                        <div class="col-sm-12 wow fadeInDown" data-wow-duration="1s">
                                            
                                            <h3>Donate blood,save life !</h3>
                                                <h2>
                                                    DONATE BLOOD
                                                    <br>
                                                    AND INSPIRES OTHERS.
                                                </h2>
                                                <a href="#" class="btn btn-theme margin-top-24">Donate Now</a>
                                        </div>                                            
                                    </div> <!-- end .col-sm-12  -->
                                </div> <!-- end .row  -->
                            </div><!-- end .container -->
                        </div> <!--  end .slider-content -->
                    </div> <!-- end .item  -->
                </div> <!-- end .slider_item_container  -->

            </div> <!-- end .slider_1  -->
        </div> <!-- end .slider-wrap.  -->
        
        <!--  FEATURED ABOUT US SECTION-->

        <section class="section-content-block">
 
            <div class="container">
                
                <div class="row">

                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        
                        <div class="about-us-container theme-custom-box-shadow">

                            <div class="row section-heading-wrapper margin-bottom-11">

                                <div class="col-lg-12 col-md-12 col-sm-12 text-left no-img-separator ml-60">
                                    <h2><strong>Search Blood</strong></h2>
                                    <span class="heading-separator heading-separator-horizontal"></span>
                                </div> <!-- end .col-sm-10  --> 

                            </div>

                         
                                <form action="searchblood.php" method="POST">
                                <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                         
                                    <div class="form-group">
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
                                </div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                            <select name="district"  class="form-control" required>
                                    <option value="" >District</option>      
                                    <?php foreach($district as $district){?>  

                                    <option value="<?php echo $district['id']?>"><?php echo ucfirst($district['name'])?></option>                                    
                                    
                                               <?php  }    ?>                     
                                                                       
                                </select>
                                    </div>
                                </div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                  <select name="thana"  class="form-control" required>
                                    <option value="" >Select Thana</option>                          
                                                                       
                                </select>
                                    </div>

                                   

                                <button class="btn btn-danger pull-right" name="search"> Search</button>
                                </div>


                                </form>
                                
                            


                         <!--  end .about-details -->  

                        </div>
                        </div>

                    </div> <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12 -->  
</div>

                                    

                </div> <!--  end .row  -->
            </div>

        </section> <!--  end .section-about-us -->
        
        <!-- SECTION TESTIMONIAL   -->

    
        
        <!--  SECTION CAMPAIGNS   -->

        
        
        <!--  SECTION APPOINTMENT BOX -->
        
        <section class="section-content-block section-custom-bg section-custom-bg-extra-padding" data-bg_img='images/appointment_female_bg.jpg' data-bg_color='#000000' data-bg_opacity='0.1'>

            <div class="container">
                <div class="custom-empty-space" data-height="160px" data-class="col-sm-hidden"></div>
            </div>

        </section>

        <!--  SECTION APPOINTMENT   -->

        <section class="section-content-block section-secondary-bg">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6 col-md-6"> 
                        
                        <div class="row section-heading-wrapper">

                            <div class="col-md-12 col-sm-12 text-left no-img-separator">
                                <h4>Good To Know</h4>
                                <span class="heading-separator heading-separator-horizontal"></span>
                                <h2>Helpful Information
                                </h2>

                            </div> <!-- end .col-sm-10  --> 

                        </div>

                        <div class="about-details"> 

                            <ul class="custom-bullet-list">
                                <li>Maintain a healthy iron level by eating iron rich foods.</li>
                                <li>Drink an extra 16 oz. of water prior to your donation.</li>
                                <li>Avoid alcohol consumption before your blood donation.</li>
                                <li>Remember to bring the donor card or national ID/Passport.</li>
                                <li>Finally, Try to get a good night sound sleep after donation.</li>
                            </ul>

                        </div> <!--  end .about-details -->  
               
                    </div> <!--  end col-lg-6  -->


                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-appointment-reverse"> 

                        <div class="appointment-form-wrapper theme-custom-box-shadow text-center clearfix wow zoomIn">
                            <h3 class="join-heading join-heading-alt">Request Blood</h3>
                            <form class="appoinment-form" action="request.php"> 
                                <div class="form-group col-md-6">
                                    <input id="your_name" class="form-control" placeholder="Name" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <input id="your_email" class="form-control" placeholder="Email" type="email">
                                </div>
                                <div class="form-group col-md-6">
                                    <input id="your_phone" class="form-control" placeholder="Phone" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="select-style">                                    
                                        <select class="form-control" name="your_center">
                                            <option>Donation Center</option>
                                            <option>Los Angles</option>
                                            <option>California</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <input id="your_date" class="form-control" placeholder="Date" type="text">
                                </div>


                                <div class="form-group col-md-6">
                                    <input id="your_time" class="form-control" placeholder="Time" type="text">
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <textarea id="textarea_message" class="form-control" rows="4" placeholder="Your Message..."></textarea>
                                </div>         

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button id="btn_submit" class="btn btn-theme" type="submit">Get Appointment</button>
                                </div>

                            </form>

                        </div> <!-- end .appointment-form-wrapper  -->

                    </div> <!--  end .col-lg-6 -->

                </div> <!--  end .row  -->
                
                <div class="row wow fadeIn">

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-center">

                            <i class="fa fa-heartbeat icon"></i>
                            <span class="counter">2578</span>                            
                            <h4 class="text-capitalize">Success Smile</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-center">

                            <i class="fa fa-stethoscope icon"></i>
                            <span class="counter">3235</span>                            
                            <h4 class="text-capitalize">Happy Donors</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-center">

                            <i class="fa fa-users icon"></i>
                            <span class="counter">3568</span>                             
                            <h4 class="text-capitalize">Happy Recipient</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-center">

                            <i class="fa fa-building icon"></i>
                            <span class="counter">1364</span>                            
                            <h4 class="text-capitalize">Total Awards</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->


                </div> <!-- end row  -->

            </div> <!--  end .container -->

        </section>  <!--  end .appointment-section  -->
        
        <!-- SECTION TEAM   -->

        

        <!--  SECTION GALLERY  -->

        <section class="section-content-block section-pure-white-bg">

            <div class="container">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center no-img-separator">
                        <h2>CAMPAIGN GALLERY</h2>
                        <span class="heading-separator"></span>
                        <h4>our prestigious voluntary work on campaigns by the team</h4>
                    </div> <!-- end .col-sm-10  -->                      


                </div> <!-- end .row  -->

            </div> <!--  end .container -->

            <div class="container wow fadeInUp">

                <div class="row no-padding-gallery">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_1.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_1.jpg" alt="gallery image" />

                            </figure> <!-- end .gallery-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_2.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_2.jpg" alt="gallery image" />

                            </figure> <!-- end .gallery-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_3.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_3.jpg" alt="gallery image" />

                            </figure> <!-- end .gallery-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->

                </div> <!-- end .row  -->

                <div class="row no-padding-gallery">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_4.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_4.jpg" alt="gallery image" />

                            </figure> <!-- end .gallery-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_5.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_5.jpg" alt="gallery image" />

                            </figure> <!-- end .gallery-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_6.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_6.jpg" alt="gallery image" />

                            </figure> <!-- end .gallery-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->

                </div> <!-- end .row  -->

            </div><!-- end .container-fluid  -->

        </section> <!-- end .section-content-block  -->

        <!-- HIGHLIGHT CTA  -->  
        
        <section class="padding-bottom-100 padding-top-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="cta-section-1 section-secondary-bg text-center theme-custom-box-shadow">
                            <h2 class="text-capitalize">Become A Part Of Great Work Today</h2>
                            <p>
                                You can give blood at any of our blood donation venues all over the world. 
                                <br />
                                We have total sixty thousands donor centers and visit thousands of other venues on various occasions.                            
                            </p>
                            <a class="btn btn-theme margin-top-24 wow bounceIn" href="#">JOIN WITH US</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- START FOOTER  -->

        <footer>            

            <section class="footer-widget-area footer-widget-area-bg">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="about-footer">

                                <div class="row">

                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        <img src="images/logo-footer.png" alt="" />
                                    </div> <!--  end col-lg-3-->

                                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                        <p>
                                            We are world largest and trustful blood donation center. We have been working since 1973 with a prestigious vision to helping patient to provide blood.
                                            We are working all over the world, organizing blood donation campaign to grow awareness among the people to donate blood.
                                        </p>
                                    </div> <!--  end .col-lg-9  -->

                                </div> <!--  end .row -->

                            </div> <!--  end .about-footer  -->

                        </div> <!--  end .col-md-12  -->

                    </div> <!--  end .row  -->

                    <div class="row"> 						                      

                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="footer-widget">

                                <div class="sidebar-widget-wrapper">

                                    <div class="footer-widget-header clearfix">
                                        <h3>Contact Us</h3>
                                    </div>  <!--  end .footer-widget-header --> 


                                    <div class="textwidget">                                       

                                        <i class="fa fa-envelope-o fa-contact"></i> <p><a href="#">support@donation.com</a><br/><a href="#">helpme@donation.com</a></p>

                                        <i class="fa fa-location-arrow fa-contact"></i> <p>Road-2,3/A East Shibgonj<br/>Sylhet-3100, Bangladesh</p>

                                        <i class="fa fa-phone fa-contact"></i> <p>Office:&nbsp; (+880) 0823 560 433<br/>Cell:&nbsp; (+880) 0723 161 343</p>                              

                                    </div>

                                </div> <!-- end .footer-widget-wrapper  -->

                            </div> <!--  end .footer-widget  -->

                        </div> <!--  end .col-md-4 col-sm-12 -->   

                        <div class="col-md-4 col-sm-12 col-xs-12">

                            <div class="footer-widget clearfix">

                                <div class="sidebar-widget-wrapper">

                                    <div class="footer-widget-header clearfix">
                                        <h3>Support Links</h3>
                                    </div>  <!--  end .footer-widget-header --> 


                                    <ul class="footer-useful-links">

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Thalassemia
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Cell Elofrosis
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Myelodysasia
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Blood Count
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Hemolytimia
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Ychromas Eosis 
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Hyrcoagulable
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Thrombo Xtosis
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Sicklenemiaxs
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Aplastic Anemia
                                            </a>
                                        </li>                                       

                                    </ul>

                                </div> <!--  end .footer-widget  -->        

                            </div> <!--  end .footer-widget  -->            

                        </div> <!--  end .col-md-4 col-sm-12 -->    

                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="footer-widget">
                                <div class="sidebar-widget-wrapper">
                                    <div class="footer-widget-header clearfix">
                                        <h3>Subscribe Us</h3>
                                    </div>
                                    <p>Signup for regular newsletter and stay up to date with our latest news.</p>
                                    <div class="footer-subscription">
                                        <p>
                                            <input id="mc4wp_email" class="form-control" required="" placeholder="Enter Your Email" name="EMAIL" type="email">
                                        </p>
                                        <p>
                                            <input class="btn btn-default" value="Subscribe Now" type="submit">
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div> <!--  end .col-md-4 col-sm-12 -->  

                    </div> <!-- end row  -->

                </div> <!-- end .container  -->

            </section> <!--  end .footer-widget-area  -->




<script type="text/javascript"> 

        $('document').ready(function(){

            $('select[name="district"]').on('change',function(){
                var district=$(this).val();
                    if(district){
                        //console.log(district);

                        $.ajax({
                            url:"showthana.php",
                            type:"get", 

                             dataType:"Json",
                            data:{'id':district},
                            success:function(data){
                               
                               
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
          