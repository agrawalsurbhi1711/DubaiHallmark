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
  <title>Hallmark Tourism - Get Quote</title>
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
          <h1 class="pageHeader">Get Quotation</h1>
          <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12" style="margin-top:3%;">
            <div class="contactForm">
              <form action="#" method="POST" role="form" class="form" id="quoteForm">
                <div class="formBorder">
                  <div class="row">
                    <div class="col-sm-4 col-lg-4 col-md-4 col-xl-4 form-group">
                      <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4 col-xl-4 form-group">
                      <input type="email" class="form-control" name="email" placeholder="Email ID" required>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4 col-xl-4 form-group">
                      <input type="number" class="form-control" name="mobile" placeholder="Mobile Numer" required>
                    </div>
                    <div class="col-sm-12 col-lg-12 col-md-12 col-xl-12 form-group">
                      <textarea class="form-control" name="quotationAbout" placeholder="Quotation About" required></textarea>
                    </div>
                    <div class="col-sm-12 col-lg-12 col-md-12 col-xl-12 form-group">
                      <button type="submit" name="submit" class="btn buttonCustomPrimary">Send</button>
                    </div>  
                  </div>
                </div>
              </form>
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
        $('#quoteForm').on('keyup keypress', function(e){
            var keyCode = e.keyCode || e.which;
            if(keyCode === 13){
                e.preventDefault();
                return false;
            }
        });
        $('form').submit(function(e){
            e.preventDefault();
            $.ajax({
                url: 'dataQuote.php',
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
