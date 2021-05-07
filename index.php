<?php 
	include('server/config.php');
	$shortlink = $_REQUEST['u']; 
	if(empty($shortlink)!=1)
	{
		$conn = mysqli_connect($host, $username, $password, $database);
		$query = "SELECT * FROM urls WHERE shorturl ='$shortlink' LIMIT 1";
		$result = mysqli_query($conn, $query);
		$link = mysqli_fetch_assoc($result);
		if(is_null($link)!='1')
		{
			header('location: '.$link["longurl"]);
		}
	}
?>

<html>
<head>
	<title>Shrink URL - Welcome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="stylesheets/style.css">
</head>
<body>
	<h2 style="margin-top: 50px;">Welcome 🙏</h2>
	<h1 style="font-weight: bold;">Shrink URL</h1>
	<h2 style="margin-top: 20px;"><a href="home.php">Use Web App</a></h2>
</body>
</html>

