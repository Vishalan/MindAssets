



<!DOCTYPE html>


<html lang="en">
	<head>
		<link rel="stylesheet" href="form.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

 
<script language="javascript">
$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});


</script>



</head>
	


	<body>

	<div class="container-fluid">
	<div class="bg"></div>

		<ul class="main">
		
		
			<li>	 <a class=" active text-center" href="personalinfo.php">Personal Details</a></li>
						<li><a  class="text-center" href="familydetails.php">Family details</a></li>
			<li><a  class="text-center" href="education.php">Education</a></li>
				  <li><a  class="text-center" href="experience.php">Work Experience</a></li>
				  <li><a  class="text-center" href="about.html">Additional Details</a></li>
				  </ul>
		
		
			
			
					
		
		<h1 class="header text-center">Please enter your Personal Details</h1>
		
		
		
		<div class="form1 well">
				<form action="personal.php" method="post" enctype="multipart/form-data">
					<fieldset>
					
					
						<div class="form-group row">
							
							<label class="col-xs-3 col-form-label">First Name *</label>
							<input class="col-xs-8" type="text" name="fname" required>&nbsp <br>
					
							
							
						</div>
						
						<div class="form-group row">
								<label class="col-xs-3 col-form-label">Father's Name </label>
								<input class="col-xs-8" type="text" name="fathername">&nbsp </div><br>
							
							
							<div class="form-group row">
								<label class="col-xs-3 col-form-label">Mother's Name </label>
								<input class="col-xs-8" type="text" name="mothername">&nbsp </div><br>
						
							
							<div class="form-group row">
								<label class="col-xs-3 col-form-label">Spouse's Name </label>
								<input class="col-xs-8" type="text" name="spousename">&nbsp </div><br>
							<div class="form-group row">
							
							
							
								<label class="col-xs-3 col-form-label">Surname *</label>
								<input class="col-xs-8" type="text" name="lname" required>
							</div><br>
							<div class="form-group row">
								<label class="col-xs-3 col-form-label">Gender *</label> &nbsp


								<br><input class="radio-inline" type="radio" value="male" name="gen">
									&nbsp Male <input class="radio-inline" type="radio" value="female" name="gen"> &nbsp Female
							</div><br>
							<div class="form-group row">
								<label class="col-xs-3 col-form-label">Email id *</label><input class="col-xs-8" type="email" name="email" required>&nbsp </div><br>
								
				
								
									
									
									
									
									
									
								
					


						
							<b><label>Contact Numbers </label></b><bR>	
								<div class="form-group row">
								<label class="col-xs-3 col-form-label">Mobile number *</label>
								<input class="col-xs-4" type="number" name="mobilephone" required>&nbsp </div><br>
								
								<div class="form-group row">
								<label class="col-xs-3 col-form-label">Guardian's number *</label> 
								<input class="col-xs-4" type="number" name="guardianphone" required>&nbsp </div><br>
								
								<div class="form-group row">
								<label class="col-xs-3 col-form-label">Residence Landline number </label> 
								<input class="col-xs-4" type="number" name="landlinephone">&nbsp </div><br>
								
								
							<!--	 <div class="form-group row">
								<label class="col-xs-3 col-form-label">Emergency Phone number *</label> 
								<input class="col-xs-4" type="number" name="ephone" required>&nbsp </div><br>
								-->
								
							<div class="form-group row" id="datetimepicker9">
								<label class="col-xs-3 col-form-label">
										Date Of Birth:*</label><input class="col-xs-8" type="date" name="dob" required>
										
										</div><br>
										
						<!--	<div class="form-group row">
								<label class="col-xs-3 col-form-label">Nationality *</label>
								<input class="col-xs-8" type="text" name="nationality" required>&nbsp </div><br>
							-->	
								<div class="form-group row">
								<label class="col-form-label">Languages known *</label> <br>
								
								<label class="col-xs-3">Sr No</label> &nbsp
								<label class="col-xs-4">Language</label><br><br>	
									<div>
											<label class="col-xs-3">1.</label><input class="col-xs-3" type="text" name="lang1">&nbsp &nbsp &nbsp &nbsp &nbsp

												  <label><input type="checkbox" value="speak"  name="language1[]">speak</label>&nbsp &nbsp &nbsp &nbsp &nbsp
											  
												  <label><input type="checkbox" value="read"  name="language1[]">Read</label>&nbsp &nbsp &nbsp &nbsp &nbsp
											   
												  <label><input type="checkbox" value="write"  name="language1"[]>Write</label>
										</div>
										<div>										
											 <label class="col-xs-3">2.</label><input class="col-xs-3" type="text" name="lang2">&nbsp &nbsp &nbsp &nbsp &nbsp

											  <label><input type="checkbox" value="speak"  name="language2[]">speak</label>&nbsp &nbsp &nbsp &nbsp &nbsp
										  
											  <label><input type="checkbox" value="read"  name="language2[]">Read</label>&nbsp &nbsp &nbsp &nbsp &nbsp
										   
											  <label><input type="checkbox" value="write"  name="language2[]">Write</label>
