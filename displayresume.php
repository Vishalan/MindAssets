<!DOCTYPE html>
<html lang="en">
	<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.0-beta.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.1.135/jspdf.min.js"></script>
<script type="text/javascript" src="http://cdn.uriit.ru/jsPDF/libs/adler32cs.js/adler32cs.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2014-11-29/FileSaver.min.js
"></script>
<script type="text/javascript" src="libs/Blob.js/BlobBuilder.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.addimage.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.standard_fonts_metrics.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.split_text_to_size.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.from_html.js"></script>
<script type="text/javascript" src="js/basic.js"></script>
		<link rel="stylesheet" href="edu.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">





</head>
	
<body>
<div class="container" id="content">
	<?php
	$con=mysqli_connect("localhost","riidlorg_mind","mind100","riidlorg_mindassets");
		$sql="select id from personalinfo ORDER BY id DESC LIMIT 1";
									$r=mysqli_query($con, $sql);
										while($row=mysqli_fetch_array($r))
								{
									$id=$row["id"];
								}
						
				$sql1="select * from personalinfo where id='$id'";
$r1=mysqli_query($con, $sql1);
?>
<div class="page" style="border:solid .5px; padding:10px;">
	<div class="part1" style="width:50%;">
				<?php
										while($row=mysqli_fetch_array($r1))
										{
										 ?>
									 <h4> personal details:- </h4>
									 <hr>
											<label>full name:</label>&nbsp	
											<?php echo $row["firstname"];  ?>&nbsp
									 <?php echo $row["middlename"];  ?>&nbsp
										<?php	echo $row["lastname"]; ?>&nbsp <br>
										
								<label>Gender:</label>&nbsp	<?php	echo $row["gender"]; ?> <br>
										
										<label>Email id:</label>&nbsp <?php	echo $row["email_id"]; ?><br>
										<label>Phone no:</label>&nbsp	<?php	echo $row["phone_no"]; ?><br>
										<label>Date of birth:</label>&nbsp <?php		echo $row["DOB"]; ?><br>
										<label>Adress:</label>&nbsp <?php	echo $row["address1"].","; ?>&nbsp
										<?php	echo $row["address2"].","; ?>&nbsp
										<?php	echo $row["address3"];
										
										
										} ?>
									
										
	</div>
	<br><br>
	<div class="part2">
	<?php $sql2="select id from educationdetails ORDER BY id DESC LIMIT 1";
									$r2=mysqli_query($con, $sql2);
										while($row=mysqli_fetch_array($r2))
								{
									$id=$row["id"];
								}
						
				$sql3="select * from educationdetails where id='$id'";
$r3=mysqli_query($con, $sql3); 

			while($row=mysqli_fetch_array($r3))
										{
										 ?>
									 <h4>Educational details:- </h4>
									 <hr>
									<br>
											<label>School name:</label>&nbsp	
											<?php echo $row["schoolname"];  ?><br>
									 
										
								<label>Board:</label>&nbsp	<?php	echo $row["board"]; ?> <br>
										
										<label>Passing year:</label>&nbsp <?php	echo $row["yearofpassing"]; ?><br>
										<label>Percentage:</label>&nbsp	<?php	echo $row["percentage"]; ?><br>
										
									<br>
										<label>college name:</label>&nbsp  <?php		echo $row["collegename"]; ?><br>
										<label>Degree in:</label>&nbsp <?php	echo $row["degree"].","; ?><br>
										<label>Course:</label>&nbsp <?php	echo $row["field"]; ?><br>
										<label>year of passing:</label>&nbsp	<?php	echo $row["yearofpassing"]; 
										
										
										
										
										} ?>
									
<button id="cmd">Export to  PDF</button>
</div>
	
	
	
</div>
</div>


	
<script language="javascript">
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {
    doc.fromHTML($('#content').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});
</script>
	
	
	

</body>

</html>
