<?php

include "connection.php";
include "navbar.php";
session_start();

?>


<!DOCTYPE html>
<html>
<head>

	<title>Student Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device=width,initial-scale-scale=1">
  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <style type="text/css">
  	section{
       
       margin-top: -60px;
  	}
  	

  </style>

</head>
<body>

 
	<!--
        <nav class="navbar navbar-inverse">
         	<div class="container-fluid">
         		<div class="navbar-header"> 
                  <a class="navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
         	    </div>
         		<ul class="nav navbar-nav">
         			<li><a href="index.php">HOME</a></li>
         			<li><a href="books.php">BOOKS</a></li>
         				
         			<li><a href="feedback.php">FEEDBACK</a></li>	
         		</ul>
                   <ul class="nav navbar-nav navbar-right">
         		    <li><a href="student_login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>	
         		    <li><a href="student_login.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>	
         			<li><a href="Registration.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
                   </ul>
         	</div>
        </nav>
 -->
<!--	
<header style="height: 100px;">
	<div class="logo"> 
          <h1 style="color:white; font-size: 25px; line-height: 65px; margin-top: 20; letter-spacing: 10px;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
         	</div>
         	<nav>
         		<ul>
         			<li><a href="index.html">HOME</a></li>
         			<li><a href="">BOOKS</a></li>
         			<li><a href="student_login.html">STUDENT-LOGIN</a></li>	
         			<li><a href="Registration.html">REGISTRATION</a></li>	
         			<li><a href="">FEEDBACK</a></li>	
         		</ul>
         	</nav>
</header>-->	
<section>
	<div class="log_img">
		<br> <br> 
	 <div class="box1">   
		<h1 style="text-align: center; font-size: 35px; color: white; font-family: lucida console">Library Management System</h1>
		<h1 style="text-align: center; font-size: 25px; color: white">User Login From</h1>
	  <form name="login" action="" method="post">
	  	<br><br>
	  	<div class="login">
	  	<input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
	  	<input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
	  	<input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; width: 70px; height: 30px">  </div>
	  	

	  	
	  
	  <p>
	  	<br><br>
	  	<a style="color: white" href="update_password.php">forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp
	  	New to this website?<a style="color: white;" href="registration.php">&nbspSign Up</a>
	  </p>
      </form>
	 </div>	
	</div>
	
</section>

     <?php
      
       if (isset($_POST['submit'])) {

         $count=0;
         $res=mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' && password='$_POST[password]';");

         $row=mysqli_fetch_assoc($res);

         $count=mysqli_num_rows($res);


         if($count==0)
         {
          ?>

           <!-- <script type="text/javascript">
              alert("The username and password doesn't match .");
            </script>
          -->
          <div class="alert alert-danger" style="width: 335px; margin-left: 500px; background-color: red; color: white">

            <strong>The username and password doesn't match</strong>
            
          </div>


          <?php
         }
         else{
          $_SESSION['login_user']=$_POST['username'];
          $_SESSION['pic']=$row['pic'];

          ?>
            <script type="text/javascript">
               window.location="index.php"
            </script> 
           <?php
           }
       }

     ?>

</body>
</html>