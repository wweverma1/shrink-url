<?php 
	include('config.php');
	$conn = mysqli_connect($host, $username, $password, $database);
	$errors = array(); 

	//shrink
	if (isset($_POST['shrink'])) {

		$link = esc($_POST['linktobeshrinked']);
		
		if (empty($link)) {  array_push($errors, "Enter a link to be Shrinked."); }

		if (count($errors) == 0) 
		{
			while(1)
			{
				$generator = "1357902468qwertyuiopasdfghjklzxcvbnm";
				$shortlink = ""; 
				for ($i = 1; $i <= 5; $i++) 
				{ 
	        		$shortlink .= substr($generator, (rand()%(strlen($generator))), 1); 
	  			}

	  			$query1 = "SELECT * FROM urls WHERE shorturl ='$shortlink' LIMIT 1";
				$result1 = mysqli_query($conn, $query1);
				if(mysqli_num_rows($result1)=='0')
					break;
			}
			
			$myDate= date('Y-m-d');
			$validity = '31';
			$expirydate = date('Y-m-d', strtotime($myDate . "+$validity days") );

			$query2 = "INSERT INTO urls (longurl, shorturl, expiry) VALUES ('$link', '$shortlink', '$expirydate')";
			$result2 = mysqli_query($conn, $query2);
			$Linkid = mysqli_insert_id($conn);
			header('location: display.php?id='.$Linkid);
		}
		
	
	}
	
	//deshrink
	if (isset($_POST['deshrink'])) {


		$shrinkedlink = esc($_POST['linktobedeshrinked']);
		$n = strlen($shrinkedlink) - 5;
		$shortlink = substr($shrinkedlink, $n);
		
		if (strlen($shortlink)!=5)
		{ 
			array_push($errors, "Enter a link to be De-Shrinked."); 
		}
		else
		{
			$query3 = "SELECT * FROM urls WHERE shorturl ='$shortlink' LIMIT 1";
			$result3 = mysqli_query($conn, $query3);
			$nr = mysqli_num_rows($result3);

			if ($nr == '0') 
			{ 
				array_push($errors, "Invalid Shrinked link."); 
			}
		}
		if (empty($errors)) 
		{
			$link = mysqli_fetch_assoc($result3);
		}
		header('location: '.$link["longurl"]);
	}


	function esc(String $value)
	{	
		global $conn;

		$val = trim($value);
		$val = mysqli_real_escape_string($conn, $value);

		return $val;
	}

?>