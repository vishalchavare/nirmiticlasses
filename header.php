
<!DOCTYPE HTML>
<html>
<head>
  <?php
    $file = $_SERVER['PHP_SELF'];
    $file = substr($file,11,-4);
  ?>
<title>Eco-Way - <?php
if($file != 'index'){
  echo $file;
}else {
  echo "Home";
} ?></title>
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Economics,Economic classes,online economics class,12th economics," />
<meta name="author" content="EcoMyWay" />
<meta name="description" content="Eco-Way – an online tutorial website, covering Programming aspects .  A site where you would learn Programing with “ Simplicity, Efficiency and Quickness ”.  That’s what I believe in. Ensuring you an amazing and fun learning sessions., available to you at your desktop
 screen during anytime of the day. 24*7 facility, with no further requirements after you enroll for the sessions." />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='https://fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
<!--google fonts-->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> -->
<!-- <script src="js/bootstrap.js"></script> -->
<!-- <script src="js/jquery-1.11.0.min.js"></script> -->
<!-- <script src="js/script.js"></script> -->
<!-- <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" /> -->
<!-- <link type="text/css" rel="stylesheet" href="css/colorfulTab.min.css"> -->
</head>
<body>
<div class="login">
	<ul>
    <?php
      if (isset($_COOKIE['email'])) {
        ?>
        <a href="dashboard.php"><li>Dashboard</li></a>
    		<a href="log.php?out"><li>LogOut</li></a>
    		<?php 
    		}elseif (isset($_COOKIE['temail'])) {
    			# code...
    	 ?><a href="teacher_dashboard.php"><li>Dashboard</li></a>
    	 	<a href="log.php?out"> <li>LogOut</li></a>
        <?php
      }else {
        ?>
            		<a href="login.php"><li>Login</li></a>
             <!-- <select value="sel" onchange="JavaScript:location.href=this.value" style="background-color: transparent;border-color: black;border:0px;color:black;background-position-x:70 px; padding-right: : 10px; margin-right: -20px;width: 88px; "> -->
        <!-- <option>Register</option> 
        	<option value="register_teacher.php">
        		I'm a Teacher
        	</option>
        	<option value="register.php">
        		I'm a Student 
        	</option>
        </select>-->
        <div class="dropdown">
  <button class="dropbtn">Register</button>
  <div class="dropdown-content">
    <a href="register_teacher.php">I'm a Teacher</a>
    <a href="register.php">I'm a Student</a>
  </div>
</div>
        <?php
      }
    ?>
	</ul>
	<div class="clearfix"> </div>
</div>
<!--header strat here-->
<?php if ($file != 'index') {?>
<div class="banner1 agileits">
<?php }else {?>
<div class="banner agileits">
<?php } ?>
	<div class="header">
		<div class="container">
			<div class="header-main">
				<div class="logo">
			       <h1><span class="books"></span> <a href="index.php">Nirmiti Classes Gargoti</a></h1>
			    </div>
				 <div class="top-nav">
				 	 <span class="menu"> <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiqWtUIIquSsB3xgL1S5m4g9CSUCQamLolP_wIoCl-9WsjRXtow_ndZYn7xzPTg6ndli_oQxvqOr3YqB_KfrYkpQxBBBn1U7F808MhReOa-vLVCFJztdb8E7eZmHVXcgHgCj_hJwCLv87TXYP_p8-tGwzw7vIEz4s8F5TpLjlsurvVDUthLpVRG6-U3gA/s320/lg.png" alt=""></span>
				     <nav class="cl-effect-21" id="cl-effect-21">
							<ul class="res">
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="pricing.php">Tutorials</a></li>
								<li><a href="gallery.php">Gallery</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
						

						<!-- script-for-menu -->
										 <!-- <script>
										   $( "span.menu" ).click(function() {
											 $( "ul.res" ).slideToggle( 300, function() {
											 // Animation complete.
											  });
											 });
										</script> 
						<!-/script-for-menu -->

				 </div>
				<div class="clearfix"> </div>
			</div>
			<div class="banner-main">
				 <section class="slider">
				
						<ul class="slides">
						  <li>
						  	<div class="banner-main">
								   <h3>Nirmiti Classes Gargoti</h3>
						            <p> </p>
								<div class="clearfix"> </div>
							</div>
						  </li>
<!--
						  <li>
						  	<div class="banner-main">
								   <h3>Simplicity – Efficiency – Quickness. </h3>
						           <p>A site where you would learn Economics with “ Simplicity, Efficiency and Quickness ”. That’s what I believe in. Ensuring you an amazing and fun Eco learning sessions., available to you at your desktop screen during anytime of the day. 24*7 facility, with no further requirements after you enroll for the sessions. </p>
								<div class="clearfix"> </div>
							</div>
						  </li>
						  <li>
						  	<div class="banner-main">
								   <h3>Most Efficient Pricing.</h3>
						           <p>MicroEconomics 1,000/- <br> MacroEconomics 1,000/- <br> Combo 1,779/-</p>
								<div class="clearfix"> </div>
							</div>
						  </li>
-->
					    </ul>
					 </div>
					 <div class="clearfix"> </div>
            </section>
		 </div>
	 </div>
   </div>
</div>
<!--header end here-->
