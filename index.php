<!DOCTYPE html>
<?php
$con=mysqli_connect("localhost","riidlorg_mind","mind100","riidlorg_mindassets");

?>


<html lang="en" >
	<head>
		<link rel="stylesheet" href="test.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
	
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- attach CSS styles -->

</head>

<body>
<div class="container-fluid">
					<div id="header1" class="header">
						<div id="header-content">
							<img  class="img-responsive img-square" height="46" width="46 " style="border:solid;float:left; !important" src="test.jpg">
						 
								<h2>my resume builder</h2>
						</div>
					</div>

					<br><br><br><br><br><br><br><br><br><br>
					<div class="parallax">

						<div class="loginsignup">
							<div class="header" align="center">
							Log In
							</div>	
							<div class="form">
							<form action="index.php" method="post">
							Email:<br><input type="email" name="username" style="height:30px;" required/>
						<br><br>	Password:<br><input type="password" name="password" style="height:30px;" required>
						<div style="color:red;font-size:12px">
						<?php 
						
						 $email = isset($_POST['username']) ? $_POST['username'] : '';
					  $pass = isset($_POST['password']) ? $_POST['password'] : '';
							
							$sql="select password from register_t where email_id='$email'";
							$r=mysqli_query($con, $sql);
							
							$sql1="select email_id from register_t where email_id='$email'";
							$re=mysqli_query($con, $sql1);
							
							
								if($row=mysqli_fetch_array($r))
								{
									if($row["password"]!=$pass)
									{
									echo "Incorrect password";
									}
								}
								
						
								?>
							
							</div>
							<br><br>
						<br><br>
							<input type="submit" value="Log in" class="loginbut" formaction="personalinfo.php">&nbsp or &nbsp <br><br>
							<a href="register.html" class="loginbut">Register Now</a>
							</form>
							</div>
							
							
						</div>

					<div  style=" padding:3%;background:#d9e6f2;height:35%;" align="center">
					<h2 style="color:#005ce6;">Join over one million members</h2>
					<h3>Make your next career move with confidence</h3>
					</div>

					
					 

					<div class="p2" style="background-image:url('img1.jpg');">
					<div  align="center" style="padding:10%;">
					<a href="personalinfo.html" class="create"> Create My Resume Now </a>
					</div>
					</div>
					<div class="p3" style="background-color:black;color:white;">
					</div>

					<div class="parallax">


					</div>
</div>

</body>


</html>