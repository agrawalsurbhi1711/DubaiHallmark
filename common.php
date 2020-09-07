<!-- Common Header -->

<?php
	function common_Header(){
		$file=basename($_SERVER["SCRIPT_FILENAME"]);
?>	
	<header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<nav class="navbar navbar-default navbar-main navbar-fixed-top " role="navigation" style=" <?php if($file != 'index.php'){ echo 'color:white; background-color:black';} ?> " >
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
     <!--               <a href="index.php" style="<?php if($file!='index.php'){echo 'display:none';}?>">-->
					<!--	<img src="assets/img/logo/logoBlack.png" class="mainLogo dLogo">-->
					<!--</a>-->
					<!--<a href="index.php" style="<?php if($file=='index.php'){echo 'display:none';}?>">-->
					<!--	<img src="assets/img/logo/logoWhite.png" class="mainLogo dLogo">-->
					<!--</a>-->
					<!--<a href="index.php">-->
					<!--	<img src="assets/img/logo/1.png" class="mainLogo">-->
					<!--</a>-->
					<!--<a href="index.php">-->
					<!--	<img src="assets/img/logo/2.png" class="mainLogo ">-->
					<!--</a>-->
					<!--<a href="index.php">-->
					<!--	<img src="assets/img/logo/3.png" class="mainLogo ">-->
					<!--</a>-->
					<!--<a href="index.php">-->
					<!--	<img src="assets/img/logo/4.png" class="mainLogo ">-->
					<!--</a>-->
					<!--<a href="index.php">-->
					<!--	<img src="assets/img/logo/gold.png" class="mainLogo ">-->
					<!--</a>-->
					<a href="index.php">
						<img src="assets/img/logo/perfect.png" class="mainLogo ">
					</a>
					<!--<a href="index.php">-->
					<!--	<img src="assets/img/logo/brown.png" class="mainLogo ">-->
					<!--</a>-->
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown singleDrop <?php if($file=='index.php'){echo 'active';}?>">
							<a href="index.php" class="dropdown-toggle" >Home</a>
						</li>
						<li class="dropdown singleDrop <?php if($file=='about.php'){echo 'active';}?>">
							<a href="about.php" class="dropdown-toggle">About Us</a>
						</li>								
						<li class="dropdown singleDrop <?php if($file=='services.php'){echo 'active';}?>">
							<a href="services.php" class="dropdown-toggle">Services</a>
						</li>
						<li class="dropdown singleDrop <?php if($file=='dubai.php'||$file=='greece.php'||$file=='turkey.php'){echo 'active';}?>">
							<a href="javascript:void(0)" class="dropdown-toggle">Destination</a>
							<ul class="dropdown-menu dropdown-menu-left">
								<li class="dropdown singleDrop <?php if($file=='greece.php'){echo 'active';}?>">
									<a href="greece.php" class="dropdown-toggle">Greece</a>
								</li>
								<li class="dropdown singleDrop <?php if($file=='turkey.php'){echo 'active';}?>">
									<a href="turkey.php" class="dropdown-toggle">Turkey</a>
								</li>
								<li class="dropdown singleDrop <?php if($file=='dubai.php'){echo 'active';}?>">
									<a href="dubai.php" class="dropdown-toggle">UAE</a>
								</li>
							</ul>
						</li>
						<li class="dropdown singleDrop <?php if($file=='contact.php'){echo 'active';}?>">
							<a href="contact.php" class="dropdown-toggle">Contact Us</a>
						</li>                                
						<li class="dropdown singleDrop <?php if($file=='quote.php'){echo 'active';}?>">
							<a href="quote.php" class="dropdown-toggle">Get Quote</a>
						</li>                                
					</ul>			
				</div>
			</div>
		</nav>
	</header>
	
<?php
	}
?>		


<!-- Common Footer  -->



