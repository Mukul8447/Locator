<?php
    define('ABSPATH', __DIR__);
    include ABSPATH . "/config.php";
    include ABSPATH . "/templates/header.php";
?>
<div class="content">
        <div class="wrapper mimg2" id= "wrapper-1">
                            
                <div class="frontbox sky">
                            <h1 class="heading"  >Contact Us</h1>
                            <p class="tagline">Easy and Secure Services Providing prompt and online pace services in my area You may now instantly rent a tempo & van service online that is close to you. At Locator, we collaborate with the top tempo & van providers that provide inexpensive online booking. You only need to send your request, and the Van & Tempo service provider will get in touch with you right away. After you have prices and availability, you can then reserve a Van & Tempo online.</p>
                            
                </div>
        </div>

                <div class="wrapper">

                      <div class="wrapper">
                      <p id="midheading">
                   

                    </p><br><br>
                        




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