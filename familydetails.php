


<!DOCTYPE html>




<html lang="en">
	<head>
		<link rel="stylesheet" href="edu.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

 


</head>
	


	<body>

	<div class="container-fluid">
	<div class="bg"></div>

		<ul class="main">
		
		
			<li>	 <a class="text-center" href="personalinfo.php">Personal Details</a></li>
						<li><a  class="active text-center" href="familydetails.php">Family details</a></li>
			<li><a  class="text-center" href="education.php">Education</a></li>
				  <li><a  class="text-center" href="experience.php">Work Experience</a></li>
				  <li><a  class="text-center" href="about.html">Additional Details</a></li>
				  </ul>
		
		
			
			
				 <h4><a href="logout.php" style="float:right">Logout here</a> </h4>  
				 
					
		
		<h1 class="header text-center">Enter your family member's information</h1>
		
		
		
		<div class="form1 well" style="background-color:white;">
				<form action="familysave.php" name="f1" method="post" enctype="multipart/form-data">
					<fieldset>
					<h3 style="color:#3d4d5c;background-color:#e0e4eb;margin-top:0px;"><strong>Guardian's Details</strong></h3><br>
					
						<div class="form-group row">
							
							<label class="col-xs-3 col-form-label">First Name *</label>
							<input class="col-xs-8" type="text" name="fname" required>&nbsp <br>
						</div>
						
							<div class="form-group row">
							
							<label class="col-xs-3 col-form-label">Surname *</label>
							<input class="col-xs-8" type="text" name="sname" required>&nbsp <br>
						</div>
						
							<div class="form-group row">
						<script type="text/javascript">
						 
											function showfield6(name){
											  if(name=='other')
											  
												  document.getElementById('other').style.display ="block";
													 
											  
											  else 
											  
														 document.getElementById('other').style.display ="none";
													 
											  
											}
											</script>
						
					
								<label class="col-xs-3 col-form-label">Relationship of candidate with Guardian *</label>
							<select class="col-xs-4" onchange="showfield6(this.options[this.selectedIndex].value)"  style="height:30px" name="relation" required>
								<option value="">----select----</option>
								<option value="father">Father</option>
								<option value="mother">Mother</option>
								<option value="brother">Brother</option>
								<option value="sister">Sister</option>
								<option value="children">Children</option>
																						<option value="other">Other</option>
									
											</select> 
									
											<br>
											
											 <div id="other" style="display: none;">
											 <br><br>
												<label class="col-xs-3">Other</label> <input class="col-xs-4" type="text" placeholder="please specify" id="other" name="otherrelation" value="<?php echo isset($_POST['otherrelation']) ? $_POST['otherrelation'] : ''?>"><br />

											
											
											</div><br>
							
							</div><br>
							
				<!--			<div class="form-group row">
							
							<label class="col-xs-3 col-form-label">Mobile Number *</label>
							<input class="col-xs-8" type="text" name="mno" value="<?php echo isset($_POST['mno']) ? $_POST['mno'] : ''?>" required>&nbsp <br>
						</div>
					-->		
							<div class="form-group row">
								<label class="col-xs-3 col-form-label">Age </label>
								<input class="col-xs-4" type="number" name="age" value="<?php echo isset($_POST['age']) ? $_POST['age'] : ''?>">
							</div><br>
							
							
							<div class="form-group row">
								<label class="col-xs-3 col-form-label">Qualification </label>
								<input class="col-xs-8" type="text" name="qualification" value="<?php echo isset($_POST['qualification']) ? $_POST['qualification'] : ''?>">&nbsp </div><br>
							
							<div class="form-group row">
								<label class="col-xs-3 col-form-label">Occupation </label>
								<input class="col-xs-8" type="text" name="occupation" value="<?php echo isset($_POST['occupation']) ? $_POST['occupation'] : ''?>">&nbsp </div><br>
								
								<div class="form-group row">
								<label class="col-xs-3 col-form-label">Annual Income </label>
								<input class="col-xs-8" type="text" name="income" value="<?php echo isset($_POST['income']) ? $_POST['income'] : ''?>">&nbsp </div><br>
							
						
							</div>
							
							<div class="form1 well" style="background-color:white;">
							
							<h3 style="color:#3d4d5c;background-color:#e0e4eb;margin-top:0px;"><strong>Other Family Members</strong></h3><br>
				
						
				
						
							
		
							
							
								<script type="text/javascript">
											function showfield(name){
												
												var x = document.getElementById("no").value;
												
									if(x==1)
									{
													document.getElementById('fam1').style.display="block";
													document.getElementById('fam2').style.display="none";
										document.getElementById('fam3').style.display="none";
										document.getElementById('fam4').style.display="none";
										document.getElementById('fam5').style.display="none";
									}
									else if(x==2)
									{
										document.getElementById('fam1').style.display="block";
										document.getElementById('fam2').style.display="block";
											document.getElementById('fam3').style.display="none";
										document.getElementById('fam4').style.display="none";
										document.getElementById('fam5').style.display="none";
									}
									
									else if(x==3)
									{
										document.getElementById('fam1').style.display="block";
										document.getElementById('fam2').style.display="block";
										document.getElementById('fam3').style.display="block";
										document.getElementById('fam4').style.display="none";
										document.getElementById('fam5').style.display="none";
									}
									else if(x==4)
									{
										document.getElementById('fam1').style.display="block";
										document.getElementById('fam2').style.display="block";
										document.getElementById('fam3').style.display="block";
										document.getElementById('fam4').style.display="block";
												document.getElementById('fam5').style.display="none";
									}
									else if(x==5)
									{
										document.getElementById('fam1').style.display="block";
										document.getElementById('fam2').style.display="block";
										document.getElementById('fam3').style.display="block";
										document.getElementById('fam4').style.display="block";
										document.getElementById('fam5').style.display="block";
									}

									
									return true;
											}
											</script>
							<label class="col-xs-3 col-form-label">Number Of Family Members </label>
							<select class="col-xs-3" id="no" onchange="showfield(this.options[this.selectedIndex].value)">
											<option value="0">None</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											   <option value="5">5</option>
											  
											</select>
		<p id="demo"></p>
								&nbsp &nbsp
							<br>
								
				
										
								
								<div id="fam1" style="display: none;">
											<h3 style="color:#3d4d5c;background-color:#e0e4eb;margin-top:0px;"><strong>Member #1</strong></h3><br>
											<div class="form-group row">
												
												<label class="col-xs-3 col-form-label">First Name *</label>
												<input class="col-xs-8" type="text" name="fname1" required>&nbsp <br>
											</div>
											
												<div class="form-group row">
												
												<label class="col-xs-3 col-form-label">Surname *</label>
												<input class="col-xs-8" type="text" name="sname1" required>&nbsp <br>
											</div>
											
												<div class="form-group row">
											<script type="text/javascript">
																function showfield1(name){
																  if(name=='other')
																  
																	  document.getElementById('other').style.display ="block";
																		 
																  
																  else 
																  
																			 document.getElementById('other').style.display ="none";
																		 
															  
																}
																</script>
											
										
													<label class="col-xs-3 col-form-label">Relationship with the member *</label>
												<select class="col-xs-4" onchange="showfield1(this.options[this.selectedIndex].value)" style="height:30px" name="relation1" required>
													<option value="father">Father</option>
													<option value="mother">Mother</option>
													<option value="brother">Brother</option>
													<option value="sister">Sister</option>
													<option value="children">Children</option>
																									 <option value="other">Other</option>
														
																</select> 
																<br>
																
																 <div id="other" style="display: none;">
																 <br><br>
																	<label class="col-xs-3">Other</label> <input class="col-xs-4" type="text" placeholder="please specify" id="other" name="otherrelation1"><br />

																
																
																</div><br>
												
												</div><br>
												
									<!--			<div class="form-group row">
												
												<label class="col-xs-3 col-form-label">Mobile Number *</label>
												<input class="col-xs-8" type="text" name="mno" required>&nbsp <br>
											</div>
										-->		
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">Age </label>
													<input class="col-xs-4" type="number" name="age1">
												</div><br>
												
												
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">Qualification </label>
													<input class="col-xs-8" type="text" name="qualification1">&nbsp </div><br>
												
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">Occupation </label>
													<input class="col-xs-8" type="text" name="occupation1" >&nbsp </div><br>
													
													<div class="form-group row">
													<label class="col-xs-3 col-form-label">Annual Income </label>
													<input class="col-xs-8" type="text" name="income1">&nbsp </div><br>
												
											
											</div>
											
													  
												
				
						
						
						
							<div id="fam2" style="display: none;">
											<h3 style="color:#3d4d5c;background-color:#e0e4eb;margin-top:0px;"><strong>Member #2</strong></h3><br>
											<div class="form-group row">
												
												<label class="col-xs-3 col-form-label">First Name *</label>
												<input class="col-xs-8" type="text" name="fname2" required>&nbsp <br>
											</div>
											
												<div class="form-group row">
												
												<label class="col-xs-3 col-form-label">Surname *</label>
												<input class="col-xs-8" type="text" name="sname2" required>&nbsp <br>
											</div>
											
												<div class="form-group row">
											<script type="text/javascript">
																function showfield2(name){
																  if(name=='other')
																  
																	  document.getElementById('other').style.display ="block";
																		 
																  
																  else 
																  
																			 document.getElementById('other').style.display ="none";
																		 
													  
																}
																</script>
											
										
													<label class="col-xs-3 col-form-label">Relationship with the member *</label>
												<select class="col-xs-4" onchange="showfield2(this.options[this.selectedIndex].value)" style="height:30px" name="relation2" required>
													<option value="father">Father</option>
													<option value="mother">Mother</option>
													<option value="brother">Brother</option>
													<option value="sister">Sister</option>
													<option value="children">Children</option>
														 <option value="other">Other</option>
														
																</select> 
																<br>
																
																 <div id="other" style="display: none;">
																 <br><br>
																	<label class="col-xs-3">Other</label> <input class="col-xs-4" type="text" placeholder="please specify" id="other" name="otherrelation2"><br />

																
																
																</div><br>
												
												</div><br>
												
									<!--			<div class="form-group row">
												
												<label class="col-xs-3 col-form-label">Mobile Number *</label>
												<input class="col-xs-8" type="text" name="mno" required>&nbsp <br>
											</div>
										-->		
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">Age </label>
													<input class="col-xs-4" type="number" name="age2">
												</div><br>
												
												
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">Qualification </label>
													<input class="col-xs-8" type="text" name="qualification2">&nbsp </div><br>
												
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">Occupation </label>
													<input class="col-xs-8" type="text" name="occupation2" >&nbsp </div><br>
													
													<div class="form-group row">
													<label class="col-xs-3 col-form-label">Annual Income </label>
													<input class="col-xs-8" type="text" name="income2">&nbsp </div><br>
												
											
											</div>
												
													  
												
				
						
													<div id="fam3" style="display: none;">
											<h3 style="color:#3d4d5c;background-color:#e0e4eb;margin-top:0px;"><strong>Member #3</strong></h3><br>
											<div class="form-group row">
												
												<label class="col-xs-3 col-form-label">First Name *</label>
												<input class="col-xs-8" type="text" name="fname3" required>&nbsp <br>
											</div>
											
												<div class="form-group row">
												
												<label class="col-xs-3 col-form-label">Surname *</label>
												<input class="col-xs-8" type="text" name="sname3" required>&nbsp <br>
											</div>
											
												<div class="form-group row">
											<script type="text/javascript">
																function showfield5(name){
																  if(name=='other')
																  
																	  document.getElementById('other').style.display ="block";
																		 
																  
																  else 
																  
																			 document.getElementById('other').style.display ="none";
																		 
																  
															return true;
															}
																</script>
											
										
													<label class="col-xs-3 col-form-label">Relationship with the member *</label>
												<select class="col-xs-4" onchange="showfield5(this.options[this.selectedIndex].value)" style="height:30px" name="relation3" required>
													<option value="father">Father</option>
													<option value="mother">Mother</option>
													<option value="brother">Brother</option>
													<option value="sister">Sister</option>
													<option value="children">Children</option>
																									 <option value="other">Other</option>
														
																</select> 
																<br>
																
																 <div id="other" style="display: none;">
																 <br><br>
																	<label class="col-xs-3">Other</label> <input class="col-xs-4" type="text" placeholder="please specify" id="other" name="otherrelation3"><br />

																
																
																</div><br>
												
												</div><br>
												
										<!--			<div class="form-group row">
												
											<label class="col-xs-3 col-form-label">Mobile Number *</label>
												<input class="col-xs-8" type="text" name="mno" required>&nbsp <br>
											</div>
										-->		
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">Age </label>
													<input class="col-xs-4" type="number" name="age3">
												</div><br>
												
												
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">Qualification </label>
													<input class="col-xs-8" type="text" name="qualification3">&nbsp </div><br>
												
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">Occupation </label>
													<input class="col-xs-8" type="text" name="occupation3" >&nbsp </div><br>
													
													<div class="form-group row">
													<label class="col-xs-3 col-form-label">Annual Income </label>
													<input class="col-xs-8" type="text" name="income3">&nbsp </div><br>
												
											
											</div>
												
													  
				
						
													<div id="fam4" style="display: none;">
											<h3 style="color:#3d4d5c;background-color:#e0e4eb;margin-top:0px;"><strong>Member #4</strong></h3><br>
											<div class="form-group row">
												
												<label class="col-xs-3 col-form-label">First Name *</label>
												<input class="col-xs-8" type="text" name="fname4" required>&nbsp <br>
											</div>
											
												<div class="form-group row">
												
												<label class="col-xs-3 col-form-label">Surname *</label>
												<input class="col-xs-8" type="text" name="fname4" required>&nbsp <br>
											</div>
											
												<div class="form-group row">
											<script type="text/javascript">
																function showfield3(name){
																  if(name=='other')
																  
																	  document.getElementById('other').style.display ="block";
																		 
																  
																  else 
																  
																			 document.getElementById('other').style.display ="none";
																		 
																  
																	return true;
																}
																</script>
											
										
													<label class="col-xs-3 col-form-label">Relationship with the member *</label>
												<select class="col-xs-4" onchange="showfield3(this.options[this.selectedIndex].value)" style="height:30px" name="relation4" required>
													<option value="father">Father</option>
													<option value="mother">Mother</option>
													<option value="brother">Brother</option>
													<option value="sister">Sister</option>
													<option value="children">Children</option>
																									 <option value="other">Other</option>
														
																</select> 
																<br>
																
																 <div id="other" style="display: none;">
																 <br><br>
																	<label class="col-xs-3">Other</label> <input class="col-xs-4" type="text" placeholder="please specify" id="other" name="otherrelation4"><br />

																
																
																</div><br>
												
												</div><br>
												
									<!--				<div class="form-group row">
												
											<label class="col-xs-3 col-form-label">Mobile Number *</label>
												<input class="col-xs-8" type="text" name="mno" required>&nbsp <br>
											</div>
										-->		
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">Age </label>
													<input class="col-xs-4" type="number" name="age4">
												</div><br>
												
												
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">Qualification </label>
													<input class="col-xs-8" type="text" name="qualification4">&nbsp </div><br>
												
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">Occupation </label>
													<input class="col-xs-8" type="text" name="occupation4">&nbsp </div><br>
													
													<div class="form-group row">
													<label class="col-xs-3 col-form-label">Annual Income </label>
													<input class="col-xs-8" type="text" name="income4">&nbsp </div><br>
												
											
											</div>
												
													  
												
					
						
						
													<div id="fam5" style="display: none;">
											<h3 style="color:#3d4d5c;background-color:#e0e4eb;margin-top:0px;"><strong>Member #5</strong></h3><br>
											<div class="form-group row">
												
												<label class="col-xs-3 col-form-label">First Name *</label>
												<input class="col-xs-8" type="text" name="fname5" required>&nbsp <br>
											</div>
											
												<div class="form-group row">
												
												<label class="col-xs-3 col-form-label">Surname *</label>
												<input class="col-xs-8" type="text" name="sname5" required>&nbsp <br>
											</div>
											
												<div class="form-group row">
											<script type="text/javascript">
																function showfield4(name){
																  if(name=='other')
																  
																	  document.getElementById('other').style.display ="block";
																		 
																  
																  else 
																  
																			 document.getElementById('other').style.display ="none";
																		 
																  
																}
																</script>
											
										
													<label class="col-xs-3 col-form-label">Relationship with the member *</label>
												<select class="col-xs-4" onchange="showfield4(this.options[this.selectedIndex].value)" style="height:30px" name="relation5" required>
													<option value="father">Father</option>
													<option value="mother">Mother</option>
													<option value="brother">Brother</option>
													<option value="sister">Sister</option>
													<option value="children">Children</option>
																									 <option value="other">Other</option>
														
																</select> 
																<br>
																
																 <div id="other" style="display: none;">
																 <br><br>
																	<label class="col-xs-3">Other</label> <input class="col-xs-4" type="text" placeholder="please specify" id="other" name="otherrelation5"><br />

																
																
																</div><br>
												
												</div><br>
												
										<!--			<div class="form-group row">
												
											<label class="col-xs-3 col-form-label">Mobile Number *</label>
												<input class="col-xs-8" type="text" name="mno" required>&nbsp <br>
											</div>
										-->		
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">Age </label>
													<input class="col-xs-4" type="number" name="age5">
												</div><br>
												
												
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">Qualification </label>
													<input class="col-xs-8" type="text" name="qualification5">&nbsp </div><br>
												
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">Occupation </label>
													<input class="col-xs-8" type="text" name="occupation5" >&nbsp </div><br>
													
													<div class="form-group row">
													<label class="col-xs-3 col-form-label">Annual Income </label>
													<input class="col-xs-8" type="text" name="income5">&nbsp </div><br>
												
											
											</div>
												
													  
												
						
			
													
												
											
										
												
													  
												
					
						
						
							
							<div class="form-group">
											
													
													<input type="submit" formaction="familysave.php" class="button" value="Next" onclick="document.f1.submit(); return false;">
													
													  </div>
							</div>
						</fieldset>
						
				</form>
		
			
			
			
			
			
			
			
			

	

		
		
	</body>

</html>