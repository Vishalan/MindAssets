<?php
	$con=mysqli_connect("localhost","riidlorg_mind","mind100","riidlorg_mindassets");
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
		
		
			<li>	 <a class=" active text-center" href="personalinfo.php">Personal Details</a></li>
						<li><a  class="text-center" href="familydetails.php">Family details</a></li>
			<li><a  class="text-center" href="education.php">Education</a></li>
				  <li><a  class="text-center" href="experience.php">Work Experience</a></li>
				  <li><a  class="text-center" href="about.html">Additional Details</a></li>
				  </ul>
	
		
	
		<div class="well" style="height:40%;width:78%;float:right;margin-top:10%;">
		<form>
		<label>Data saved successfully </label>
		<input align="center" type="submit" value="proceed" class="button" formaction="familydetails.php">
		</form>
		</div>
	</div>
		
		</body>
		
		<html>
		
			


<div style="float:right">
<?php






$fname=$_POST["fname"];
$fathername=$_POST["fathername"];
$mothername=$_POST["mothername"];
$spousename=$_POST["spousename"];
$lname=$_POST["lname"];

$gender=$_POST["gen"];

$email=$_POST["email"];

$mobileno=$_POST["mobilephone"];
$guardian=$_POST["guardianphone"];
$landline=$_POST["landlinephone"];

$dob=$_POST["dob"];

//languages known

$lang1 = isset($_POST['lang1']) ? $_POST['lang1'] : '';
$lang2 = isset($_POST['lang2']) ? $_POST['lang2'] : '';
$lang3 = isset($_POST['lang3']) ? $_POST['lang3'] : '';
$lang4 = isset($_POST['lang4']) ? $_POST['lang4'] : '';
$lang5 = isset($_POST['lang5']) ? $_POST['lang5'] : '';




$language1 = isset($_POST['language1']) ? $_POST['language1'] : '';
$language2 = isset($_POST['language2']) ? $_POST['language2'] : '';
$language3 = isset($_POST['language3']) ? $_POST['language3'] : '';
$language4 = isset($_POST['language4']) ? $_POST['language4'] : '';
$language5 = isset($_POST['language5']) ? $_POST['language5'] : '';

$l1="";
$l2="";
$l3="";
$l4="";
$l5="";
$l1 .= $lang1 . ":";
$l2 .= $lang2 . ":";
$l3 .= $lang3 . ":";
$l4 .= $lang4 . ":";
$l5 .= $lang5 . ":";


if (is_array($language1) || is_object($language1))
{
foreach($language1 as $lan1)  
   {  
      $l1 .= $lan1.",";  
   }
}   


if (is_array($language2) || is_object($language2))
{
   foreach($language2 as $lan2)  
   {  
      $l2 .= $lan2.",";  
   }
}   

if (is_array($language3) || is_object($language3))
{   
   foreach($language3 as $lan3)  
   {  
      $l3 .= $lan3.",";  
   } 
}

if (is_array($language4) || is_object($language4))
{   
   foreach($language4 as $lan4)  
   {  
      $l4 .= $lan4.",";  
   }
}

if (is_array($language5) || is_object($language5))
{   
   foreach($language5 as $lan5)  
   {  
      $l5 .= $lan5.",";  
   }  
} 
   
//marital status
$maritalstatus=$_POST["maritalstatus"];
$other=$_POST["otherrelation"];
if($maritalstatus!="other")
	$status=$maritalstatus;
else
	$status=$other;


$a1=$_POST["address1"];
$a2=$_POST["address2"];
$a3=$_POST["address3"];
$a4=$_POST["address4"];
$a5=$_POST["address5"];
$a6=$_POST["address6"];
$a7=$_POST["address7"];
$address="";
 $address .= $a1 . ',' . $a2 . ',' . $a3 . ',' . $a4 . ',' . $a5 . ',' . $a6 . ',' . $a7;


//image uploading
if(isset($_POST["submit"]))

{

$target_dir = "photoid/";



$target_file = $target_dir . basename($_FILES["image1"]["name"]);

$uploadOk = 1;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$filename1=$email."AadharInfo.".$imageFileType;			//give unique filename to each file for all users

$target_file = $target_dir . $filename1;

// Check if image file is a actual image or fake image

if(isset($_POST["submit"])) {

    $check = getimagesize($_FILES["image1"]["tmp_name"]);

    if($check !== false) {

        echo "File is an image - " . $check["mime"] . ".";

        $uploadOk = 1;

    } else {

        echo "File is not an image.";

        $uploadOk = 0;

    }

}

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

$target_dir1 = "passportsizephoto/";

$target_file = $target_dir1 . basename($_FILES["image2"]["name"]);



$uploadOk = 1;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$filename2=$email."PassportPhoto.".$imageFileType;			//give unique filename to each file for all users

$target_file = $target_dir1 . $filename2;

// Check if image file is a actual image or fake image

if(isset($_POST["submit"])) {

    $check = getimagesize($_FILES["image2"]["tmp_name"]);

    if($check !== false) {

        echo "File is an image - " . $check["mime"] . ".";

        $uploadOk = 1;

    } else {

        echo "File is not an image.";

        $uploadOk = 0;

    }

}

// Allow certain file formats

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"

&& $imageFileType != "gif"  && $imageFileType != "pdf") {

    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";

    $uploadOk = 0;

}



if ($uploadOk == 0) {

    echo "Sorry, your file was not uploaded.";

} else {

    if (move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file)) {

        echo "The file ". basename( $_FILES["image2"]["name"]). " has been uploaded.";

    } else {

        echo "Sorry, there was an error uploading your file.";

    }

}



}



//,photoid, passportphoto
//,'$image1','$image2'
$sql="insert into personalinfo(firstname, fathername, mothername, spousename, lastname, gender, email_id, phone_no, guardian_no, landline, DOB, language1, language2, language3, language4, language5, marital_status, address,photoid, passportphoto) values('$fname','$fathername', '$mothername', '$spousename', '$lname','$gender','$email','$mobileno', '$guardian', '$landline', '$dob', '$l1', '$l2', '$l3', '$l4', '$l5', '$status', '$address','$filename1','$filename2')";


$r=mysqli_query($con, $sql);



?>