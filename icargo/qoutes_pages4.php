<?php include 'connection.php';  ?>
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
            <h1>Get A Quote</h1>
            <span>feel free to send us a quote now!</span>
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
                $brand_name=$_POST['brand_name'];
                $brand_price=$_POST['brand_price'];

                $senders_name=$_POST['senders_name'];
                $senders_emailadd=$_POST['senders_emailadd'];
                $senders_contactnum=$_POST['senders_contactnum'];
                $senders_address=$_POST['senders_address'];
                $senders_company=$_POST['senders_company'];
                $senders_landmark=$_POST['senders_landmark'];
                $senders_pickdate=$_POST['senders_pickdate'];
                $consignee_name=$_POST['consignee_name'];
                $consignee_contactnum=$_POST['consignee_contactnum'];
                $consignee_address=$_POST['consignee_address'];
                $consignee_landmark=$_POST['consignee_landmark'];



                
                  // INSERTING TO DATABASE
                  if(isset($_POST['submit'])){
                                      $ref = sprintf("%'012d",mt_rand(0, 999999999999));

                  $query = mysqli_query($conn , "INSERT INTO parcels (reference_number,sender_name,sender_address,sender_contact,recipient_name,recipient_address,recipient_contact,type,from_branch_id,to_branch_id,weight,height,width,length,price,status)
                  VALUES ('$ref','$senders_name','$senders_address','$senders_contactnum','$consignee_name','$Consignee_address','$consignee_contactnum','1','2','1','$weight','$height','$width','4','5','6')") or die(mysqli_error());
                
                      // $query2 = mysqli_query($conn , "INSERT INTO freetable (namedb,age)
                      // VALUES ('$senders_name','BIVE')") or die(mysqli_error());
                  ?>
                  <script type="text/javascript">
                      alert("Successfully sent, Thank You!");
                      window.location= "index.php";
                  </script>
              <?php
                  }

              ?>
              <form id="contact" action="qoutes_pages5.php" method="post">
                <div class="row" style="position:relative;justify-content:center;display:flex;align-items:center;">
                <input type="hidden" name="origin_city" value="<?php echo $origin_city;?>">
                    <input type="hidden" name="destination" value="<?php echo $destination;?>">
                    <input type="hidden" name="weight" value="<?php echo $weight;?>">
                    <input type="hidden" name="width" value="<?php echo $width;?>">
                    <input type="hidden" name="length" value="<?php echo $length;?>">
                    <input type="hidden" name="height" value="<?php echo $height;?>">
                    <input type="hidden" name="brand_name" value="<?php echo $brand_name;?>">
                    <input type="hidden" name="brand_price" value="<?php echo $brand_price;?>">
                    <input type="hidden" class="master__input" placeholder="Sender's Name" id="senders_name"  name="senders_name" value="<?php echo $senders_name;?>">
                    <input type="hidden" class="master__input" placeholder="Sender's Email Address" id="senders_emailadd" name="senders_emailadd" value="<?php echo $senders_emailadd;?>"> 
                    <input type="hidden" class="master__input" placeholder="Sender's Contact Number" id="senders_contactnum" name="senders_contactnum" value="<?php echo $senders_contactnum;?>">
                    <input type="hidden" class="master__input" placeholder="Sender's Address" id="senders_address" name="senders_address" value="<?php echo $senders_address;?>">
                    <input type="hidden" class="master__input" placeholder="Company Name/Department" id="senders_company" name="senders_company" value="<?php echo $senders_company;?>">
                    <input type="hidden" class="master__input" placeholder="Nearest Landmark" id="senders_landmark" name="senders_landmark" value="<?php echo $senders_landmark;?>">   
                    <input type="hidden" class="master__input" placeholder="Pickup Date" id="senders_pickdate" name="senders_pickdate"  value="<?php echo $senders_pickdate;?>"  >
                    <input type="hidden" class="master__input" placeholder="Consignee's Name" id="consignee_name" name="consignee_name" value="<?php echo $consignee_name;?>">
                    <input type="hidden" class="master__input" placeholder="Consignee's Contact Number" id="consignee_contactnum" name="consignee_contactnum" value="<?php echo $consignee_contactnum;?>">
                    <input type="hidden" class="master__input" placeholder="Consignee's Address" id="Consignee_address" name="consignee_address" value="<?php echo $consignee_address;?>">   
                    <input type="hidden" class="master__input" placeholder="Nearest Landmark" id="consignee_landmark" name="consignee_landmark" value="<?php echo $consignee_landmark;?>">  
                  
                  <select class="btn btn-primary col-lg-5 mb-3" style="position:relative;justify-content:center;display:flex;align-items:center;" name="paymentoption" id="payment_option">
                    <option value="Prepaid" class="dropdown-item">Prepaid - Cash, by the shipper </option>
                    <option value="Freight" class="dropdown-item">Freight Collect -  Cash. by consignee</option>
                    <option value="Other" class="dropdown-item">Other</option>
                  </select>

                  <div class="col-lg-8 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Remarks" required="">
                    </fieldset>
                  </div>
                  
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit"  class="filled-button">Next</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="partners"  style="margin-top:0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel owl-carousel3">
            
              <div class="partner-item">
                <img src="assets/images/gcash.png" title="1" alt="1">
              </div>
              
              <div class="partner-item">
                <img src="assets/images/paypal.png" title="2" alt="2">
              </div>
              
              <div class="partner-item">
                <img src="assets/images/visa.png" title="3" alt="3">
              </div>
              
              <div class="partner-item">
                <img src="assets/images/mastercard.png" title="4" alt="4"   >
              </div>
              
             
            </div>
          </div>
        </div>
      </div>
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
    function myFunction(x) {
      if (x.matches) { // If media query matches
        // For partners logo
        owl = $(".owl-carousel2");
        owl.owlCarousel({
        loop:true,
        autoplaySpeed:160,
        items:1,
        autoplay:true
        });

      } else {
        owl = $(".owl-carousel2");
        owl.owlCarousel({
        loop:true,
        autoplaySpeed:160,
        items:4,
        autoplay:true
        });
      
        }
      }

    var x = window.matchMedia("(max-width: 700px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction) // Attach listener function on state changes
  </script>
     
     <script>

function myFunction(x) {
  if (x.matches) { // If media query matches
    // for testimonials
    owl = $(".owl-carousel3");
    owl.owlCarousel({
    loop:true,
    autoplaySpeed:1000,
    autoplayTimeout: 2000,

    items:1,
    margin:25,
    autoplay:true
    });

  } else {
    owl = $(".owl-carousel3");
    owl.owlCarousel({
    loop:true,
    autoplaySpeed:1600,
    autoplayTimeout: 2000,

    items:3,
    margin:25,

    autoplay:true
    });
  
    }
  }

var x = window.matchMedia("(max-width: 700px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes
</script>
  </body>
</html>