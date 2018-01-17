



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
		
		
			<li>	 <a class="text-center nav-link" href="personalinfo.php">Personal Details</a></li>
				<li><a  class="text-center" href="familydetails.html">Family details</a></li>
				<li><a  class="active text-center" href="education.php">Education</a>
					</li> 
					
				
				  <li><a  class="text-center" href="experience.php">Work Experience</a>
					
				  
				  </li>
				  <li><a  class="text-center" href="about.html">Additional Details</a></li>
		 </ul>
		
		
			
							 <h4><a href="logout.php" style="float:right">Logout here</a> </h4>  
				
				 
					
		
		<h1 class="header text-center">Enter your Educational Details</h1>
		
						
				<div class="form1 well" style="background-color:white;">
						<form name="f1" action="edusave.php" method="post">
							
								<h3 style="color:#3d4d5c;background-color:#e0e4eb;"><strong>School details</strong></h3><br>
									<div class="form-group row">
							
							<label class="col-xs-3 col-form-label">Name of the school *</label>
							<input class="col-xs-6" type="text" name="schoolname" required>&nbsp <br>
					
							
							
						</div>
										<div class="form-group row">
										<label class="col-xs-3 col-form-label">Board *</label> &nbsp
										
										
																					<select class="col-xs-6" name="schoolboard" required>
											  <option>--select--</option>
											  <option value="ICSE">ICSE</option>
											  <option value="CBSE">CBSE</option>
											  <option value="SSC">SSC/State Board</option>
									
											</select>
										</div><br>
										
									
										
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Month and year of Passing *</label>
											<input class="col-xs-4 date-own" name="schoolyear" type="text">
																								
												<script type="text/javascript">
													  $('.date-own').datepicker({
														 minViewMode: 1,
														 format: 'mm-yyyy'
													   });
																				</script>
										</div>
										<br>
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Percentage / Grade / Pointer *</label>
											<input class="col-xs-6" type="text" name="schoolpercent" required>&nbsp 
										</div><br>
										
										
										 <h3 style="color:#3d4d5c;background-color:#e0e4eb;"><strong>High School / Jr college Details</strong></h3><br>
										<div>
										
						<script type="text/javascript">
											function showfield(name){
											  if(name=='diploma')
											  {
												  document.getElementById('dip').style.display ="block";
													 document.getElementById('jr').style.display="none";
											  }
											  else if(name=='jrcollege')
											  {
														document.getElementById('jr').style.display="block";
														document.getElementById('dip').style.display ="none";
											  }
											   else if(name=='notappl')
											  {
														document.getElementById('jr').style.display="none";
														document.getElementById('dip').style.display ="none";
											  }
											  
											}
											</script>
							
						
										<label class="col-xs-3 col-form-label">Choose One </label>
										
												<select class="col-xs-3" onchange="showfield(this.options[this.selectedIndex].value)" name="option">
												<option value="">--select--</option>
												<option value="diploma">Diploma</option>
												<option value="jrcollege">Jr College / High School</option>
												<option value="notappl">Not Applicable</option>
																		
											</select>
											<br><br>
												<div id="dip" style="display: none;">
														<br>
														<div class="form-group row">
													<label class="col-xs-3 col-form-label">Name of the Institute *</label>
													<input class="col-xs-6" type="text" name="dname" required>&nbsp 
												</div><br>
											
												
												
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">Course / Stream *</label>
													<input class="col-xs-6" type="text" name="dcourse" required>&nbsp 
												</div><br>
												
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">Month and year of Passing *</label>
													<input class="col-xs-4 date-own" name="dyear" type="text">
														<script type="text/javascript">
													  $('.date-own').datepicker({
														 minViewMode: 1,
														 format: 'mm-yyyy'
													   });
																				</script>
														</div>
														<div class="form-group row">
													<label class="col-xs-3 col-form-label">Percentage / Grade / Pointer *</label>
													<input class="col-xs-6" type="text" name="dpercent" required>&nbsp 
												</div><br>
														
											
											
										</div>
										
										<div id="jr" style="display: none;">
														<br><br>
														<div class="form-group row">
													<label class="col-xs-3 col-form-label">Name of the High school/ Jr college *</label>
													<input class="col-xs-6" type="text" name="hsname" required>&nbsp 
												</div><br>
												
														<div class="form-group row">
										<label class="col-xs-3 col-form-label">Board *</label> &nbsp
										
										
												<select class="col-xs-6" name="hsboard" required>
											  <option>--select--</option>
											  <option value="ICSE">ICSE</option>
											 
											  <option value="CBSE">CBSE</option>
											  <option value="SSC">HSC/State Board</option>
									
											</select>
										</div><br>
											
												
												
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">Stream *</label>
													<input class="col-xs-6" type="text" name="hscourse" required>&nbsp 
												</div><br>
												
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">Month and year of Passing *</label>
													<input class="col-xs-4 date-own" name="hsyear" type="text">
															<script type="text/javascript">
													  $('.date-own').datepicker({
														 minViewMode: 1,
														 format: 'mm-yyyy'
													   });
											</script>
													</div>
														<div class="form-group row">
													<label class="col-xs-3 col-form-label">Percentage / Grade / Pointer *</label>
													<input class="col-xs-6" type="text" name="hspercent" required>&nbsp 
												</div><br>	
											</div>
													
										
										
										<br>
										
										
									<h3 style="color:#3d4d5c;background-color:#e0e4eb;"><strong>Graduation Details</strong></h3><br>
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Name of the Institute </label>
											<input class="col-xs-6" type="text" name="uginstitute">&nbsp 
										</div><br>
									
										<div class="form-group row">
											<label class="col-xs-3 col-form-label" >Degree / Diploma </label>
												<input class="col-xs-6" type="text" name="degree">&nbsp 
										
										</div><br>
										
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Course / Stream </label>
											<input class="col-xs-6" type="text" name="ugcourse" >&nbsp 
										</div><br>
										
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Month and year of Passing </label>
											<input class="col-xs-4 date-own" name="ugyear" type="text">
																								
												<script type="text/javascript">
													  $('.date-own').datepicker({
														 minViewMode: 1,
														 format: 'mm-yyyy'
													   });
																				</script>
										</div>
										
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Percentage / Grade / Pointer</label>
											<input class="col-xs-6" type="text" name="ugpercent">&nbsp 
										</div><br>
										
										 
										 
										
									<h3 style="color:#3d4d5c;background-color:#e0e4eb;"><strong>Post Graduation Details</strong></h3><br>
									
								
									
									<div class="form-group row">
									
											<label class="col-xs-3 col-form-label">Name of the institute </label>
											<input class="col-xs-6" type="text" name="pginstitute">&nbsp 
										</div><br>
										
										
										<div class="form-group row">
											<label class="col-xs-3 col-form-label" >Degree / Diploma</label>
												<input class="col-xs-6" type="text" name="pgdegree">&nbsp 
										
										</div><br>
										
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Course / Stream </label>
											<input class="col-xs-6" type="text" name="pgcourse">&nbsp 
										</div><br>
										
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Month and Year of Passing </label>
											<input class="col-xs-4 date-own" name="pgyear" type="text">
											<script type="text/javascript">
													  $('.date-own').datepicker({
														 minViewMode: 1,
														 format: 'mm-yyyy'
													   });
																				</script>
										</div>
										
										<div class="form-group row">
											<label class="col-xs-3 col-form-label">Percentage / Grade / Pointer </label>
											<input class="col-xs-6" type="text" name="pgpercent">&nbsp 
										</div><br>
										
									<div class="form-group row">
								
										<div class="form-group">
						
]
								
									<input type="submit" name="sub" formaction="edusave.php" onclick="document.f1.submit(); return false;" class="button" value="Next">
							      </div>
									</div>
									
								
								</form>
								
				</div>
				
			</fieldset>
						
				
			
			
			
			
			
			
			
			
			
		
	

		
		
	</body>

</html>

