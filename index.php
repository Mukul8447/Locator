  <?php
    define('ABSPATH', __DIR__);
    include ABSPATH . "/config.php";
    include ABSPATH . "/templates/header.php"
?>



<div class="content">
    
                
                        <!-- <div class="wrapper nopadding mimg1" id= "wrapper-1"> -->
                        <div class="carousel wrapper nopadding"  id= "wrapper-1">
                            <div class="slides">
                                <img src="./images/mukul_front.jpg" alt="slide image" class="slide">
                                <img src="./images/vision4.jpg" alt="slide image" class="slide">
                                <img src="./images/locator3.png" alt="slide image" class="slide">
                                <img src="./images/slide5.jpg" alt="slide image" class="slide">
                                <img src="./images/locator4.png" alt="slide image" class="slide">
                            </div>
                            <div class="controls">
                                <div class="control prev-slide">&#9668;</div>
                                <div class="control next-slide">&#9658;</div>
                            </div>
                            <div class="frontbox sky-opac">
                                <h1 class="heading"  >Locator</h1>
                                <p class="tagline">Time & Money is Precious We Will Save for You</p>
                                
                            </div>
                            
                            
                        </div>    
                        <!-- </div> -->


                        <!--white rapper 1 -->
                        <div class="wrapper" id = "wrapper-2">
                            
                                        <div class="topline">
                                        <h1>THE SERVICES </h1>
                                        <div class="paragraph">
                                        It may come as a surprise to learn that individuals today place a lot more trust in the Van & Tempo on hire in Delhi services than they do in any other form of assistance from family or friends when it comes to moving items to another area. It was very helpful to hire goods transportation services in Delhi for the day of the operation because modern technology is widely accessible in every industry and makes any task simpler and easier. The completion of reservations and research can now be accomplished with a single click, or rather, through an online approach.            
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                        </div>



                        <!-- blue wrapper  -->

                        <div class="wrapper blue" id = "wrapper-2">
                   
                                <div class="top" style = "color:#ffffff;" >
                                    <h1 style = "color:#ffffff;" >OUR TIMELY WORK</h1>
                                      We must collaborate between your available dates of our carriers in order to better match your timetable. We take into account all deadlines for delivery and collection, including business hours. While we try to accommodate your schedule, we kindly request a precise 1-2 day window for pickup and delivery in order to account for unanticipated delays.
                                </div>
                                      <br>
                                      <br>
                                      <br>
                  
                                <div class="blocks" id="reducegap">
                                    <div class="OURWORK"><img class = "fadeimage " src="images\vision1.jpg" alt="" style= "background-size: 220px 280px"></div>
                                    <div class="OURWORK"><img class = "fadeimage" src="images\courier.jpg" alt=""></div>
                                    <div class="OURWORK"><img class = "fadeimage" src="images\track8.jpg" alt=""></div>
                                    <div class="OURWORK"><img class = "fadeimage" src="images\vision6.png" alt=""></div>
                                    
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
                              Deliver Products to your doorstep faster than you think, who want to relocate their valuable belongings like home appliances, furniture, small goods, heavy items, clothes, sanitary, electronics, medicines,small machines, fertiliser, etc.              
                            </div>  
                        <br><br>
                    <div class="blocks">
                      <?php echo '<a href="landing_page.php?wheeler_id=two">';?> <div id="whitechild"><img src="./images/mukul_two_wheeler.jpg" alt="" id="whiteimg"><h3>Two Wheeler Services</h3></div><?php echo '</a>'; ?><br>
                      <?php echo '<a href="landing_page.php?wheeler_id=three">';?><div id="whitechild"><img src="./images/threewheeler.jpg" alt="" id="whiteimg"><h3>Three Wheeler Services</h3></div><?php echo '</a>'; ?><br>
                      <?php echo '<a href="landing_page.php?wheeler_id=four">';?><div id="whitechild"><img src="./images/mukul_four_wheeler.jpg" alt="" id="whiteimg"><h3>Four Wheeler Services</h3></div><?php echo '</a>'; ?><br>
                        <!--<div id="whitechild"><img src="./images/travel.png" alt="" id="whiteimg"><h3>travel</h3></div><br> -->
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>


                </div>
                 
                <!-- white wrapper  -->

                <div class="wrapper white-opac" id = "wrapper-2">
                    
                    <div class="topline">

                      <h1>HAMARA SAFAR APKE SATH  </h1>
                                        
                            <div class="paragraph">
                            It is very important to get as much information of van and our transport. We will ask for the length, width, height and approximate weight of the van. We will discuss the status of the van as well.the faster and smoother the transport process becomes. Please ensure that all dimensions, size and weight of the van are verified and confirmed to plan the move accordingly.
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                    </div>
                    <div class="gridblocks">
                        <div><img src="./images/sath.jpg" alt="" id="gridimg"></div>
                        <div><img src="./images/vision.png" alt="" id="gridimg"></div>
                        <div><img src="./images/road.png" alt="" id="gridimg"></div>
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

  const delay = 3000; //ms

const slides = document.querySelector(".slides");
const slidesCount = slides.childElementCount;
const maxLeft = (slidesCount - 1) * 100 * -1;

let current = 0;

function changeSlide(next = true) {
  if (next) {
    current += current > maxLeft ? -100 : current * -1;
  } else {
    current = current < 0 ? current + 100 : maxLeft;
  }

  slides.style.left = current + "%";
}

let autoChange = setInterval(changeSlide, delay);
const restart = function() {
  clearInterval(autoChange);
  autoChange = setInterval(changeSlide, delay);
};

// Controls
document.querySelector(".next-slide").addEventListener("click", function() {
  changeSlide();
  restart();
});

document.querySelector(".prev-slide").addEventListener("click", function() {
  changeSlide(false);
  restart();
});

</script>