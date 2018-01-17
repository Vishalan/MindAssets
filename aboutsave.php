
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
				  <li><a  class="text-center" href="experience.php">Work Experience</a></li>
				  <li><a  class="active text-center" href="about.html">Additional Details</a></li>
				  </ul>
	
		
	
		<div class="well" style="height:40%;width:78%;float:right;margin-top:10%;">
		<form>
		<label>Data saved successfully. Thank You! </label>
		<input align="center" type="submit" value="proceed" class="button" formaction="">
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

$s="select email_id from personalinfo WHERE id='$id'";
$r1=mysqli_query($con,$s);

if($row=mysqli_fetch_array($r1))
	{
		$email=$row["email_id"];
	}	

echo $email;
	$verbalskills=$_POST["verbal"];
		$writtenskills=$_POST["written"];
	$creativity=$_POST["creativity"];
	$leadership=$_POST["leader"];	
		$timemanagement=$_POST["time"];
			$goaloriented=$_POST["goal"];

$morecomp=isset($_POST['otherskills']) ? $_POST['otherskills'] : '';			
	
		$msoffice=isset($_POST['office']) ? $_POST['office'] : '';	
		$tally=isset($_POST['tally']) ? $_POST['tally'] : '';		
			$erp=isset($_POST['erp']) ? $_POST['erp'] : '';	
					$photoshop=isset($_POST['photoshop']) ? $_POST['photoshop'] : '';	
		$otherit=isset($_POST['otheritskills']) ? $_POST['otheritskills'] : '';						
	
	
	
	$participation=isset($_POST['participation']) ? $_POST['participation'] : '';			
	$certification=isset($_POST['certification']) ? $_POST['certification'] : '';		
	
	$disability=$_POST["disability"];
	$percentage=isset($_POST['percent']) ? $_POST['percent'] : '';	
	$workinghours=isset($_POST['workinghours']) ? $_POST['workinghours'] : '';	
	$reason=isset($_POST['reason']) ? $_POST['reason'] : '';			
	$description=isset($_POST['description']) ? $_POST['description'] : '';			
	$equipment=isset($_POST['equipment']) ? $_POST['equipment'] : '';			
	$requirements=isset($_POST['requirements']) ? $_POST['requirements'] : '';	

	$hobby=isset($_POST['hobby']) ? $_POST['hobby'] : '';			
	$skills=isset($_POST['skills']) ? $_POST['skills'] : '';	
	$pskills=isset($_POST['pskills']) ? $_POST['pskills'] : '';			
	
	
	//certi upload

	
	

	if(isset($_POST["submit"]))

{

$target_dir = "disabilitycertificate/";



$target_file = $target_dir . basename($_FILES["image1"]["name"]);

$uploadOk = 1;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$filename1=$email."DisabilityCertificate.".$imageFileType;			//give unique filename to each file for all users

$target_file = $target_dir . $filename1;

// Check if image file is a actual image or fake image



// Allow certain file formats

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"

&& $imageFileType != "gif" && $imageFileType != "pdf") {

    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";

    $uploadOk = 0;

}



if ($uploadOk == 0) {

    echo "Sorry, your file was not uploaded.";

} else {

    if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file)) {

        echo "The file ". basename( $_FILES["image1"]["name"]). " has been uploaded.";

    } else {

        echo "Sorry, there was an error uploading your file.";

    }

}

	

}
   
	
	
	
	$sql="insert into aboutdetails(id, verbalskill, writtenskill, creativity, leadership, timemanagement, goaloriented, moreskills, msoffice, tally, erp, 
	photoshop, moreitskills, participations, certifications, disability_type, disability_percent, workinghours, reason, description, equipment, extrarequirement, hobbies, skills, programming_skills) values('$id',
	'$verbalskills', '$writtenskills', '$creativity', '$leadership', '$timemanagement', '$goaloriented', '$morecomp', '$msoffice', '$tally', '$erp', '$photoshop', '$otherit',
'$participation', '$certification', '$disability', '$percentage', '$workinghours', '$reason', '$description', '$equipment', '$requirements', '$hobby', '$skills', '$pskills')";
	
	$r=mysqli_query($con, $sql);
	


	mail($email, "Confirmation of submission", "Thank You for filling the form, Your details has been saved");
	
?>