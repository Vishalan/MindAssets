<?php
$con=mysqli_connect("localhost","riidlorg_mind","mind100","riidlorg_mindassets");
$fname=$_POST["fname"];
$mname=$_POST["mname"];
$lname=$_POST["lname"];

$gender=$_POST["gen"];

$email=$_POST["email"];
$no=$_POST["phone"];
$dob=$_POST["dob"];
$a1=$_POST["address1"];
$a2=$_POST["address2"];
$a3=$_POST["address3"];

$sql="insert into personalinfo(firstname, middlename, lastname, gender, email_id, phone_no, DOB, address1, address2, address3) values('$fname','$mname','$lname','$gender',
'$email','$no','$dob','$a1','$a2','$a3')";

$r=mysqli_query($con, $sql);



?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="edu.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


</head>
	


	<body>

	<div class="container-fluid">
	<div class="bg"></div>

		<ul class="main" role="navigation">
		
		
			<li>	 <a class="text-center nav-link" href="personalinfo.html">personal info</a></li>
				<li><a  class="active text-center" href="#">Education</a>
					</li>
					
				
				  <li><a  class="text-center" href="experience.html">Experience</a>
					
				  
				  </li>
				  <li><a  class="text-center" href="#about">About</a></li>
		 </ul>
		
		
			
			
				
				 
					
		
		<h1 class="header text-center">Enter your Educational Details!!!!</h1>
		
						
				<div class="form1" style="background-color:white;">
						<form action="personal.php" method="post">
							
								<h3 style="color:#3d4d5c;background-color:#e0e4eb;"><strong>School details:-</strong></h3><br>
									<div class="form-group row">
										<label class="col-xs-3 col-form-label">Name of the school:*</label>
										<input class="col-xs-8" type="text" name="schoolname" required>&nbsp </div><br>
										<div class="form-group row">
										<label class="col-xs-3 col-form-label">board:*</label>
										
										
																					<select class="col-xs-6" name="board" required>
											  <option>--select--</option>
											  <option value="ICSE">ICSE</option>
											  <option value="CBSE">CBSE</option>
											  <option value="SSC">SSC</option>
									
											</select>
										</div><br>
										
									
										
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">year of Passing:*</label>
											<input class="col-xs-4 date-own" name="schoolyear" type="text">
																								
												<script type="text/javascript">
													  $('.date-own').datepicker({
														 minViewMode: 2,
														 format: 'yyyy'
													   });
																				</script>
										</div>
										<br>
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Percentage:*</label>
											<input class="col-xs-6" type="text" name="percentage" required>&nbsp 
										</div><br>
										
									<h3 style="color:#3d4d5c;background-color:#e0e4eb;"><strong>graduation details:-</strong></h3><br>
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Name of the institute:*</label>
											<input class="col-xs-6" type="text" name="institute" required>&nbsp 
										</div><br>
									
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Degree in:*</label>
											
										
																					<select class="col-xs-6" name="degree" required>
											  <option value="volvo">Volvo</option>
											  <option value="saab">Saab</option>
											  <option value="mercedes">Mercedes</option>
											  <option value="audi">Audi</option>
											</select>
										</div><br>
										
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Course:*</label>
											<input class="col-xs-6" type="text" name="degree" required>&nbsp 
										</div><br>
										
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">year of Passing:*</label>
											<input class="col-xs-4 date-own" name="cllgyear" type="text">
																								
												<script type="text/javascript">
													  $('.date-own').datepicker({
														 minViewMode: 2,
														 format: 'yyyy'
													   });
																				</script>
										</div>
										
									<h3 style="color:#3d4d5c;background-color:#e0e4eb;"><strong>Post graduation details(optional):-</strong></h3><br>
									<div class="form-group row">
											<label class="col-xs-3 col-form-label">Name of the institute:</label>
											<input class="col-xs-6" type="text" name="institute">&nbsp 
										</div><br>
										
										
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Degree in:</label>
											
										
																					<select class="col-xs-6" name="degree">
											  <option value="volvo">Volvo</option>
											  <option value="saab">Saab</option>
											  <option value="mercedes">Mercedes</option>
											  <option value="audi">Audi</option>
											</select>
										</div><br>
										
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Course:</label>
											<input class="col-xs-6" type="text" name="degree">&nbsp 
										</div><br>
										
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">year of Passing:</label>
											<input class="col-xs-4 date-own" name="masteryear" type="text">
																								
												<script type="text/javascript">
													  $('.date-own').datepicker({
														 minViewMode: 2,
														 format: 'yyyy'
													   });
																				</script>
										</div>
									<div class="form-group row">
								
										<input type="submit" class="button" value="save and proceed">
									</div>
									
								
								</form>
								
				</div>
				
			</fieldset>
						
				
			
			
			
			
			
			
			
			
			
		
	

		
		
	</body>

</html>

