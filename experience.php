



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

		<ul class="main">
		
		
			<li>	 <a class="text-center" href="personalinfo.php">Personal Details</a></li>
				<li><a  class="text-center" href="familydetails.html">Family details</a></li>
				<li><a  class="text-center" href="education.php">Education</a></li>
				  <li><a  class="active text-center" href="experience.php">Work Experience</a></li>
				  <li><a  class="text-center" href="about.html">Additional Information</a></li>
				  </ul>
		
						 <h4><a href="logout.php" style="float:right">Logout here</a> </h4>  
			
			
				
				 
					
		
		<h1 class="header text-center">Your Experience</h1>
		
		
		
		<div class="form1 well" style="background-color:white;margin-bottom:0px;">
				<form method="post" name="f1" action="experiencesave.php">
					<fieldset>
						<script type="text/javascript">
								function showfield1(name){
												
												var x = document.getElementById("job").value;
												
									if(x==1)
									{
													document.getElementById('fam1').style.display="block";
													document.getElementById('fam2').style.display="none";
										document.getElementById('fam3').style.display="none";
										document.getElementById('fam4').style.display="none";
									}
									else if(x==2)
									{
										document.getElementById('fam1').style.display="block";
										document.getElementById('fam2').style.display="block";
											document.getElementById('fam3').style.display="none";
										document.getElementById('fam4').style.display="none";
										
									}
									else if(x==3)
									{
										document.getElementById('fam1').style.display="block";
										document.getElementById('fam2').style.display="block";
										document.getElementById('fam3').style.display="block";
										document.getElementById('fam4').style.display="none";
									}
									else if(x==4)
									{
										document.getElementById('fam1').style.display="block";
										document.getElementById('fam2').style.display="block";
										document.getElementById('fam3').style.display="block";
										document.getElementById('fam4').style.display="block";
									}
											}
									
									</script>
					
						<div class="form-group row" style="padding:10px;">
							
							<label class="col-xs-3 col-form-label">No of jobs done in chronological order:</label>
							
							<select class="col-xs-3" id="job"  onchange="showfield1(this.options[this.selectedIndex].value)" required >
											<option value="0">None</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											</select>
			&nbsp &nbsp
							
													</div>
					
						
				
						
						<div id="fam1" style="display:none">
						
						<h3 style="color:#3d4d5c;background-color:#e0e4eb;margin-top:0px;"><strong>Job #1</strong></h3><br>
						
						<div class="form-group row">
											<label class="col-xs-3 col-form-label">Name of the company *</label>
											<input class="col-xs-6" type="text" name="companyname1" required>&nbsp 
										</div><br>
						
						<div class="form-group row">
											<label class="col-xs-3 col-form-label">Position *</label>&nbsp
											<input class="col-xs-6" type="text" name="pos1" required>&nbsp 
										</div><br>
										
											
						<div class="form-group row">
											<label class="col-xs-3 col-form-label">City / Town *</label>
											<input class="col-xs-6" type="text" name="city1" required>&nbsp 
										</div><br>
										
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Period from *</label>
											<input class="col-xs-6 date-own" name="startdate1" required>&nbsp 
											
											<script type="text/javascript">
													  $('.date-own').datepicker({
														 minViewMode: 1,
														 format: 'mm-yyyy'
													   });
																				</script>
											
											
										</div><br>
										
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Period Till *</label>
											<input class="col-xs-6 date-own" name="enddate1" required>&nbsp 
											<script type="text/javascript">
													  $('.date-own').datepicker({
														 minViewMode: 1,
														 format: 'mm-yyyy'
													   });
																				</script>
											
										</div><br>
										
										
										
										
						
						<div class="form-group row text-area">
											<label class="col-xs-3 col-form-label">Work profile in brief *</label>
											
											<textarea class="form-group" rows="5" cols="50" name="description1">
											</textarea>
										</div><br>
										
							
							
								
						</div>
						
						
						
						<div id="fam2" style="display:none">
						
						<h3 style="color:#3d4d5c;background-color:#e0e4eb;margin-top:0px;"><strong>Job #2</strong></h3><br>
						
						<div class="form-group row">
											<label class="col-xs-3 col-form-label">Name of the company *</label>
											<input class="col-xs-6" type="text" name="companyname2" required>&nbsp 
										</div><br>
						
						<div class="form-group row">
											<label class="col-xs-3 col-form-label">Position *</label>&nbsp
											<input class="col-xs-6" type="text" name="pos2" required>&nbsp 
										</div><br>
										
											
						<div class="form-group row">
											<label class="col-xs-3 col-form-label">City / Town *</label>
											<input class="col-xs-6" type="text" name="city2" required>&nbsp 
										</div><br>
										
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Period from *</label>
											<input class="col-xs-6 date-own" name="startdate2" required>&nbsp 
											
											<script type="text/javascript">
													  $('.date-own').datepicker({
														 minViewMode: 1,
														 format: 'mm-yyyy'
													   });
																				</script>
											
											
										</div><br>
										
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Period Till *</label>
											<input class="col-xs-6 date-own" name="enddate2" required>&nbsp 
											<script type="text/javascript">
													  $('.date-own').datepicker({
														 minViewMode: 1,
														 format: 'mm-yyyy'
													   });
																				</script>
											
										</div><br>
										
										
										
										
						
						<div class="form-group row text-area">
											<label class="col-xs-3 col-form-label">Work profile in brief *</label>
											
											<textarea class="form-group" rows="5" cols="50" name="description2">
											</textarea>
										</div><br>
										
							
								
								
						</div>
						
						
						<div id="fam3" style="display:none">
						
						<h3 style="color:#3d4d5c;background-color:#e0e4eb;margin-top:0px;"><strong>Job #3</strong></h3><br>
						
						<div class="form-group row">
											<label class="col-xs-3 col-form-label">Name of the company *</label>
											<input class="col-xs-6" type="text" name="companyname3" required>&nbsp 
										</div><br>
						
						<div class="form-group row">
											<label class="col-xs-3 col-form-label">Position *</label>&nbsp
											<input class="col-xs-6" type="text" name="pos3" required>&nbsp 
										</div><br>
										
											
						<div class="form-group row">
											<label class="col-xs-3 col-form-label">City / Town *</label>
											<input class="col-xs-6" type="text" name="city3" required>&nbsp 
										</div><br>
										
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Period from *</label>
											<input class="col-xs-6 date-own" name="startdate3" required>&nbsp 
											
											<script type="text/javascript">
													  $('.date-own').datepicker({
														 minViewMode: 1,
														 format: 'mm-yyyy'
													   });
																				</script>
											
											
										</div><br>
										
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Period Till *</label>
											<input class="col-xs-6 date-own" name="enddate3" required>&nbsp 
											<script type="text/javascript">
													  $('.date-own').datepicker({
														 minViewMode: 1,
														 format: 'mm-yyyy'
													   });
																				</script>
											
										</div><br>
										
										
										
										
						
						<div class="form-group row text-area">
											<label class="col-xs-3 col-form-label">Work profile in brief *</label>
											
											<textarea class="form-group" rows="5" cols="50" name="description3">
											</textarea>
										</div><br>
										
							
							
								
						</div>
						
						
						<div id="fam4" style="display:none">
						
						<h3 style="color:#3d4d5c;background-color:#e0e4eb;margin-top:0px;"><strong>Job #4</strong></h3><br>
						
						<div class="form-group row">
											<label class="col-xs-3 col-form-label">Name of the company *</label>
											<input class="col-xs-6" type="text" name="companyname4" required>&nbsp 
										</div><br>
						
						<div class="form-group row">
											<label class="col-xs-3 col-form-label">Position *</label>&nbsp
											<input class="col-xs-6" type="text" name="pos4" required>&nbsp 
										</div><br>
										
											
						<div class="form-group row">
											<label class="col-xs-3 col-form-label">City / Town *</label>
											<input class="col-xs-6" type="text" name="city4" required>&nbsp 
										</div><br>
										
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Period from *</label>
											<input class="col-xs-6 date-own" name="startdate4" required>&nbsp 
											
											<script type="text/javascript">
													  $('.date-own').datepicker({
														 minViewMode: 1,
														 format: 'mm-yyyy'
													   });
																				</script>
											
											
										</div><br>
										
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Period Till *</label>
											<input class="col-xs-6 date-own" name="enddate4" required>&nbsp 
											<script type="text/javascript">
													  $('.date-own').datepicker({
														 minViewMode: 1,
														 format: 'mm-yyyy'
													   });
																				</script>
											
										</div><br>
										
										
										
										
						
						<div class="form-group row text-area">
											<label class="col-xs-3 col-form-label">Work profile in brief *</label>
											
											<textarea class="form-group" rows="5" cols="50" name="description4">
											</textarea>
										</div><br>
										
							
							
								
						</div>
						
						<div class="form-group">
						
								
							
									<input type="submit" formaction="experiencesave.php" class="button" onclick="document.f1.submit(); return false;" value="Next">
							      </div>
						
						
						
						
						
						
						
						
						</fieldset>
						
						</div>
						
						
				</form>
		
			
			
			
			
			
			
			
			
			
		</div>
	

		
		
	</body>

</html>