</div>


											<div>										
											 <label class="col-xs-3">3.</label><input class="col-xs-3" type="text" name="lang3">&nbsp &nbsp &nbsp &nbsp &nbsp

											  <label><input type="checkbox" value="speak" name="language3[]">speak</label>&nbsp &nbsp &nbsp &nbsp &nbsp
										  
											  <label><input type="checkbox" value="read"  name="language3[]">Read</label>&nbsp &nbsp &nbsp &nbsp &nbsp
										   
											  <label><input type="checkbox" value="write"  name="language3[]">Write</label>
												</div>
									
											
											<div>										
											 <label class="col-xs-3">4.</label><input class="col-xs-3" type="text" name="lang4">&nbsp &nbsp &nbsp &nbsp &nbsp
												
												
												
												
											  <label><input type="checkbox" value="speak"  name="language4[]">speak</label>&nbsp &nbsp &nbsp &nbsp &nbsp
										  
											  <label><input type="checkbox" value="read"  name="language4[]">Read</label>&nbsp 1&nbsp &nbsp &nbsp &nbsp
										   
											  <label><input type="checkbox" value="write"  name="language4[]">Write</label>
												</div>
												
											
											<div>										
											 <label class="col-xs-3">5.</label><input class="col-xs-3" type="text" name="lang5">&nbsp &nbsp &nbsp &nbsp &nbsp

											  <label><input type="checkbox" value="speak"  name="language5[]">speak</label>&nbsp &nbsp &nbsp &nbsp &nbsp
										  
											  <label><input type="checkbox" value="read"  name="language5[]">Read</label>&nbsp &nbsp &nbsp &nbsp &nbsp
										   
											  <label><input type="checkbox" value="write"  name="language5[]">Write</label>
												</div>
											
								</div>
								
								
								
								
								
								
						<!--		<div class="form-group row">
								<label class="col-xs-3 col-form-label">Religion *</label> <input class="col-xs-5" type="text" name="religion" required>
							</div><br><br>
							
								<div class="form-group row">
								<label class="col-xs-3 col-form-label">Caste *(Open/SC/ST/OBC/Other)</label> <input class="col-xs-5" type="text" name="caste" required>
							</div><br><br>
							-->
								
								<div class="form-group row">
								<script type="text/javascript">
											function showfield(name){
											  if(name=='other')
											  
												  document.getElementById('other').style.display ="block";
													 
											  
											  else 
											  
														 document.getElementById('other').style.display ="none";
													 
											  
											}
											</script>
								
								
								<label class="col-xs-3 col-form-label">Marital status</label>
									<select onchange="showfield(this.options[this.selectedIndex].value)" class="col-xs-4" style="height:30px" name="maritalstatus">
											  <option>--select--</option>
											  <option value="single">Single</option>
											  <option value="married">Married</option>
											   <option value="divorced">Divorced</option>
											    <option value="widowed">Widowed</option>
												 <option value="other">Other</option>
									
											</select> 
											
											 <div id="other" style="display: none;">
											 <br><br>
												<label class="col-xs-3">Other</label> <input class="col-xs-4" type="text" placeholder="please specify" id="other" name="otherrelation"><br />

											
											
											</div><br>
											</div>
											
											
											
											
								
								<b><label>Permanent Address *</label></b><bR>	
								<div class="form-group row">
								<label class="col-xs-3 col-form-label">Flat no / Wing / Building </label><input class="col-xs-5" type="text" name="address1" required></div>
								<div class="form-group row">
								<label class="col-xs-3 col-form-label">Street / Road </label><input class="col-xs-5" type="text" name="address2" required> <br></div>
						<div class="form-group row">
								<label class="col-xs-3 col-form-label">Area </label><input class="col-xs-5" type="text" name="address3" required></div><br>
								<div class="form-group row">
								<label class="col-xs-3 col-form-label">City </label><input class="col-xs-5" type="text" name="address4" required></div><br>
								<div class="form-group row">
								<label class="col-xs-3 col-form-label">Pin</label><input class="col-xs-5" type="text" name="address5" required></div><br>
								
								<div class="form-group row">
								<label class="col-xs-3 col-form-label">State</label><input class="col-xs-5" type="text" name="address6" required></div><br>
								
								<div class="form-group row">
								<label class="col-xs-3 col-form-label">Country </label><input class="col-xs-5" type="text" name="address7" required></div><br>
								
								<div class="form-group row">										<label class="col-xs-5">Upload scanned copy of Photo ID Proof(Aadhar Card / Passport)(jpg format) *</label>										<div class="input-group col-xs-7">																							<span class="btn btn-default btn-file">													<input type="file" id="imgInp" name="image1">												</span>																																</div>										<img id='img-upload' style="width:50%"/>									</div>																<div class="form-group row">										<label class="col-xs-5">Upload passport size photograph (jpg format) *</label>										<div class="input-group col-xs-7">																							<span class="btn btn-default btn-file">													<input type="file" id="imgInp" name="image2">												</span>																																</div>										<img id='img-upload' style="width:50%"/>									</div>
								
							
								<div class="form-group">
								
								<input type="submit" name="submit" formaction="personal.php" class="button" value="Next">
									
							      </div>
						
						</fieldset>
						
				</form>
		
			
			
			
			
			
			
			
			
			
			
		</div>
	

		
		
	</body>

</html>

