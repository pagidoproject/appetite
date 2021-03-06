
<!DOCTYPE html>
<html>
  <head>
    <title>The Appetite Momos | Franchise Form</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>The Appetite Momos</title>

   <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/logo.jpg" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">   
     <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet"> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">    

 
    <!-- Google Fonts -->

    <!-- Prata for body  -->
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    <!-- Tangerine for small title -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
    <!-- Open Sans for title -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    


    <style>
      body {
        background-image: url("assets/img/fbg.jpg");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
      .fran {
        margin-top: 120px;
        background-color: white;
        border: 2px #ccc solid;
        border-radius: 5px;
        width: 500px;
        height: 800px;
        box-shadow: 2px 3px 10px rgb(184, 184, 184);
        margin-bottom: 50px;
      }

      /* Sign Up */
      #main-title {
        /* border: 2px red solid; */
        text-align: center;
        font-size: 25px;
        padding: 30px 30px 10px 30px;
        font-weight: 700;
        color: rgb(20, 20, 20);
      }

      /* It only takes a minute! */
      #subtitle {
        text-align: center;
        font-size: 14px;
        color: rgb(70, 70, 70);
      }

      form {
        /* border: 2px red solid; */
        padding: 20px 40px 20px 40px;
      }

      .placeholders {
        /* border: 2px red solid; */
        height: 85px;
      }

      .placeholders > label {
        display: block;
        margin-bottom: 10px;
        font-size: 12px;
        /* border: 2px red solid; */
      }

      .placeholders input {
        /* border: 2px red solid; */
        width: 100%;
        height: 35px;
      }

      input::placeholder {
        font-family: "Montserrat";
        /* border: 2px red solid; */
      }

      .terms-conditions {
        /* border: 2px red solid; */
      }

      #terms-conditions {
        display: inline;
        font-size: 13px;
        color: black;
        /* border: 2px red solid; */
      }

      #a-submit {
        display: block;
        margin: auto;
        text-align: center;
        padding: 10px 30px 10px 30px;
        font-family: "Montserrat", "sans-serif";
        border: 2px solid #eb2f06;
        background-color: white;
        border-radius: 3px;
        cursor: pointer;
        width: 110px;
        font-size: 14px;
        color: #eb2f06;
        font-weight: 700;
        -webkit-transition: all 0.43s ease;
      }

      #a-submit:hover {
        border: 1px solid #eb2f06;
        background-color: #eb2f06;
        color: white;
        width: 50%;
         box-shadow: 2px 3px 10px #eb2f06;
      }

      #a-submit:active {
        width: 40%;
       box-shadow: 2px 3px 10px #eb2f06;
      }
    </style>
  </head>

  <body style="overflow-x: hidden;">
    <!-- Start header section -->
    <header id="mu-header">
      <nav class="navbar navbar-default mu-main-navbar" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
            <button
              type="button"
              class="navbar-toggle collapsed"
              data-toggle="collapse"
              data-target="#navbar"
              aria-expanded="false"
              aria-controls="navbar"
            >
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <!-- LOGO -->

            <!--  Text based logo  -->
            <a class="navbar-brand" href="index.html">TheAppetiteMomos</a>            >

            <!--  Image based logo  -->
            <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Logo img"></a>  -->
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
              <li><a href="index.php">HOME</a></li>
              <li><a href="index.php#mu-about-us">ABOUT US</a></li>
              <li><a href="index.php#mu-restaurant-menu">OUR MENU</a></li>
              <li><a href="storelocator.html">STORE LOCATOR</a></li>
              <li><a href="index.php#mu-gallery">GALLERY</a></li>
              <li><a href="franchise.php">OWN A FRANCHISE</a></li>
              <li><a href="index.php#mu-contact">CONTACT</a></li>
            </ul>
          </div>
          <!--/.nav-collapse -->
        </div>
      </nav>
    </header>
    <!-- End header section -->
    <div class="container fran">
      <h1 id="main-title">Please Fill This</h1>
      <p id="subtitle">It only takes a minute!</p>
      <form action="user_process.php" method="post">
        <div id="first-name" class="placeholders">
          <label id="Name" for="text" class="">Name</label>
          <input required id="" type="text" name="Name" placeholder="Enter your name..."/>
        </div>

        <div id="email" class="placeholders">
          <label id="Email" for="text" class="">Email</label>
          <input required id="" type="email" name="Email" placeholder="Enter your email..."/>
        </div>

        <div id="cont" class="placeholders">
          <label id="Contact" for="text" class="">Contact</label>
          <input required id="" type="text" name="Contact" maxlength="12" placeholder="Enter your Contact..."/>
        </div>

        <div id="area" class="placeholders">
          <label id="Area" for="text" class="">Area</label>
          <input required id="" type="text" name="Area" placeholder="Enter your Area..."/>
        </div>

        <div id="city" class="placeholders">
          <label id="City" for="text" class="">City</label>
          <input required id="" type="text" name="City" placeholder="Enter your City..."/>
        </div>

        <div id="State" class="placeholders">
          <label id="State" for="text" class="">State</label>
          <input required id="" type="text" name="State" placeholder="Enter your State..."/>
        </div>
        <br />

        <button onclick="Submit" name="Submit" id="a-submit" href="#">Submit</button>
      </form>
    </div>
    <!-- footer -->
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo"><a href="#"><img src="assets/img/logo.jpg"></a></h2><a>
                </div>
                <div class="col-sm-2">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php#mu-restaurant-menu">Our Menu</a></li>
                        <li><a href="index.php#mu-gallery">Gallery</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="storelocator.html">Store Locator</a></li>
                        <li><a href="franchise.php">Own A Franchise</a></li>
                        <li><a href="index.php#mu-about-us">About</a></li>
                    </ul>
                </div>
                <!-- <div class="col-sm-2">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div> -->
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="https://twitter.com/MomosAppetite" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/TheAppetitemomosofficial/" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/theappetitemomosofficial/" class="instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                    <button type="button" class="btn btn-default">Contact us</button>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2019 Appetite Momos Thane Mumbai </p>
        </div>
    </footer>
      <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script> 
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/simple-animated-counter.js"></script>
  <!-- Gallery Lightbox -->
  <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script> 
  <!-- Ajax contact form  -->
  <script type="text/javascript" src="assets/js/franchise.js"></script>
 
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 
     <!-- script -->
    <script src="jquery-3.3.1.min.js"></script>
  </body>
</html>
