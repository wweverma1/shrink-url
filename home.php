<?php include ('server/process.php'); ?>

<html>
<head>
	<title>Shrink URL - HOME</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="stylesheets/style.css">
</head>
<body>

	<h1 style="margin-top: 50px;">Choose your action</h1>

	<div class="row">
	  <div class="column" style="background-color:grey;">
	    <h3>Shrink your URL</h3>
	    <form method="post" action="home.php">
			<?php include('errors.php') ?>
			<div class="input" style="">
				<input type="text" name="linktobeshrinked" placeholder="https://www." />
				<button name="shrink">Get Shrinked URL</button>
			</div>
		</form>
	  </div>
	  <div class="column" style="background-color:darkgrey;">
	    <h3>De-Shrink your URL</h3>
	    <form method="post" action="home.php">
			<?php include('errors.php') ?>
			<div class="input" style="">
				<input type="text" name="linktobedeshrinked" placeholder="Shrinked URL" />
				<button name="deshrink">Goto Original URL</button>
			</div>
		</form>
	  </div>
	</div>
</body>

</html>

