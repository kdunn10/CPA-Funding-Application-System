<?php

$page_title = "Admin Authentication - Homepage";
include_once 'partials/headers.php';
include_once 'partials/parseProfile.php';
include ("resource/formDB.php");

?>

<style>
      
    #eligibilityTable{
  		font-family: Times New Roman;
  		border-collapse: collapse;
 		width: 100%;
 		
	}

	#eligibilityTable td, #eligibilityTable th {
  		border: 1px solid #ddd;
  		padding: 8px;
  		text-align: left;
  		;
	}

	#eligibilityTable tr:nth-child(even){background-color: #f2f2f2;}
	#eligibilityTable tr:nth-child(odd){background-color: #fff;}

	#eligibilityTable tr:hover {background-color: #ddd;}

	#eligibilityTable th {
 		padding-top: 12px;
  		padding-bottom: 12px;
  		text-align: left;
  		background-color: #071822;
  		color: white;
	}

	#cpaTable{
  		font-family: Times New Roman;
  		border-collapse: collapse;
 		width: 20%;
 		margin-top: -122px;
 
	}

	#cpaTable td, #cpaTable th {
  		border: 1px solid #ddd;
  		padding: 8px;
  		text-align: left;
  	
	}

	#cpaTable td {
		height: 72px;
	}

	#cpaTable tr:nth-child(even){background-color: #f2f2f2;}

	#cpaTable tr:hover {background-color: #ddd;}

	#cpaTable th {
 		padding-top: 12px;
  		padding-bottom: 12px;
  		text-align: left;
  		background-color: #071822;
  		color: white;
	}

	.newEligibilityBtn{
		width: 200px;
		padding: 5px; 
		cursor: pointer; 
		font-size: 20px; 
		background-color:rgba(251, 77, 66, 0.6); 
		color: #071822; font-weight: bold; 
		border: 2px solid #071822; 
		border-radius: 10px; 
		float: right; 
		text-align: center; 
		 
		margin-top: 5px;

	}

	.newEligibilityBtn:hover{background-color:rgba(251, 77, 66, 0.4);}

	.newCpaBtn{
		width: 150px;
		padding: 5px; 
		cursor: pointer; 
		font-size: 15px; 
		background-color:rgba(251, 77, 66, 0.6); 
		color: #071822; font-weight: bold; 
		border: 2px solid #071822; 
		border-radius: 10px;  
		text-align: center; 
		margin-bottom: 15px; 
		margin-top: 5px;
		float: right;




	}

	.newCpaBtn:hover{background-color:rgba(251, 77, 66, 0.4);}

	.eligibilityTable{
		float: left;
		width: 100%;
		
	}

	.cpaTable{
		float: right;
		width: 100%;
		
		
	}

</style>

<div class="container">

  <div class="flag">
    
 
	<?php if(!isset($_SESSION['username'])): ?>

		<!-- <h1>Community Preservation</h1> -->
    	<!-- <p class="lead">We use funds to support historic preservation, affordable housing, and parks and open space.</p> -->
		
		<!-- <P class="lead">You are currently not logged in. Click here to login: <a href="login.php">Login</a>. If you do not have an account, then click here to register: <a href="signup.php">Register</a></P> -->

	<?php else: ?>
		

		<div>
			
			<a href="logout.php" style="float: right; margin-top: 20px;">Logout</a>

			<h1 class="lead" style="font-size: 40px; text-align: left;">Welcome <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?></h1><hr>

		</div>

		<div style="margin-top: 5px; float: center;">

			<h5 style="font-weight: bold;">Welcome to the Admin Panel</h5>
			
		
		</div>

		<div>
			<h3 id="yourform" style="text-align: left; margin-top: 40px; width: 250px; background-color: #071822; color: #fff; padding: 10px; border-radius: 5px 0px 25px 5px;">Submitted Forms</h3>

	
		</div>

		<div class="eligibilityTable">
		
			<table id="eligibilityTable" style="float: left;">
				
				<tr>
					<th>ID</th>
					<th style="margin-right: 50px;">Project Name</th>
					<th style="margin-right: 20%;">Email</th>
					<th>Eligibility Form</th> 
					<th>Approve/Reject</th>
					<th>CPA Form</th>
					<th>Approve/Reject</th>
				</tr>

				<tr>
					
					<?php

					$sel = "SELECT `id`, `projectName`, `email`, `status` FROM `eform`";

					$qrydisplay = mysqli_query($connect, $sel);

					while($row = mysqli_fetch_array($qrydisplay))
					{
						$id = $row['id'];
						$projectName = $row['projectName'];
						$email = $row['email'];
						$status = $row['status'];

						
						echo "<tr><td>".$id."</td><td>".$projectName."</td><td>".$email."</td><td><a href='adminView.php?adminView=$id'>View</a></td><td></td><td></td><td></td></tr>";

					}

					?>

				</tr>

			</table>

		</div>
		
		
	<?php endif ?>


  </div>

</div>

<?php include_once 'partials/footers.php'; ?>

</body>
</html>
