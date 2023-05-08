<?php $id = $_GET['wheeler_id']; ?>
<?php
    define('ABSPATH', __DIR__);
    include ABSPATH . "/config.php";
    include ABSPATH . "/templates/header.php"
?>

<div class="content">
  <div class="wrapper padding-top-20"  id= "wrapper-1">
      <div class="landing-parent">
        <form action="">
        <h1 class="landing-head">Booking Information</h1>
          <fieldset>
            <legend>city</legend>
            <select name="" id="">
              <option value="1">Delhi NCR</option>
              <option value="2">Noida</option>
              <option value="3">Gurugram</option>
              <option value="3">Faridabad</option>
            </select>
          </fieldset>

          <fieldset>
            <legend>Pickup Address</legend>
            <textarea name="" id="" cols="3" rows="1"></textarea>
          </fieldset>

          <fieldset>
            <legend>Dropoff Address</legend>
            <textarea name="" id="" cols="3" rows="1"></textarea>
          </fieldset>

          <input type="text" placeholder="Name Optional">
          <fieldset>
            <legend>Mobile Number</legend>
            <input type="text" maxlength="10">
          </fieldset>
          <input type="button" value="Get Estimate">
      </form>
      </div>
  </div>




</div>



<script>
$(document).ready(function(){


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