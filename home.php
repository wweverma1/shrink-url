<?php include ('server/process.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home - Shrink URL</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="stylesheets/util.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/style_home.css">
<!--===============================================================================================-->
</head>
<body>

	<h2 style="margin-top: 8%; margin-bottom:5%; text-align: center; font-weight: bold;">Choose your action</h2>
	<div class="container-home">
		<div class="wrap-home">
			<form class="home-form validate-form" style="border-style: solid;" method="post" action="home.php">
				<?php include('server/errors.php'); ?>
				<span class="home-form-title">
					Shrink your URL
				</span>

				<label class="label-input100">Enter your URL </label>
				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" name="linktobeshared" placeholder="Eg. https://wwww.">
					<span class="focus-input100"></span>
				</div>

				<div class="container-home-form-btn">
					<button class="home-form-btn" name="shrink">
						Get Shrinked URL
					</button>
				</div>
			</form>
			<form class="home-form validate-form" style="border-style: solid;" method="post" action="home.php">
				<?php include('server/errors.php'); ?>
				<span class="home-form-title">
					De-Shrink URL
				</span>

				<label class="label-input100">Enter shrinked URL</label>
				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" name="linktobedeshrinked" placeholder="Shrinked URL">
					<span class="focus-input100"></span>
				</div>

				<div class="container-home-form-btn">
					<button class="home-form-btn" name="deshrink">
						Goto Original URL
					</button>
				</div>
			</form>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->

</body>
</html>
