<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from showwp.com/demos/teachme/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Oct 2018 07:42:51 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title>Student Management System</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">

    <!-- BOOTSTRAP STYLES -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>

	
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav><!-- end nav -->
            </div><!-- end container -->
        </header><!-- end header -->

        <section class="section paralbackground banner" style="background-image:url('upload/pagebanner_01.jpg');" data-img-width="2400" data-img-height="907" data-diff="100">
            <div class="overlay"></div>
        </section><!-- end section -->

        <div class="page-title bgg">
            <div class="container clearfix">
                
                <div class="pull-right hidden-xs">
                    
                </div><!-- /.pull-right -->
            </div>
        </div><!-- end page-title -->

        <section class="section bgw">
            <div class="container">

                <div class="section-title-2 text-center">
                    <h2>Registration Form</h2>
                    <p class="lead"> please feel up Registration Form</p>
                    <hr>
                </div><!-- end section-title -->

                <div class="row">
                      
                    <div class="col-md-7">
                        <div class="contact_form">
                            <div id="message"></div>
                            <form id="contactform" class="row" action="" name="contactform" method="POST">
                                <div class="col-md-12">
                                
                                  Name
                                 <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                                  Email
                                <input type="text" name="email" id="email" class="form-control" placeholder="Email"> 
                                Phone Number
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="(+91)Phone Number">
                                Gender<br>
                                    <input type="radio" name="gender" value="male" checked> Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="gender" value="female"> Female&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="gender" value="other"> Other<br><br>
                                    Date of birth
                                <input type="Date" name="dob" id="date" class="form-control" placeholder="dd/mm/yy">
                                  State
                                 
                                    <select class="form-control" name="state">
                                        <option>--Select State --</option>
                                        <option>--Gujarat --</option>
                                    </select>
                                    City
                                 
                                    <select class="form-control" name="city">
                                        <option>--Select City --</option>
                                        <option>--Ahmedabad --</option>
                                    </select> 

                                    Area
                                 
                                    <select class="form-control" name="area">
                                        <option>--Select Area --</option>
                                        <option>--Nikol --</option>
                                    </select> 

                                  
                               
                                
                                Password
                                <input type="Password" name="pass" id="subject" class="form-control" placeholder="Password">
                                Conform Password 
                                 <input type="Password" name="repass" id="subject" class="form-control" placeholder="Conform Password">
                                 Message 
                                <textarea class="form-control" name="mess" id="comments" rows="6" placeholder="Message Below"></textarea>
                                <button type="submit" value="SEND" id="submit" class="btn btn-primary"> Submit</button>
                                </div>
                            </form> 
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

       

      
        <div class="topbar copyrights">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-left hidden-xs">
                        <div class="topmenu">

                        </div><!-- end callus -->
                    </div>

                   
                </div><!-- end row -->
            </div><!-- end topbar -->
        </div><!-- end topbar -->
    </div><!-- end wrapper -->

   

</body>

<!-- Mirrored from showwp.com/demos/teachme/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Oct 2018 07:42:51 GMT -->
</html>
<?php

$connection = mysqli_connect("localhost","root","","demo");
if($_POST)
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $dob=date("Y-m-d");
    $state=$_POST['state'];
    $city=$_POST['city'];
    $area=$_POST['area'];
    $pass=$_POST['pass'];
    $repass=$_POST['repass'];
    $mess=$_POST['mess'];
    $q=mysqli_query($connection,"insert into student(name,email,phone,gender,dob,state,city,area,pass,repass,mess)values('{$name}','{$email}','{$phone}','{$gender}','{$dob}','{$state}','{$city}','{$area}','{$pass}','{$repass}','{$mess}')") or die ("Error".mysqli_error($connection));
    if($q)
{
    echo "<script>alert('Record Added');</script>";
}
}


?>