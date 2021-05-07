<?php 
	include('server/config.php');
	$conn = mysqli_connect($host, $username, $password, $database);
	$linkid = $_REQUEST['id'];
?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shrink URL - URL Shrinked</title>
	<link rel="stylesheet" href="stylesheets/style.css">
	<script type="text/javascript" src="javascripts/copy.js"></script>
</head>
<body>
	<?php 
		$query = "SELECT * FROM urls WHERE id ='$linkid' LIMIT 1";
		$result = mysqli_query($conn, $query);
		$ans = mysqli_fetch_assoc($result);
	?>
	<h1>URL Shrinked Successfully ✔️</h1>
	<?php if (is_null($ans["longurl"])!='1') : ?>
		<h2><b><?php echo $ans["longurl"]; ?></b></h2>
		<h3><strong>Shrinked to</strong></h3>
		<div class="output">
			<input type="text" style="color: blue;" value="<?php echo $_SERVER['HTTP_HOST']; ?>/?u=<?php echo $ans["shorturl"]; ?>" id="shortlink" />
			<button type="submit" onclick="copyLink()">Copy Shrinked URL</button>
		</div>
    <?php endif ?>
	<h3><a href="home.php">Back to Home</a></h3>
</body>
</html>