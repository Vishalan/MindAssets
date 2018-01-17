
<!DOCTYPE html>


<html lang="en">
	<head>
		<link rel="stylesheet" href="form.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>






	


	<body>

	<div class="container-fluid">
	<div class="bg"></div>

		<ul class="main">
		
		
			<li>	 <a class="text-center" href="personalinfo.php">Personal Details</a></li>
						<li><a  class="text-center" href="familydetails.php">Family details</a></li>
			<li><a  class="text-center" href="education.php">Education</a></li>
				  <li><a  class="active text-center" href="experience.php">Work Experience</a></li>
				  <li><a  class="text-center" href="about.html">Additional Details</a></li>
				  </ul>
	
		
	
		<div class="well" style="height:40%;width:78%;float:right;margin-top:10%;">
		<form>
		<label>Data saved successfully </label>
		<input align="center" type="submit" value="proceed" class="button" formaction="about.html">
		</form>
		</div>
	</div>
		
		</body>
		
		<html>
		
			










<?php
	$con=mysqli_connect("localhost","riidlorg_mind","mind100","riidlorg_mindassets");

								
		
$sq="select id from personalinfo order by id DESC limit 1";
$re= mysqli_query($con,$sq);

	if($row=mysqli_fetch_array($re))
	{
		$id=$row["id"];
	}						
								
$compname1 = isset($_POST['companyname1']) ? $_POST['companyname1'] : '';
$pos1 = isset($_POST['pos1']) ? $_POST['pos1'] : '';

$city1 = isset($_POST['city1']) ? $_POST['city1'] : '';
$start1 = isset($_POST['startdate1']) ? $_POST['startdate1'] : '';

$end1 = isset($_POST['enddate1']) ? $_POST['enddate1'] : '';
$description1 = isset($_POST['description1']) ? $_POST['description1'] : '';

								
								
$compname2 = isset($_POST['companyname2']) ? $_POST['companyname2'] : '';
$pos2 = isset($_POST['pos2']) ? $_POST['pos2'] : '';
$city2 = isset($_POST['city2']) ? $_POST['city2'] : '';
$start2 = isset($_POST['startdate2']) ? $_POST['startdate2'] : '';
$end2 = isset($_POST['enddate2']) ? $_POST['enddate2'] : '';
$description2 = isset($_POST['description2']) ? $_POST['description2'] : '';

								
								
$compname3 = isset($_POST['companyname3']) ? $_POST['companyname3'] : '';
$pos3 = isset($_POST['pos3']) ? $_POST['pos3'] : '';
$city3 = isset($_POST['city3']) ? $_POST['city3'] : '';
$start3 = isset($_POST['startdate3']) ? $_POST['startdate3'] : '';
$end3 = isset($_POST['enddate3']) ? $_POST['enddate3'] : '';
$description3 = isset($_POST['description3']) ? $_POST['description3'] : '';

								
								
$compname4 = isset($_POST['companyname4']) ? $_POST['companyname4'] : '';
$pos4 = isset($_POST['pos4']) ? $_POST['pos4'] : '';
$city4 = isset($_POST['city4']) ? $_POST['city4'] : '';
$start4 = isset($_POST['startdate4']) ? $_POST['startdate4'] : '';
$end4 = isset($_POST['enddate4']) ? $_POST['enddate4'] : '';
$description4 = isset($_POST['description4']) ? $_POST['description4'] : '';
								
								
		  $sql="insert into experiencedetails(id, companyname1, position1, city1, startdate1, enddate1, jobdescription1, companyname2, position2, city2, startdate2, enddate2, jobdescription2,
		  companyname3, position3, city3, startdate3, enddate3, jobdescription3, companyname4, position4, city4, startdate4, enddate4, jobdescription4) values('$id',
		  '$compname1', '$pos1',
		  '$city1', '$start1', '$end1', '$description1', '$compname2', '$pos2',
		  '$city2', '$start2', '$end2', '$description2', '$compname3', '$pos3',
		  '$city3', '$start3', '$end3', '$description3', '$compname4', '$pos4',
		  '$city4', '$start4', '$end4', '$description4')";
								  
								  $r=mysqli_query($con, $sql);
								  
							  
								  ?>