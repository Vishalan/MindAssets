<?php
$con=mysqli_connect("localhost","riidlorg_mind","mind100","riidlorg_mindassets");

$sq="select id from personalinfo order by id DESC limit 1";
$re= mysqli_query($con,$sq);

	if($row=mysqli_fetch_array($re))
	{
		$id=$row["id"];
	}


?>


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
						<li><a  class="active text-center" href="familydetails.php">Family details</a></li>
			<li><a  class="text-center" href="education.php">Education</a></li>
				  <li><a  class="text-center" href="experience.php">Work Experience</a></li>
				  <li><a  class="text-center" href="about.html">Additional Details</a></li>
				  </ul>
	
		
	
		<div class="well" style="height:40%;width:78%;float:right;margin-top:10%;">
		<form>
		<label>Data saved successfully </label>
		<input align="center" type="submit" value="proceed" class="button" formaction="education.php">
		</form>
		</div>
	</div>
		
		</body>
		
		<html>
		
			





<?php
$fname=$_POST["fname"];
$sname=$_POST["sname"];



$relation=$_POST["relation"];
$other=$_POST["otherrelation"];

if($relation!="other")
	$rel=$relation;
else
	$rel=$other;


$age= isset($_POST['age']) ? $_POST['age'] : '';

$qualification= isset($_POST['qualification']) ? $_POST['qualification'] : '';

$occupation= isset($_POST['occupation']) ? $_POST['occupation'] : '';
$income= isset($_POST['income']) ? $_POST['income'] : '';




$fname1=isset($_POST['fname1']) ? $_POST['fname1'] : '';
$sname1=isset($_POST['sname1']) ? $_POST['sname1'] : '';
$relation1=isset($_POST['relation1']) ? $_POST['relation1'] : '';
$other1=isset($_POST['otherrelation1']) ? $_POST['otherrelation1'] : '';
if($relation1!="other")
	$rel1=$relation1;
else
	$rel1=$other1;
$age1= isset($_POST['age1']) ? $_POST['age1'] : '';
$qualification1= isset($_POST['qualification1']) ? $_POST['qualification1'] : '';
$occupation1= isset($_POST['occupation1']) ? $_POST['occupation1'] : '';
$income1= isset($_POST['income1']) ? $_POST['income1'] : '';



$fname2=isset($_POST['fname2']) ? $_POST['fname2'] : '';
$sname2=isset($_POST['sname2']) ? $_POST['sname2'] : '';
$relation2=isset($_POST['relation2']) ? $_POST['relation2'] : '';
$other2=isset($_POST['otherrelation2']) ? $_POST['otherrelation2'] : '';
if($relation2!="other")
	$rel2=$relation2;
else
	$rel2=$other2;
$age2= isset($_POST['age2']) ? $_POST['age2'] : '';
$qualification2= isset($_POST['qualification2']) ? $_POST['qualification2'] : '';
$occupation2= isset($_POST['occupation2']) ? $_POST['occupation2'] : '';
$income2= isset($_POST['income2']) ? $_POST['income2'] : '';



$fname3=isset($_POST['fname3']) ? $_POST['fname3'] : '';
$sname3=isset($_POST['sname3']) ? $_POST['sname3'] : '';
$relation3=isset($_POST['relation3']) ? $_POST['relation3'] : '';
$other3=isset($_POST['otherrelation3']) ? $_POST['otherrelation3'] : '';
if($relation3!="other")
	$rel3=$relation3;
else
	$rel3=$other3;
$age3= isset($_POST['age3']) ? $_POST['age3'] : '';
$qualification3= isset($_POST['qualification3']) ? $_POST['qualification3'] : '';
$occupation3= isset($_POST['occupation3']) ? $_POST['occupation3'] : '';
$income3= isset($_POST['income3']) ? $_POST['income3'] : '';




$fname4=isset($_POST['fname4']) ? $_POST['fname4'] : '';
$sname4=isset($_POST['sname4']) ? $_POST['sname4'] : '';
$relation4=isset($_POST['relation4']) ? $_POST['relation4'] : '';
$other4=isset($_POST['otherrelation4']) ? $_POST['otherrelation4'] : '';
if($relation4!="other")
	$rel4=$relation4;
else
	$rel4=$other4;
$age4= isset($_POST['age4']) ? $_POST['age4'] : '';
$qualification4= isset($_POST['qualification4']) ? $_POST['qualification4'] : '';
$occupation4= isset($_POST['occupation4']) ? $_POST['occupation4'] : '';
$income4= isset($_POST['income4']) ? $_POST['income4'] : '';




$fname5=isset($_POST['fname5']) ? $_POST['fname5'] : '';
$sname5=isset($_POST['sname5']) ? $_POST['sname5'] : '';
$relation5=isset($_POST['relation5']) ? $_POST['relation5'] : '';
$other5=isset($_POST['otherrelation5']) ? $_POST['otherrelation5'] : '';
if($relation5!="other")
	$rel5=$relation5;
else
	$rel5=$other5;
$age5= isset($_POST['age5']) ? $_POST['age5'] : '';
$qualification5= isset($_POST['qualification5']) ? $_POST['qualification5'] : '';
$occupation5= isset($_POST['occupation5']) ? $_POST['occupation5'] : '';
$income5= isset($_POST['income5']) ? $_POST['income5'] : '';

echo $fname;

$sql="insert into guardian_details(id,firstname, surname, relationship, age, qualification, occupation, annualincome) values('$id',
'$fname', '$sname',  '$rel', '$age', '$qualification', '$occupation', '$income')";

$sql1="insert into othermembers(id, firstname1, surname1, relationship1, age1, qualification1, occupation1, annualincome1, firstname2, surname2, relationship2, age2, qualification2, occupation2, annualincome2, 
firstname3, surname3, relationship3, age3, qualification3, occupation3, annualincome3, firstname4, surname4, relationship4, age4, qualification4, occupation4, annualincome4, 
firstname5, surname5, relationship5, age5, qualification5, occupation5, annualincome5) values('$id',
'$fname1', '$sname1',  '$rel1', '$age1', '$qualification1', '$occupation1', '$income1',
'$fname2', '$sname2',  '$rel2', '$age2', '$qualification2', '$occupation2', '$income2',
'$fname3', '$sname3',  '$rel3', '$age3', '$qualification3', '$occupation3', '$income3',
'$fname4', '$sname4',  '$rel4', '$age4', '$qualification4', '$occupation4', '$income4',
'$fname5', '$sname5',  '$rel5', '$age5', '$qualification5', '$occupation5', '$income5')";


	$r=mysqli_query($con, $sql);
	$r1=mysqli_query($con, $sql1);
	






?>