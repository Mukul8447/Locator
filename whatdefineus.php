<?php
    define('ABSPATH', __DIR__);
    include ABSPATH . "/config.php";
    include ABSPATH . "/templates/header.php"
?>



<div class="content">
    
                
                <div class="wrapper nopadding mimg1" id= "wrapper-1">
                    
                    <div class="frontbox sky-opac">
                        <h1 class="heading"  >What defines Us</h1>
                        <p class="tagline">Create positive and memorable experiences for people</p>
                        
                    </div>
                

                </div>
                <!-- blue wrapper  -->

                <div class="wrapper blue " id = "wrapper-2">
                   
                  <div class="top" style = "color:#ffffff;" >
                    <h1>WORKING PRINCIPLES</h1>
                    <br>
                    <p>We are available around-the-clock and specialise in timely door-to-door delivery of important shipments anywhere in Delhi, including trained personnel to load and unload. packing and moving the shipment to the destination with great care & proficiency.</p>
                  </div>
                  
                  <div class="blocks">
                    <div class="block-item round-corner">
                        <img class = " fadeimage round-corner"src="images\record.png" alt="">
                        <!-- <div class="middle1">
                            Ownership
                        </div> -->
                        <div class = "bottom">
                            <h1>Tracking</h1>
                        </div>
                    </div>
                    <br>
                    <p></p>
                    <div class="block-item round-corner">
                        <img class = "fadeimage round-corner"src="images\delivery.jpg" alt="">
                        <!-- <div class="middle1">
                            trust
                        </div> -->
                        <div class = "bottom">
                            <h1>Location</h1>
                        </div>
                    </div>
                    <p></p>

                    <br>
                    <div class="block-item round-corner">
                        <img class = "fadeimage round-corner"src="images\unloading.jpg" alt="">
                        <!-- <div class="middle1">
                            people first
                        </div> -->
                        <div class = "bottom">
                            <h1>Loading/Unloading</h1>
                        </div>
                    </div>
                  </div>
                  <br>
                  <p>
                    
                  </p>
                 
                </div>
                
                
               

                <!--white rapper 1 -->
                <div class="wrapper " id = "wrapper-2">
                    
                            <div class="topline">
                            <h1>OUR PEOPLES </h1>
                            </div>
                                    <div class="paragraph">
                                    Providing tempo & van for rent, join us on these Services as you discover available that best suit your trip needs! This is how we help our clients connect with our products and services.
                                    </div>
                            <div class="blocks">
                                <div class="block-item" ><img src="images\WORKING1.JPG" alt=""></div>
                                <div class="block-item"><img src="images\WORKING2.JPG" alt=""></div>
                                <div class="block-item"><img src="images\WORKING3.JPG" alt=""></div>

                            </div>
                            <div class="paragraph">
                

                            </div>

                </div>
               
                <div class="wrapper " id = "wrapper-2">
                    
                    <div class="topline">
                    <h1>OUR VISION</h1>
                    </div>
                            <div class="paragraph">
                            
                            </div>

                    <br>
                    <br>
                    <div class="container">
                    
                    <div class="customer-logos slider">
                        <div class="slide"><img src="images\vision6.png" alt="logo"></div>
                        <div class="slide"><img src="images\vision6.png" alt="logo"></div>
                        <div class="slide"><img src="images\vision6.png" alt="logo"></div>
                        <div class="slide"><img src="images\vision6.png" alt="logo"></div>
                        <div class="slide"><img src="images\vision6.png" alt="logo"></div>
                        <div class="slide"><img src="images\vision6.png" alt="logo"></div>
                       

                    </div>
                    </div>
                   
                    <br>
                    <br>
                    <!-- <div class="companies">
                        <div  class= "sky"></div>
                        <div  class= "sky"></div>
                        <div  class= "sky"></div>
                        <div  class= "sky"></div>
                        <div  class= "sky"></div>
                        <div  class= "sky"></div>
                    </div> -->
                    <div class="paragraph">
                    As the most modern and skilled transport business in Delhi, we strive to provide the best services to our customers. We are always open because to our online tempo and van booking system. You can use our services at any time from wherever, day or night, early in the morning or at midnight. Also, we provide our services to customers who wish to dispatch their packages immediately. We can meet the various transportation needs of our clients thanks to our technologically advanced system. At Locator, people rank us as the best transporters in Delhi.
                   </div>

                </div>
       
                
                <div class="wrapper" id = "wrapper-2">
                    
                    <div class="topline">
                    <h1>Our Style</h1>
                    </div>
                            <div class="paragraph">
                            
                            </div>
                    <div class="blocks">
                        <div class="block-item"><img src="images\Missionvision.JPG" alt=""></div>
                        <div class="block-item"><img src="images\slide1.jpg" alt=""></div>
                        <div class="block-item"><img src="images\sath2.jpg" alt=""></div>

                    </div>
                    <div class="paragraph">
                    By providing the option to Hire Online Tempo & Van Companies in Delhi at reasonable costs, we ensure secure and efficient moving service support. They are highly honest, punctual, and committed to their task. We promise to deliver your items with the utmost care, and we'll do everything we can to make the process of moving as simple and convenient as possible. So connect and use a locator to make an online tempo and van booking in India at delhi.
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
                <?php
    
    include ABSPATH . "/templates/footer.php"
?>

        </div>

               
</div>

<script>
    $(document).ready(function(){

        $('.customer-logos').slick({

            slidesToShow: 5,
            slidesToScroll:1,
            infinity: true,
            autoplay: true,
            speed: 500,
            autopalySpeed: 1500,
            arrows: false,
            dots: true,
            pauseOnHover: false,
            responsive:[{
                breakpoint: 900,
                setting:{
                    slidesToShow : 4
                }
            },{
                breakpoint:600,
                setting:{
                    slidesToShow:3
                }

            }]



        });











        $("#dropdown-list").hide();
    $(".main-dropdown").click(function(){
      $(".main-dropdown + #dropdown-list").toggle("fast" );
    });
    $("#cross").click(function () {
      $('#menu-overlay').removeClass("active")
    })
    $(".hamburger").click(function () {
      $('#menu-overlay').addClass("active")
    });
  });
</script>

</body>
</html>