<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		 Student Registration
	</title>
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
        </nav> -->

<!--
</head>
<body> 
	<div class="wrapper">  
         <header>
         	<div class="logo"> 
      
         	 <h1 style="color:white; font-size: 25px; line-height: 70px; margin-top: 20; letter-spacing: 10px;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
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
	
         </header>
-->
<section>
   <div class="reg_img">
   
    <div class="box2">   
      <h1 style="text-align: center; font-size: 35px; color: white; font-family: lucida console">Library Management System</h1>
      <h1 style="text-align: center; font-size: 25px; color: white">User Registration From</h1>
     <form name="Registration" action="" method="post">
      <br>
      <div class="login">
      <input class="form-control" type="text" name="first" placeholder="First Name" required="">   <br>
      <input class="form-control" type="text" name="last" placeholder="Last Name" required=""><br>
      <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
      <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
      <input class="form-control" type="text" name="roll" placeholder="Roll No" required=""><br>
      <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
      <input class="form-control" type="text" name="contact" placeholder="Phone No" required=""><br>
      <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; width: 70px; height: 30px">
   </div>
      

      
     </form>
      

    </div>  
   </div>
   
</section>
   
   <?php

     if (isset($_POST['submit'])) {
      $count=0;
      $sql="SELECT username from student";
      $res=mysqli_query($db,$sql);

      while($row=mysqli_fetch_assoc($res))
      {
        if($row['username']==$_POST['username'])
        {
          $count=$count+1;
        }
      }
     if($count==0)  

      {mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[roll]', '$_POST[email]', '$_POST[contact]','p.jpg');"); 
       
    ?>
      <script type="text/javascript">
        
        alert("Registration Successfull");
         

      </script> 
      <?php

   }
       else{
       
        ?>
      <script type="text/javascript">
        
        alert("The username alreay exist.");
         

      </script> 
      <?php  

       }

       }


    




     ?>

 

</body>




 





  




