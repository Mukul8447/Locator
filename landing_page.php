<?php $id = $_GET['wheeler_id']; ?>
<?php
    define('ABSPATH', __DIR__);
    include ABSPATH . "/config.php";
    include ABSPATH . "/templates/header.php"
?>

<div class="content">
  <div class="wrapper padding-top-20"  id= "wrapper-1">
      <div class="landing-parent">
        <!-- <form action="">
       
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
      </form> -->

      <div class="w-full max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
  <h1 class="landing-head">Booking Information</h1>
    <div class="mb-4">
    <fieldset>
            <legend class="block text-gray-700 text-sm font-bold mb-2">Select City*</legend>
            <select name="" id="">
              <option value="1">Delhi NCR</option>
              <option value="2">Noida</option>
              <option value="3">Gurugram</option>
              <option value="3">Faridabad</option>
            </select>
          </fieldset>
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Pick up Address">
        Pickup Address*
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Pickup Adress" type="text" placeholder="Enter pickup address">
    
    <div class="mb-6">
    </fieldset>
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Pick up Address">
        Drop Address*
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Enter drop Adress" type="text" placeholder="Enter drop address">
    

      </fieldset>
      </div>
      <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Pick up Address">
        Phone Number*
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Phone Number" type="text" placeholder="Enter your phone number">
</div>
      </fieldset>
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Pick up Address">
        Email Address (Optional)*
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Enter your email adress" type="text" placeholder="Enter your email address">
    
      </fieldset>
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Pick up Address">
        Name
      </label>
      <input class="text-xs shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Enter your name" type="text" placeholder="Enter your name">
    
    
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
      Get Estimate
      </button>
      </a>
    </div>
  </form>
</div>
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