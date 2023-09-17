<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Pricing</title>
  <link rel="stylesheet" href="css\pricing.css">

  <script type="text/javascript">
    function change() {
      window.location.href = "registration.php";
    }
    function rtohome() {
      window.location.href = "index.php";
    }
  </script>
</head>

<body>
  <div class="Nav" id="Nav1">
    <div class="NavbarContainer">
      <img src="images/fiem1.jpg" alt="" class="NavLogo" onclick="rtohome()">
      <div class="MobileIcon">
        <i class="fa fa-bars"></i>
      </div>
      <ul class="NavMenu ">
        <li class="NavItem"><a id="linkcolor" on class="NavLinks" href="index.php#about">About</a></li>
        <li class="NavItem"><a id="linkcolor1" class="NavLinks" href="pricing.php">Pricing</a></li>
        <li class="NavItem"><a id="linkcolor2" class="NavLinks" href="index.php#contact">Contact Us</a></li>
        <li class="NavItem"><a id="linkcolor3" class="NavLinks" href="signin.php">Sign in</a></li>
      </ul>
      <div class="NavBtn">
        <button type="button" name="button" class="NavBtnLink" onclick="change()">Signup</button>
      </div>

    </div>
  </div>



  <div class="pricingcontainer">
    <div class="pricingwrapper">
      <div class="columns">
        <ul class="price">
          <li class="header">A block <span style="font-size:15px">(Male)</span></li>
          <div class="imagewrapper">
            <img style="height:150px; width:150px;" src="images/1.jpg" alt="">
          </div>

          <li class="grey">8 Thousand/month</li>
          <li>Best Food Quality</li>
          <li>Free Washing</li>
          <li>Common TV</li>
          <li>Free Wifi</li>
          <!-- <li class="grey"><a class="button">Male</a></li> -->
        </ul>
      </div>


      <div class="columns">
        <ul class="price">
          <li class="header">B block <span style="font-size:15px">(Male)</span></li>
          <div class="imagewrapper">
            <img style="height:150px; width:150px;" src="images/2.jpg" alt="">
          </div>

          <li class="grey">7 Thousand/ month</li>
          <li>Best Food Quality</li>
          <li>Common reading room</li>
          <li>Furnished Room</li>
          <li>Free Wifi</li>
          <!-- <li class="grey"><a href="signin.php" class="button">Select</a></li>
</ul> -->
      </div>

      <div class="columns">
        <ul class="price">
          <li class="header">C block <span style="font-size:15px">(Male)</span></li>
          <div class="imagewrapper">
            <img style="height:150px; width:150px;" src="images/3.jpg" alt="">
          </div>

          <li class="grey">6 Thousand/ month</li>
          <li>Free Room Maintainance</li>
          <li>Paid Wifi Facility</li>
          <li>Best Food Quality</li>
          <li>Free Air Cooler</li>
          <!-- <li class="grey"><a href="signin.php" class="button">Select</a></li> -->
        </ul>
      </div>


      <div class="columns">
        <ul class="price">
          <li class="header">D block<span style="font-size:15px">(Female)</span></li>
          <div class="imagewrapper">
            <img style="height:150px; width:150px;" src="images/4.jpg" alt="">
          </div>

          <li class="grey">8 Thousand/ month</li>
          <li>Best Food Quality</li>
          <li>Free Washing</li>
          <li>Common TV</li>
          <li>Free Wifi</li>
          <!-- <li class="grey"><a href="signin.php" class="button">Select</a></li> -->
        </ul>
      </div>


      <div class="columns">
        <ul class="price">
          <li class="header">E block<span style="font-size:15px">(Female)</span></li>
          <div class="imagewrapper">
            <img style="height:150px; width:150px;" src="images/5.jpg" alt="">
          </div>

          <li class="grey">7 Thousand/ month</li>
          <li>Best Food Quality</li>
          <li>Common reading room</li>
          <li>Furnished Room</li>
          <li>Free Wifi</li>
          <!-- <li class="grey"><a href="signin.php" class="button">Select</a></li> -->
        </ul>
      </div>


      <div class="columns">
        <ul class="price">
          <li class="header">F block<span style="font-size:15px">(Female)</span></li>
          <div class="imagewrapper">
            <img style="height:150px; width:150px;" src="images/6.jpg" alt="">
          </div>

          <li class="grey">6 Thousand/ month</li>
          <li>Free Room Maintainance</li>
          <li>Paid Wifi Facility</li>
          <li>Best Food Quality</li>
          <li>Free Air Cooler</li>
          <!-- <li class="grey"><a href="signin.php" class="button">Select</a></li> -->
        </ul>
      </div>

    </div>
  </div>

</body>

</html>