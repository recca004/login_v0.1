<?php include_once('libs/login_users.php')
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Moj Php</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jqery.min.js">
	</script>
</head>
<body>
<div id="mainWrapper">
		<div class="navbar">
	  		<div class="navbar-inner">
	  			<div class="container">
	    			<a class="brand" href="#">MY PHP</a>
	 			 </div><!--end container-->
	    
	  		</div><!-- end navbar-inner-->
		</div><!--end navbar-->

		<div id="content">

			<?php
				if (isset($error)) { echo '<div class="alert alert-error"> ' . $error . ' </div> ' ;} 
			?>

			<div id="form">
				<form method="post" action="libs/login_users.php">
					<h2>Register Here</h2>
					<div class="form_elements">
						<label for="Username">Username</label><br>
						<input type="text" name="usermane" id="usermane">
					</div><!--end form_elements-->

					<div class="form_elements">
						<label for="Username">Emali</label><br>
						<input type="text" name="email" id="email">
					</div><!--end form_elements-->

					<div class="form_elements">
						<label for="Username">Password</label><br>
						<input type="password" name="password" id="password">
					</div><!--end form_elements-->

					<div class="form_elements">
						<label for="Username">Re-password</label><br>
						<input type="password" name="repassword" id="repassword">
					</div><!--end form_elements-->

					<div class="form_elements">
						<input type="submit" name="register" id="register" class="btn btn-success">
					</div><!--end form_elements-->
			</form>
		</div><!--end id form-->
	</div><!--end content-->
</div><!--end mainWrapper-->
</body>
</html>