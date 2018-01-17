




<html>
<head>

<link rel="stylesheet" href="home.css">


</head>
<body>
<div class="container">

	<div id="header1">

 
	<div id="header-content">
	<img style="padding:30px 10px 10px 10px;
height:30px;
width:30px;float:left;" src="test.jpg">
 
        <h1>my resume builder</h1>
</div>
</div>

<br><br><br><br><br><br><br><br><br><br>
<div class="parallax">

	<div class="loginsignup">
		<div class="header" align="center">
		Log In
		</div>	
		<div class="form">
		<form action="login.php" method="post">
		Email:<br><input type="email" name="username" style="height:30px;" required/>
	<br><br>	Password:<br><input type="password" name="password" style="height:30px;" required>
	
	<div style="color:red;font-size:12px;">
	
	
		</div>
		<br><br>
		<input type="submit" value="Log in" class="loginbut">&nbsp or &nbsp <br><br>
		<a href="register.html" class="loginbut">Register Now</a>
		
		
		
		
		
		</form>
		</div>
		
		

		</div>

	</div>
</div> 

<div class="p2" style="background-image:url('img1.jpg');">

</div>

<div class="p3" style="background-color:black;color:white;">
</div>

<div class="parallax">


</div>

<?php 
			
		 $email = isset($_POST['username']) ? $_POST['username'] : '';
					  $pass = isset($_POST['password']) ? $_POST['password'] : '';
					  
					  
		$sql="select password from register_t where email_id='$email' AND password='$pass'";
		$r=mysqli_query($con, $sql);
		
		
	
		
			 if(mysqli_num_rows($r))  
    {  
       echo "<script>window.open('personalinfo.php','_self')</script>";  
  
       $_SESSION['username']=$email;//here session is used and value of $user_email store in $_SESSION.  
  
}  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
			
			

	
			?>	


</body>


</html>