<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>PixelOwner Person</title>
    <meta name="description" content="">
    <meta name="author" content="">

	<meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/png" href="img/favicon.png">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		body {
			padding-top: 60px;
			padding-bottom: 40px;
		}
	</style>
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>



<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<a class="brand" href="index.php">PixelOwner Person</a>
				<div class="nav-collapse">

                    <?php
                        if (isset($_SESSION["login"])) {
                    ?>
                    <ul class="nav pull-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Hello, <?php echo $_SESSION["login"]; ?>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>

                    <?php
                        } else {
                    ?>
                            <ul class="nav pull-right">
                                <li><a href="login.php">Login</a></li>
                            </ul>
                    <?php
                        }
                    ?>
				</div>


			</div>
		</div>
	</div>

	<div class="container">
