<?php

$page_title = "User Authentication - Eligibility Form Page";
include_once 'partials/headers.php';
include_once 'partials/parseProfile.php';
include ("resource/formDB.php");


if(isset($_POST['submitEligibilityBtn']))
{
	$email = $_POST['email'];
	$projectName = $_POST['projectName'];
	$shortProjectDescription = $_POST['shortProjectDescription'];
	$projectStreetAddress = $_POST['projectStreetAddress'];
	$projectNeighborhood = $_POST['projectNeighborhood'];
	$projectZip = $_POST['projectZip'];
	$applicantOrg = $_POST['applicantOrg'];
	$contactPersonTitle = $_POST['contactPersonTitle'];
	$phoneNumber = $_POST['phoneNumber'];

	$sql = "INSERT INTO `eform`(`email`, `projectName`, `shortProjectDescription`, `projectStreetAddress`, `projectNeighborhood`, `projectZip`, `applicantOrg`, `contactPersonTitle`, `phoneNumber`) VALUES ('$email','$projectName','$shortProjectDescription','$projectStreetAddress','$projectNeighborhood','$projectZip','$applicantOrg','$contactPersonTitle','$phoneNumber')";

	$qry = mysqli_query($connect, $sql);

	if($qry)
		{
			header("location: index.php");
		}


}

?>

<style type="text/css">
	
	.ediv
	{
		margin-top: 10px;
	}

</style>

<div style="background-color: rgba(255,255,255,0.7); padding-left: 30px; padding-bottom: 20px; border-radius: 20px;" class="container">
	
	<div>

		<a href="index.php" style="float: right; margin-top: 15px;">Back</a>

		<h2 style="margin-top: 60px; padding-top: 10px;">CPA Boston - Eligibility & Information Form</h2><hr>

	</div>

	<div style="padding-right: 100px;">

		<form action="" method="POST">

			<div>
				<label for="emailField">Email Address:</label>
				<input type="text" name="email" class="form-control" id="emailField" value="<?php if(isset($email)) echo $email; ?>">
			</div>

			<h4 style="width: 300px; background-color: #071822; color: #fff; padding: 10px; border-radius: 0px 0px 25px 0px; margin-top: 25px; margin-bottom: 25px;">Summary Details</h4>

			<div class="ediv">
				<label for="projectNameField">Project Name:</label>
				<input type="text" name="projectName" class="form-control" id="projectNameField" placeholder="Enter Your Answer">
			</div>

			<div class="ediv">
				<label for="shortProjectDescriptionField">Short Project Description:</label>
				<input type="text" name="shortProjectDescription" class="form-control" id="shortProjectDescriptionField" placeholder="Enter Your Answer">
			</div>
			
			<div class="ediv">
				<label for="projectStreetAddressField">Project Street Address:</label>
				<input type="text" name="projectStreetAddress" class="form-control" id="projectStreetAddressField" placeholder="Enter Your Answer">
			</div>
			
			<div class="ediv">
				<label for="projectNeighborhoodField">Project Neighborhood:</label>
				<input type="text" name="projectNeighborhood" class="form-control" id="projectNeighborhoodField" placeholder="Enter Your Answer">
			</div>
			
			<div class="ediv">
				<label for="projectZipField">Project Zip-Code:</label>
				<input type="text" name="projectZip" class="form-control" id="projectZipField" placeholder="Enter Your Answer">
			</div>
			
			<div class="ediv">
				<label for="applicantOrgField">Applicant Organization:</label>
				<input type="text" name="applicantOrg" class="form-control" id="applicantOrgField" placeholder="Enter Your Answer">
			</div>

			<div class="ediv">
				<label for="contactPersonTitleField">Contact Person & Title:</label>
				<input type="text" name="contactPersonTitle" class="form-control" id="contactPersonTitleField" placeholder="Enter Your Answer">
			</div>
			
			<div class="ediv">
				<label for="phoneNumberField">Phone Number:</label>
				<input type="text" name="phoneNumber" class="form-control" id="phoneNumberField" placeholder="Enter Your Answer">
			</div>
			
			<input type="submit" name="submitEligibilityBtn" class="btn btn-primary" style="border-radius: 10px; padding-left: 35px; padding-right: 35px; margin-top: 25px; background-color: #071822; color: #fff; font-size: 20px;" value="Submit">
			

		</form>

	</div>

</div>

</body>
</html>




