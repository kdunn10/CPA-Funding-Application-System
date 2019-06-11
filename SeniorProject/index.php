<?php

$page_title = "User Authentication - Homepage";
include_once 'partials/headers.php';

?>

<div class="container">

  <div class="flag">
    <h1>Community Preservation</h1>
    <p class="lead">We use funds to support historic preservation, affordable housing, and parks and open space.</p>
  
	<?php if(!isset($_SESSION['username'])): ?>
		
		<P class="lead">You are currently not logged in. Click here to login: <a href="login.php">Login</a>. If you do not have an account, then click here to register: <a href="signup.php">Register</a></P>

	<?php else: ?>
		<p class="lead">You are logged in as <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?> <a href="logout.php">Logout</a></p>

	<?php endif ?>


  </div>

</div>

<?php include_once 'partials/footers.php'; ?>

</body>
</html>

