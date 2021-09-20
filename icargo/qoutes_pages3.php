<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> -->

    <title>Icargo | We are here to move it for you </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/icargologo.ico" rel="icon">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-clock-o"></i>Mon-Fri 09:00-17:00</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>0917-692-4203</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
        <a class="navbar-brand icargo-navbar" href="index.php"><h2 style=""><img src="assets/icargologo.png" width="40" alt=""> ICARGO&nbsp<font color="orange">PACIFIC</font></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php">Our Services</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Get A Qoute</h1>
            <span>feel free to send us a qoute now!</span>
          </div>
        </div>
      </div>
    </div>
 

    
    <div class="callback-form contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Personal <em>Details</em></h2>
              <span>Please fill out the form below.</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
            <?php 
              $origin_city=$_POST['origin_city'];
              $destination=$_POST['destination'];
              $weight=$_POST['weight'];
              $width=$_POST['width'];
              $height=$_POST['height'];
              $length=$_POST['length']; 

              // get the first and second value of radio button
              $brand= explode(",", $_POST['brand']);
              $brand_name=$brand[0];
              $brand_price=$brand[1];

            ?>
            <!-- Form start here -->
              <form id="contact" action="qoutes_pages4.php" method="post">
                <div class="row">
                  <input type="hidden" name="origin_city" value="<?php echo $origin_city;?>">
                  <input type="hidden" name="destination" value="<?php echo $destination;?>">
                  <input type="hidden" name="weight" value="<?php echo $weight;?>">
                  <input type="hidden" name="width" value="<?php echo $width;?>">
                  <input type="hidden" name="length" value="<?php echo $length;?>">
                  <input type="hidden" name="height" value="<?php echo $height;?>">
                  <input type="hidden" name="brand_name" value="<?php echo $brand_name;?>">
                  <input type="hidden" name="brand_price" value="<?php echo $brand_price;?>">

                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="senders_name" type="text" class="form-control" id="name" placeholder="Sender's Name" required="">
                    </fieldset>
                  </div><wbr>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="senders_emailadd" type="text" class="form-control" id="name" placeholder="Sender's Email Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="senders_company" type="text" class="form-control" id="name" placeholder="Company Name/Department" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="senders_contactnum" type="text" class="form-control" id="name" placeholder="Sender's Contact Number" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="senders_address" type="text" class="form-control" id="name" readonly required="" value="<?php echo $origin_city;?>">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="senders_landmark" type="text" class="form-control" id="name" placeholder="Nearest Landmark"   required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="senders_pickdate" type="text" class="form-control" id="name"  onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Pickup Date"   required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="consignee_name" type="text" class="form-control" id="name" placeholder="Consignee's Name"  required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="consignee_contactnum" type="text" class="form-control" id="name" placeholder="Consignee's Contact Number" required="">
                    </fieldset>
                  </div>
                 
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="consignee_address" type="text" class="form-control" id="name" readonly required="" value="<?php echo $destination;?>">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="consignee_landmark" type="text" class="form-control" id="name" placeholder="Nearest Landmark" required="">
                    </fieldset>
                  </div>

                  
                  
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Next</button>
                    </fieldset>
                  </div>
                </div>
              </form>
              <!-- Form End Here -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="map">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.8365139567723!2d121.05111871502558!3d14.551339889833786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8f3abe7b333%3A0xe4c75f876665f8c8!2sBGC%20Corporate%20Center%2C%2030th%20Street%20corner%2011th%20Avenue%2C%2030th%20St%2C%20Taguig%2C%20Kalakhang%20Maynila!5e0!3m2!1sen!2sph!4v1623736000175!5m2!1sen!2sph" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <div class="partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel owl-carousel2">
            
              <div class="partner-item">
                <img src="assets/images/transportify-logo-green-2.png" title="1" alt="1">
              </div>
              
              <div class="partner-item">
                <img src="assets/images/CaPEx-Logo.png" title="2" alt="2">
              </div>
              
              <div class="partner-item">
                <img src="assets/images/jrs-express-logo-main.png" title="3" alt="3">
              </div>
              
              <div class="partner-item">
                <img src="assets/images/AP-Cargo-Logo-White.png" title="4" alt="4" style="background: rgb(247, 203, 10);">
              </div>

              <div class="partner-item">
                <img src="assets/images/fed.png" title="4" alt="4" >
              </div>
              
              <div class="partner-item">
                <img src="assets/images/1200px-LBC_Express_2013_Logo.svg.png" title="5" alt="5" style="width: 100px;"> 
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
          <h4><img src="assets/icargolo2.png" width="170" alt=""></h4>
            <p>Let's GO beyond logistics, make the world go round and revolutionize business.</p>
            <ul class="social-icons">
              <li><a rel="nofollow" href="https://fb.com/templatemo" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Social Media</h4>
            <ul class="menu-list">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Instagram</a></li>
              <li><a href="#">LinkedIn</a></li>
              <li><a href="#">Twitter</a></li>
        
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href="#">About Us</a></li>
              <li><a href="#">How We Work</a></li>
              <li><a href="#">Quick Support</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item last-item">
            <h4>Contact Us</h4>
            <div class="contact-form">
              <form id="contact footer-contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Copyright &copy; 2020 ICARGO Co., Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://teravisioncorp.com" target="_blank">Teravision Corporation</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
      <script>
    owl = $(".owl-carousel2");
    owl.owlCarousel({
    loop:true,
    autoplaySpeed:160,
    items:4,
    autoplay:true
    });
    </script>

  </body>
</html>