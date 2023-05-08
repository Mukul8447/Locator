<?php
    define('ABSPATH', __DIR__);
    include ABSPATH . "/config.php";
    include ABSPATH . "/templates/header.php"
?>



<div class="content">
    
                
                        <div class="wrapper nopadding mimg1" id= "wrapper-1">
                            
                            <div class="frontbox sky-opac">
                                <h1 class="heading"  >BalPree Transport Services</h1>
                                <p class="tagline">Time & Money is Precious we Will Save for You</p>
                                
                            </div>
                        

                        </div>


                        <!--white rapper 1 -->
                        <div class="wrapper " id = "wrapper-2">
                            
                                        <div class="topline">
                                        <h1>THE STORY </h1>
                                        <br>
                                        <br>
                                        <br>
                                        </div>
                                                    <div class="paragraph">
                                                    K Hospitality Corp was founded over 40 years ago in Mumbai, India by Mr. J.K. Kapur (or "JK" as he was fondly known). He had migrated to Mumbai from modern day Pakistan on top of a train with his sisters and a few suitcases in tow, and landed in Mumbai to build his life from scratch. Over the years he built up a movie production business, but his passion for food had defined his life and ultimately led him to start an Indian restaurant known as "Copper Chimney" in the heart of Mumbai.
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                        </div>



                        <!-- blue wrapper  -->

                        <div class="wrapper blue " id = "wrapper-2">
                   
                                <div class="top" style = "color:#ffffff;" >
                                    <h1>OUR TIMELINE</h1>
                                </div>
                                <br>
                                <br>
                                <br>
                  
                                <div class="blocks" id="reducegap">
                                    <div class="timeline"><img class = "fadeimage " src="images\timeline1.png" alt="" style= "background-size: 220px 280px"></div>
                                    <div class="timeline"><img class = "fadeimage" src="images\timeline2.png" alt=""></div>
                                    <div class="timeline"><img class = "fadeimage" src="images\timeline3.png" alt=""></div>
                                    <div class="timeline"><img class = "fadeimage" src="images\timeline4.png" alt=""></div>
                                    
                                </div>
                                <br>
                                <br>
                                <br>
                 
                        </div>
                
                
               
                
                <div class="wrapper" id = "wrapper-2">
                    
                    <div class="topline">
                    <h1>OUR SPECIALITY </h1>
                    </div>
                            <div class="paragraph">
                            Deliver Products at your door step faster than you think.
                            </div>
                        <br><br>
                    <div class="blocks" >
                        <div id="whitechild"><img src="./images/mukul_two_wheeler.jpg" alt="" id="whiteimg"><h3>Two Wheeler Services</h3></div><br>
                        <div id="whitechild"><img src="./images/mukul_four_wheeler.jpg" alt="" id="whiteimg"><h3>Four Wheeler Services</h3></div><br>
                        <!-- <div id="whitechild"><img src="./images/cafes.png" alt="" id="whiteimg"><h3>Cafes</h3></div><br>
                        <div id="whitechild"><img src="./images/travel.png" alt="" id="whiteimg"><h3>travel</h3></div><br> -->
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>

                <div class="wrapper" id = "wrapper-2">
                    
                    <div class="topline">
                    <h1>OUR BRAND VERTICALS </h1>
                    </div>
                            <div class="paragraph">
                            We relentlessly innovate and explore new dishes
                             and flavours to serve our customers delicious and memorable food every single time.
                            </div>
                            <br>
                    <br>
                    <br>
                    <br>

                    <div class="gridblocks">
                        <div><img src="./images/wwr1.png" alt="" id="gridimg"></div>
                        <div><img src="./images/wwr2.png" alt="" id="gridimg"></div>
                        <div><img src="./images/wwr6.png" alt="" id="gridimg"></div>
                        <div><img src="./images/wwr4.png" alt="" id="gridimg"></div>
                        <div><img src="./images/wwr5.png" alt="" id="gridimg"></div>
                        <div><img src="./images/wwr3.png" alt="" id="gridimg"></div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
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