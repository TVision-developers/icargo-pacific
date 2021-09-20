<?php include 'connection.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>

html {
  box-sizing: border-box;
  font-family: 'Open Sans', sans-serif;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.background {
  padding: 0 25px 25px;
  position: relative;
  width: 100%;
}

.background::after {
  content: '';
  background: #60a9ff;
  background: -moz-linear-gradient(top, #60a9ff 0%, #4394f4 100%);
  background: -webkit-linear-gradient(top, #60a9ff 0%,#4394f4 100%);
  background: linear-gradient(to bottom, #60a9ff 0%,#4394f4 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#60a9ff', endColorstr='#4394f4',GradientType=0 );
  height: 350px;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 1;
}

@media (min-width: 900px) {
  .background {
    padding: 0 0 25px;
  }
}

.container {
  margin: 0 auto;
  padding: 50px 0 0;
  max-width: 960px;
  width: 100%;
}

.panel {
  background-color: #fff;
  border-radius: 10px;
  padding: 15px 25px;
  position: relative;
  width: 100%;
  z-index: 10;
}

.pricing-table {
  box-shadow: 0px 10px 13px -6px rgba(0, 0, 0, 0.08), 0px 20px 31px 3px rgba(0, 0, 0, 0.09), 0px 8px 20px 7px rgba(0, 0, 0, 0.02);
  display: flex;
  flex-direction: column;
}

@media (min-width: 900px) {
  .pricing-table {
    flex-direction: row;
  }
}

.pricing-table * {
  text-align: center;
  text-transform: uppercase;
}

.pricing-plan {
  border-bottom: 1px solid #e1f1ff;
  padding: 25px;
}

.pricing-plan:last-child {
  border-bottom: none;
}

@media (min-width: 900px) {
  .pricing-plan {
    border-bottom: none;
    border-right: 1px solid #e1f1ff;
    flex-basis: 100%;
    padding: 25px 50px;
  }

  .pricing-plan:last-child {
    border-right: none;
  }
}

.pricing-img {
  margin-bottom: 25px;
  max-width: 100%;
}

.pricing-header {
  color: #888;
  font-weight: 600;
  letter-spacing: 1px;
}

.pricing-features {
  color: #016FF9;
  font-weight: 600;
  letter-spacing: 1px;
  margin: 50px 0 25px;
}

.pricing-features-item {
  border-top: 1px solid #e1f1ff;
  font-size: 12px;
  line-height: 1.5;
  padding: 15px 0;
}

.pricing-features-item:last-child {
  border-bottom: 1px solid #e1f1ff;
}

.pricing-price {
  color: #016FF9;
  display: block;
  font-size: 32px;
  font-weight: 700;
}

.pricing-button {
  border: 1px solid #9dd1ff;
  border-radius: 10px;
  color: #348EFE;
  display: inline-block;
  margin: 25px 0;
  padding: 15px 35px;
  text-decoration: none;
  transition: all 150ms ease-in-out;
}

.pricing-button:hover,
.pricing-button:focus {
  background-color: #e1f1ff;
}

.pricing-button.is-featured {
  background-color: #48aaff;
  color: #fff;
}

.pricing-button.is-featured:hover,
.pricing-button.is-featured:active {
  background-color: #269aff;
}
</style>
</head>

<body>
<div class="background">
  <div class="container">
    <div class="panel pricing-table" style="display:flex;justify-content:center;align-items:center;list-style:none;">
        <?php
            $origin_city=$_POST['origin_city'];
            $destination=$_POST['destination'];
            $weight=$_POST['weight'];
            $width=$_POST['width'];
            $length=$_POST['length'];
            $height=$_POST['height'];
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

              $query = mysqli_query($conn , "INSERT INTO parcels (reference_number,sender_name,sender_address,sender_contact,recipient_name,recipient_address,recipient_contact,type,from_branch_id,to_branch_id,weight,height,width,length,price,status,brand_name,brand_price)
              VALUES ('$ref','$senders_name','$senders_address','$senders_contactnum','$consignee_name','$consignee_address','$consignee_contactnum','1','2','1','$weight','$height','$width','4','5','6','$brand_name','$brand_price')") or die(mysqli_error());
            

            // For sending Customer information for Job order
            $fromEmail = "info@icargopacific.com";
            $toEmail = $senders_emailadd;
            $subjectName = "Icargo Job Order";
            $message = "Hi this is an Example";
        
            $to = $toEmail;
            $subject = $subjectName;
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
            $message = '<!doctype html>
              <html lang="en">
              <head>
                <meta charset="UTF-8">
                <meta name="viewport"
                    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Document</title>
              </head>
              <body>
              <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
                <div class="container">
                    Dear Valued Customer,  <br/><br/>

                    Thank you for choosing iCargo Pacific!<br/><br/>
                    
                    Package Information: <br/><br/>

                    
                    
                    Sender Name: '.$senders_name.'<br/>
                    Sender Address: '.$senders_address.'<br/>
                    Sizes: ('.$weight.', '.$width.', '.$height.', '.$length.' ) <br/>
                    Recipient Name: '.$consignee_name.'<br/>
                    Recipient Address: '.$consignee_address.'<br/>
                    Tracking number: '.$ref.'<br/>
                    Land Mark: '.$consignee_landmark.'<br/><br/>
                    
                    Pick-up date for delivery: '.$senders_pickdate.'<br/><br/>
                    
                    We provide AFFORDABLE services, INSURED, SAFE and ON-TIME DELIVERY of your Package! <br/><br/>
                    
                    Sit back and relax, your package is on the way!<br/><br/><br/>
                    
                    
                    Regards,<br/>
                    iCargo Pacific
                    
                </div>
              </body>
              </html>';
            $result = @mail($to, $subject, $message, $headers);

              ?>
              <script type="text/javascript">
                  alert("Successfully sent, Thank You!");
                  window.location= "index.php";
              </script>
          <?php
              }
        ?>
    <form action="qoutes_pages5.php" method="post">
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

        <div class="pricing-plan" >
        <img src="https://s28.postimg.cc/ju5bnc3x9/plane.png" alt="" class="pricing-img">
        <h2 class="pricing-header">Customer Information</h2>
        <ul class="pricing-features">
          <li class="pricing-features-item">Sender's Name: <h2><?php echo $senders_name;?></h2></li>
          <li class="pricing-features-item">Sender's Address:<h2><?php echo $senders_address;?></h2></li>
          <li class="pricing-features-item">Sender's Email: <h2><?php echo $senders_emailadd;?></h2> </li>
          <li class="pricing-features-item">Sender's Contact Number: <h2><?php echo $senders_contactnum;?></h2> </li>
          <li class="pricing-features-item">Pick Up date: <h2><?php echo $senders_pickdate;?></h2> </li>
          <li class="pricing-features-item">Recipient's Name:<h2><?php echo $consignee_name;?></h2></li>
          <li class="pricing-features-item">Recipient's Address:<h2><?php echo $consignee_address;?></h2> </li>
          <li class="pricing-features-item">Recipient's Contact Number:<h2><?php echo $consignee_contactnum;?></h2></li>
        </ul>
        <span class="pricing-price"></span>
        <button type="submit" id="form-submit" name="submit" class="pricing-button is-featured">SUBMIT</button>
      </div>    
    </form>
    </div>
  </div>
</div>
</body>
</html>