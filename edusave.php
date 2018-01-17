
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
			<li><a  class="active text-center" href="education.php">Education</a></li>
				  <li><a  class="text-center" href="experience.php">Work Experience</a></li>
				  <li><a  class="text-center" href="about.html">Additional Details</a></li>
				  </ul>
	
		
	
		<div class="well" style="height:40%;width:78%;float:right;margin-top:10%;">
		<form>
		<label>Data saved successfully </label>
		<input align="center" type="submit" value="proceed" class="button" formaction="experience.php">
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


//school details



$nameofschool=isset($_POST['schoolname']) ? $_POST['schoolname'] : '';
$board=isset($_POST['schoolboard']) ? $_POST['schoolboard'] : '';
$passyear=isset($_POST['schoolyear']) ? $_POST['schoolyear'] : '';
$percent=isset($_POST['schoolpercent']) ? $_POST['schoolpercent'] : '';


//highschool 


$hsname = isset($_POST['hsname']) ? $_POST['hsname'] : '';
$hsboard = isset($_POST['hsboard']) ? $_POST['hsboard'] : '';
$hscourse = isset($_POST['hscourse']) ? $_POST['hscourse'] : '';
$hspass = isset($_POST['hsyear']) ? $_POST['hsyear'] : '';
$hsper = isset($_POST['hspercent']) ? $_POST['hspercent'] : '';

//diploma
$dname = isset($_POST['dname']) ? $_POST['dname'] : '';
$dcourse = isset($_POST['dcourse']) ? $_POST['dcourse'] : '';
$dyear = isset($_POST['dyear']) ? $_POST['dyear'] : '';
$dper = isset($_POST['dpercent']) ? $_POST['dpercent'] : '';

//graduation details
$instname=isset($_POST['uginstitute']) ? $_POST['uginstitute'] : '';
$degree=isset($_POST['degree']) ? $_POST['degree'] : '';
$course=isset($_POST['ugcourse']) ? $_POST['ugcourse'] : '';
$passingyear=isset($_POST['ugyear']) ? $_POST['ugyear'] : '';
$uggrade=isset($_POST['ugpercent']) ? $_POST['ugpercent'] : '';

//post graduation details
$postinstname=isset($_POST['pginstitute']) ? $_POST['pginstitute'] : '';
$postdegree=isset($_POST['pgdegree']) ? $_POST['pgdegree'] : '';
$postcourse=isset($_POST['pgcourse']) ? $_POST['pgcourse'] : '';
$postpassingyear=isset($_POST['pgyear']) ? $_POST['pgyear'] : '';
$pggrade=isset($_POST['pgpercent']) ? $_POST['pgpercent'] : '';



$sql="insert into educationdetails(id, schoolname, board, yearofpassing, percentage, highschoolname, highschoolboard, highschoolcourse, highschoolpassingyear, highschoolpercent, diplomacollgname,
diplomacourse, diplomapassingyear, diplomapercent) values('$id', '$nameofschool','$board','$passyear','$percent', '$hsname', '$hsboard', '$hscourse', '$hspass', '$hsper', '$dname', '$dcourse',
'$dyear', '$dper')";

$sql1="insert into postgraduationdetails(id, collegename, degree, course, yearofpassing, ugpercent, postinstitutename, pgdegree, pgcourse, pgyearofpassing, pgpercent) values('$id',
'$instname', '$degree', '$course', '$passingyear', '$uggrade', '$postinstname', '$postdegree', '$postcourse', '$postpassingyear', '$pggrade')";

$r=mysqli_query($con, $sql);
$r1=mysqli_query($con, $sql1);




?>