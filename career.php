<?php
    define('ABSPATH', __DIR__);
    include ABSPATH . "/config.php";
    include ABSPATH . "/templates/header.php";
?>
<div class="content">
        <div class="wrapper mimg2" id= "wrapper-1">
                            
                <div class="frontbox sky        ">
                            <h1 class="heading" style="padding-top:50px"  >Career</h1>
                           
                            <p class="tagline"></p>
                            
                </div>
        </div>

                <div class="wrapper">

                      <div class="wrapper">
                      <p id="midheading">
                      Using Our Services can be difficult, particularly if you don't have the correct company. Locator pledges to offer the best transport service for two- and four-wheeled vehicles.
Making transporting simpler is always our goal. The greatest drivers, who have undergone rigorous on-the-job training, are what you can expect from Locator Transport. By constantly providing them priority in van transportation, we make each customer feel special.

                    </p><br><br>
                           <div id="dropdiv">
                    
                                        <div class="topline2">
                                        <h1>INTERESTED AREA</h1>
                                        </div>
                                        <!-- my drop down -->
                                        <div class=" wrapper main-dropdown" >
                                                <p class="whitetext">-------select------</p>
                                                <p><img src="./image/polygon.svg"/></p>
                                        </div>
                                        <!-- <ul class=" wrapper whitetext" id="dropdown-list">
                                                <li>Real Estate Partner </li>
                                                <li>Food Service Requirements Partner </li>
                                                <li>Food & Beverage Brands Partner </li>
                                                <li>Franchisees</li>
                                                <li>Brand and Marketing Alliances</li>
                                        </ul> -->

                                        <form class="topline2 myform">
                                                <p class="formpara">
                                                <h2 class="star">Your NAME</h2>
                                                <input type="text" placeholder="Type here" class="formip">
                                                </p>
                                                
                                                <p class="formpara">
                                                <h2 class="star">Your E-mail</h2>
                                                <input type="email" placeholder="Type here" class="formip">
                                                </p>
                                                
                                                <p class="formpara">
                                                <h2 class="star">Your mobile</h2>
                                                <input type="tel" placeholder="Type here" class="formip">
                                                </p>
                                                
                                                <p class="formpara">
                                                <h2 class="star">Your Portfolio Link</h2>
                                                
                                                <input placeholder="Type here" type="file" id="myFile" class="formip"/>
                                                </p>
                                                
                                                <p class="formpara">
                                                <h2 class="star">Your Message (if any)</h2>
                                                
                                                <textarea name="message" cols="30" rows="10" class= formip placeholder="type here"></textarea>
                                                </p>
                                                
                                                <br>
                                                <p></p>
                                                
                                                <input type="submit" value="Apply Now" id="formbtn">
                                         </form>       
                            </div>






                        </div>





                </div>
        














</div>
<br>
<br>

<br>
<br>
<br>
<br>
<?php
include ABSPATH . "/templates/footer.php";
?>
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