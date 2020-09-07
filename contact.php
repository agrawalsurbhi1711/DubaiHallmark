<!DOCTYPE html>
<?php
  require_once('common.php');
?>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hallmark Tourism - Contact US</title>
  <?php
    common_CSS();
  ?>
</head>
<body class="body-wrapper ">
  <div class="main-wrapper">
  <?php
    common_Header();
  ?>
    <section class="mainContentSection">
      <div class="container">
        <div class="row">
        <h1 class="pageHeader">get in touch</h1>
          <div class="col-sm-6 col-md-7 col-xs-12 col-lg-8 formBorder" >
            <div class="contactForm">
              <form action="#" method="POST" role="form" class="form" id="contactForm">
                <div class="form-group">
                  <input type="text" class="form-control" name="contactName" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="contactEmail" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" name="contactMobile" placeholder="Your Phone" required>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="contactMessage" placeholder="Your Message"></textarea>
                </div>
                <button type="submit" name="submit" class="btn buttonCustomPrimary">Send Message</button>
              </form>
            </div>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-4 col-xs-12">
            <div class="contactInfo">
              <div class="media">
                <a class="media-left" >
                  <i class="fa fa-phone" aria-hidden="true"></i>
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Phone number</h4>
                  <p>+91 - 8209773308</p>
                </div>
              </div>
              <div class="media">
                <a class="media-left" >
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                </a>
                <div class="media-body">
                  <h4 class="media-heading">email us</h4>
                  <p>
                     <a href="mailTo:harshh@hallmarktourism.com">harshh@hallmarktourism.com</a>
                  </p>
                </div>
              </div>
              <div class="media">
                <a class="media-left" >
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                </a>
                <div class="media-body">
                  <h4 class="media-heading">address</h4>
                  <p>4/216, Chitrakoot, Vaihali Nagar<br>Jaipur, Rajasthan, India</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
      common_Footer();
      common_JS();
    ?>
    <script type="text/javascript">
      $('#contactForm').on('keyup keypress', function(e){
          var keyCode = e.keyCode || e.which;
          if(keyCode === 13){
              e.preventDefault();
              return false;
          }
      });
      $('form').submit(function(e){
          e.preventDefault();
          $.ajax({
              url: 'dataContact.php',
              type:'post',
              data: $(this).serialize(),
              success:function(data){    
                 window.location = 'thankYou.php';
              }
          });    
      });
    </script>
    </div>
  </body>
</html>
