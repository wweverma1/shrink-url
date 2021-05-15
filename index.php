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

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome - Shrink URL</title>

    <!--Inter UI font-->
    <link href="https://rsms.me/inter/inter-ui.css" rel="stylesheet">

    <!--vendors styles-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <!-- Bootstrap CSS / Color Scheme -->
    <link rel="stylesheet" href="stylesheets/style_index.css">
</head>
<body>

<!--navigation-->
<section class="smart-scroll">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark">
            <a class="navbar-brand heading-black" href="index.html">
                Shrink URL
            </a>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span data-feather="grid"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#how_it_works">How it works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#about">About</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>

<!--hero header-->
<section class="py-7 py-md-0 bg-hero" id="home">
    <div class="container">
        <div class="row vh-md-100">
            <div class="col-md-8 col-sm-10 col-12 mx-auto my-auto text-center">
                <h3>Welcome to 🙏</h3>
                <h1 class="heading-black text-capitalize">Shrink URL</h1>
                <p class="lead py-3">Shrink URL is a web app that helps people to shrink their long URLs into small, sharable links in just one click.</p>
                <button class="btn btn-primary d-inline-flex flex-row align-items-center" onclick="window.location.href = 'home.php';">
                    Try it now
                    <em class="ml-2" data-feather="arrow-right"></em>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- features section -->
<section class="pt-6 pb-7" id="how_it_works">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <h2 class="heading-black">How it Works</h2>
                <p class="text-muted lead">Shrink URL quickly converts your long urls into compact & sharable urls in just one click.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-10 mx-auto">
                <div class="row feature-boxes">
                    <div class="col-md-6 box">
                        <div class="icon-box box-primary">
                            <div class="icon-box-inner">
                                <span data-feather="edit-3" width="35" height="35"></span>
                            </div>
                        </div>
                        <h5>Input</h5>
                        <p class="text-muted">You submit your long url in the browser which is passed to the server for processing.</p>
                    </div>
                    <div class="col-md-6 box">
                        <div class="icon-box box-success">
                            <div class="icon-box-inner">
                                <span data-feather="cpu" width="35" height="35"></span>
                            </div>
                        </div>
                        <h5>Processing</h5>
                        <p class="text-muted">The server recieves the url and links it with an unique 5 digit code which are then stored in the database.</p>
                    </div>
                    <div class="col-md-6 box">
                        <div class="icon-box box-danger">
                            <div class="icon-box-inner">
                                <span data-feather="monitor" width="35" height="35"></span>
                            </div>
                        </div>
                        <h5>Output</h5>
                        <p class="text-muted">The server now passes on the Shrinked URL to the browser which is then displayed to you.</p>
                    </div>
                    <div class="col-md-6 box">
                        <div class="icon-box box-info">
                            <div class="icon-box-inner">
                                <span data-feather="globe" width="35" height="35"></span>
                            </div>
                        </div>
                        <h5>Redirection</h5>
                        <p class="text-muted">The server recieves the Shrinked URL and checks its validity and initiates redirection by fetching the respective long url.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mx-auto text-center">
                <p class="text-muted lead">Your urls will be saved for 31 days in our database.</p>
        </div>
    </div>
</section>

<!--faq section-->
<section class="py-7" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <h2>About</h2>
                <p class="text-muted lead">This web app is developed by</p>
                <p class="text-muted lead"><a href="http://wwww.aditya.tools">Aditya Verma</a></p>
            </div>
        </div>
    </div>
</section>


<!--scroll to top-->
<div class="scroll-top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="javascripts/script_index.js"></script>
</body>
</html>