<?php 
	include('server/config.php');
	$conn = mysqli_connect($host, $username, $password, $database);
	$linkid = $_REQUEST['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>URL Shrinked - Shrink URL</title>
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
	<link rel="stylesheet" type="text/css" href="stylesheets/style_display.css">
<!--===============================================================================================-->
</head>
<body>
	<?php 
		$query = "SELECT * FROM urls WHERE id ='$linkid' LIMIT 1";
		$result = mysqli_query($conn, $query);
		$ans = mysqli_fetch_assoc($result);
	?>
	<h1 style="margin-top: 8%; margin-bottom:5%; text-align: center; font-weight: bold;">URL Shrinked Successfully ✔️</h1>

	<div class="container-display">
		<?php if (is_null($ans["longurl"])!='1') : ?>
		<div class="wrap-display">
			<div class="display-box validate-box" style="border-style: solid;">

				<span class="display-box-title">
					<b><?php echo $ans["longurl"]; ?></b>
				</span>

				<span class="display-box-title">
					Shrinked to
				</span>
				
				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" value="<?php echo $_SERVER['HTTP_HOST']; ?>/?u=<?php echo $ans["shorturl"]; ?>" id="shortlink">
					<span class="focus-input100"></span>
				</div>

				<div class="container-display-box-btn">
					<button class="display-box-btn" type="submit" onclick="copyLink()">
						Copy Shrinked URL
					</button>
				</div>
			</div>
		</div>
		<?php endif ?>
		<h2><a href="home.php" style="color: white; font-weight: bold;" >Back to Home</a></h2>
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
	<script type="text/javascript" src="javascripts/script_copy.js"></script>

</body>
</html>