<?php
	function common_Footer(){
?>

	<footer>
		<div class="footer clearfix">
		  <div class="container">
			<div class="row">
			  <div class="col-sm-4 col-xs-12">
				<div class="footerContent">
				  <h5>Hallmark Tourism</h5>
					<p>
						We aim to provide personal and dedicated service to all travelers and create travel experiences that are truly unforgettable.
					</p>
				</div>
			  </div>
			  <div class="col-sm-4 col-xs-12">
				<div class="footerContent" style="text-align: center;">
				  <h5>Useful Links</h5>
				  <ul class="list-unstyled">
					<li><a href="about.php">About Us</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="quote.php">Get Quote</a></li>
					<li><a href="services.php">Services</a></li>
				  </ul>
				</div>
			  </div>
			  <div class="col-sm-4 col-xs-12">
				<div class="footerContent">
				  <h5>Get In Touch</h5>
				  <ul class="list-unstyled">
					<li>
						<i class="fa fa-home" aria-hidden="true"></i>
						4/216, Chitrakoot, Vaihali Nagar<br>Jaipur, Rajasthan, India
					</li>
					<li>
						<i class="fa fa-phone" aria-hidden="true"></i>
						+91 - 8209773308
					</li>
					<li>
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<a href="mailTo:harshh@hallmarktourism.com">harshh@hallmarktourism.com</a>
					</li>
				  </ul>
				</div>
			  </div>
			</div>
		  </div><acronym title=""></acronym>
		</div>
		<div class="copyRight clearfix">
		  <div class="container">
				<div class="row">
					<div class="col-sm-12 col-sm-12 col-xs-12 col-md-12">
						<div class="copyRightText">
							<p class="txtCenter">Copyright © 2020. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	  </footer>


<?php
	}
?>		


<!-- Common CSS -->

<?php
	function common_CSS(){
?>

  <!-- PLUGINS CSS STYLE -->
  <link rel="stylesheet" href="assets/plugins/jquery-ui/jquery-ui.min.css">
  <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/plugins/selectbox/select_option1.css">
  <link rel="stylesheet" type="text/css" href="assets/plugins/isotope/jquery.fancybox.css">
  <link rel="stylesheet" type="text/css" href="assets/plugins/isotope/isotope.css">
  <!-- REVOLUTION SLIDER -->
  <link rel="stylesheet" href="assets/plugins/revolution/css/settings.css">
  <link rel="stylesheet" href="assets/plugins/revolution/css/layers.css">
  <link rel="stylesheet" href="assets/plugins/revolution/css/navigation.css">
  <!-- GOOGLE FONT -->
  <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700'>
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/customStyle.css">
  <link rel="stylesheet" href="assets/css/colors/default.css" id="option_color">
  <!-- FAVICON -->
   <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png"/> 
  <!-- optionswitch -->
  <link rel="stylesheet" href="assets/options/optionswitch.css">
<!--   <link rel="stylesheet" href="assets/css/dd.css"> -->
<?php
	}
?>


<!-- Common JS -->
<?php
	function common_JS(){
?>
	<script src="assets/plugins/jquery/jquery-2.2.4.min.js"></script>
	<script src="assets/plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
	<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script src="assets/plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
	<script src="assets/plugins/jquery/waypoints.min.js"></script>
	<script src="assets/plugins/counter-up/jquery.counterup.min.js"></script>
	<script src="assets/plugins/isotope/isotope.min.js"></script>
	<script src="assets/plugins/isotope/jquery.fancybox.pack.js"></script>
	<script src="assets/plugins/isotope/isotope-triger.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<!-- <script src="assets/options/optionswitcher.js"></script> -->
<?php
}
	function mailFunction($mailID, $message, $name, $subject, $title){
		$mail = new PHPMailer; // call the class 
		$mail->IsSMTP();
		$mail->SMTPOptions = array(
		    'ssl' => array(
		        'verify_peer' => false,
		        'verify_peer_name' => false,
		        'allow_self_signed' => true
		    )
		);
		$mail->SMTPDebug  = 2; 
		$mail->SMTPSecure = "tls";
		$mail->Host = "mail.hallmarktourism.com"; //Hostname of the mail server
		$mail->Port = 25; //Port of the SMTP like to be 25, 80, 465 or 587
// 		$mail->Host = "smtp.gmail.com"; //Hostname of the mail server
// 		$mail->Port = 587; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->Username = "info@hallmarktourism.com"; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = "helpInfo@123"; //Password for SMTP authentication
		$mail->AddReplyTo("info@hallmarktourism.com", $title); //reply-to address
 		$mail->SetFrom("info@hallmarktourism.com", $title); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = $subject;//Subject of your mail
		$mail->AddAddress($mailID, $name); //To address who will receive this email
		$mail->MsgHTML($message);
		$send = $mail->Send(); //Send the mails
		if($send){
			echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
		}else{
			echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
		}
	}
?>
