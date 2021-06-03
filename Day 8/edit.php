<?php 
	$connection = mysqli_connect("localhost","root","","demo");
	if (!isset($_GET['id'])||empty($_GET['id'])) {
		header("location:display.php");
	}



	$editid=$_GET['id'];
		
		$editq=mysqli_query($connection,"select * from contact where id='{$editid}'") or die ("Error".mysqli_error($connection));
		$editdata=mysqli_fetch_array($editq);
		if ($_POST) 
		{
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			
			$uq=mysqli_query($connection,"update contact set name='{$name}',email='{$email}',phone='{$phone}' where id='{$editid}'") or die ("Error".mysqli_error($connection));
			if($uq)
		{
			echo "<script>alert('Record updated');"."window.location='display.php';</script>";
		}		
			
		}
?>

<!DOCTYPE html>
<html>
<head>
<title>Above</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Onepage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	    
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>

	<div class="footer-section" id="contact" id="contact">
			<div class="container"> 
			<div class="contact-header">
				<h3> Edit Contact</h3>
			</div>
			<div class="social-icon">
				<a href="#"><i class="icon1"></i></a>
				<a href="#"><i class="icon2"></i></a>
				<a href="#"><i class="icon3"></i></a>
				<a href="#"><i class="icon4"></i></a>
				<a href="#"><i class="icon5"></i></a>
				<a href="#"><i class="icon6"></i></a>
				<a href="#"><i class="icon7"></i></a>
				<a href="#"><i class="icon8"></i></a>
			</div>
			<div class="contact">
				<form action="" method="POST">
					<div class="col-md-4 contactgrid">
						<input type="text" class="text" value="<?php echo $editdata['name'];      ?>" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' name';}">
					</div>
					<div class="col-md-4 contactgrid">
						<input type="text" class="text" value="<?php echo $editdata['email'];      ?>" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}">
					</div>
					<div class="col-md-4 contactgrid">
						<input type="text" class="text" value="<?php echo $editdata['phone'];      ?>" name="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'phone';}">
					</div>
					
					<div class="col-md-4 contactgrid2">
						<input type="submit" value="[Submit]">
					</div>
					
				   <div class="clearfix"></div>
				</form>
			</div>
			<div class="footer-bottom">

					<p>Website Manage by :Nirali Patel<a href="http://templatestock.com" target="target_blank"></a></p>

					</div>
					<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>

		</div>		
	</div>
	
	
</body>
</html>
