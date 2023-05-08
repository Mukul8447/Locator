<?php
    define('ABSPATH', __DIR__);
    include ABSPATH . "/config.php";
    include ABSPATH . "/templates/header.php";
?>


<div class="content">
  <div class="wrapper mimg2" id= "wrapper-1">
                    
            <div class="frontbox sky">
                        <h1 class="heading"  >How Far Will You Go</h1>
                        <p class="tagline">Faster than you Think!</p>
                        
            </div>
  </div>
  <br>
          <div class="wrapper" >
                    <p  id="midheading" >
                    The best thing about Delhi's transport service providers is that they are extremely knowledgeable and the best transporters services in Delhi, India, with the primary goal of assisting clients in finding quality transport and goods carriers and allaying their concerns about moving goods or goods with the help of thorough professionalism and cutting-edge methods and procedures like Delhi's transporters. 
                    </p>
                    <br>
                    <br>

                <div id="dropdiv">
                    
                    <div class="topline2">
                        <h1>INTERESTED AREA</h1>
                    </div>
                    <!-- my drop down -->
                    <div class=" wrapper main-dropdown" >
                           <p class="whitetext">-------select------</p>
                           <p><img src="./images/polygon.svg"/></p>
                    </div>
                        <ul class=" wrapper whitetext" id="dropdown-list">
                                <li id = "list1">Real Estate Partner </li>
                                <li id = "list2">Food Service Requirements Partner </li>
                                <li id = "list3">Food & Beverage Brands Partner </li>
                                <li id = "list4">Franchisees</li>
                                <li id = "list5">Brand and Marketing Alliances</li>
                        </ul>
                  </div>
            </div>
                <br>
                <br>

           </div>

<div id="list1_1">
<?php

include ABSPATH . "/templates/realestate.php";

?>
</div>
<div id="list2_2">
<?php

include ABSPATH . "/templates/fsrp.php";

?>
</div>
<div id="list3_3">
<?php

include ABSPATH . "/templates/foodnBB.php";

?>
</div>
<div id="list4_4">
<?php

include ABSPATH . "/templates/franchisees.php";

?>
</div>
<div id="list5_5">
<?php

include ABSPATH . "/templates/BandM.php";

?>
</div>




</div>
<script>
  let l1 = document.getElementById("list1_1");

let l2 = document.getElementById("list2_2");


let l3 = document.getElementById("list3_3");


let l4 = document.getElementById("list4_4");


let l5 = document.getElementById("list5_5");




    $(document).ready(function(){
        $("#dropdown-list").hide();
        
        $("#list1_1").hide();
        $("#list2_2").hide();
        $("#list3_3").hide();
        $("#list4_4").hide();
        $("#list5_5").hide();
    $(".main-dropdown").click(function(){
      $(".main-dropdown + #dropdown-list").toggle("fast" );
    });
    $("#list1").click(function(){
      $("#list1_1").toggle("fast" );
      l2.style.display="none";
      l3.style.display="none";
      l4.style.display="none";
      l5.style.display="none";
    });

    $("#list2").click(function(){
      $("#list2_2").toggle("fast" );
      l1.style.display="none";
      l3.style.display="none";
      l4.style.display="none";
      l5.style.display="none";
    });
    $("#list3").click(function(){
      $("#list3_3").toggle("fast" );
      l2.style.display="none";
      l1.style.display="none";
      l4.style.display="none";
      l5.style.display="none";
    });
    $("#list4").click(function(){
      $("#list4_4").toggle("fast" );
      l2.style.display="none";
      l3.style.display="none";
      l1.style.display="none";
      l5.style.display="none";
    });



    $("#list5").click(function(){
      $("#list5_5").toggle("fast" );
      l2.style.display="none";
      l3.style.display="none";
      l4.style.display="none";
      l1.style.display="none";
    });




    $("#cross").click(function () {
      $('#menu-overlay').removeClass("active")
    })
    $(".hamburger").click(function () {
      $('#menu-overlay').addClass("active")
    });
  });
</script>

<?php
 include ABSPATH . "/templates/footer.php"
?>