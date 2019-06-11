<?php

$page_title = "User Authentication - Profile";
include_once 'partials/headers.php';
include_once 'partials/parseProfile.php';

?>

<div class="container">

	<div>

		<a href="index.php" style="float: right; margin-top: 15px;">Back</a>

		<h1 style="margin-top: 50px;">Profile</h1><hr>
		
		<?php if(!isset($_SESSION['username'])): ?>

		<P class="lead">You are not authorized to view this page <a href="login.php">Login</a>
			Not yet a member? <a href="signup.php">Signup</a> </P>
		
		<?php else: ?>

			<section class="col col-lg-7">
				
				<div class="row col-lg-3" style="margin-bottom: 10px;">
					<img src="<?php if(isset($profile_picture)) echo $profile_picture; ?>" class="img img-rounded" width="200">
				</div>

				<table class="table table-bordered table-condensed">
					<tr><th style="width: 20%;">Username:</th><td><?php if(isset($username)) echo $username; ?></td></tr>
					<tr><th>Email:</th><td><?php if(isset($email)) echo $email; ?></td></tr>
					<tr><th>Date Joined:</th><td><?php if(isset($date_joined)) echo $date_joined; ?></td></tr>
					<tr><th></th><td><a class="pull-right" href="edit-profile.php?user_identity=<?php if(isset($encode_id)) echo $encode_id; ?>"><span class="glyphicon glyphicon-edit"></span>Edit Profile</a></td></tr>
				</table>

			</section>
		
		<?php endif ?>

	</div>
</div>

<?php include_once 'partials/footers.php'; ?>

