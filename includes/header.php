<?php

$homeActive = '';
$aboutUsActive = '';
$aboutCoderDojoActive = '';
$aboutStockportDojoActive = '';
$whatToBringActive = '';
$mentorsActive = '';
$parentsActive = '';
$whatWeDoActive = '';
$scratchActive = '';
$minecraftActive = '';
$makeyActive = '';
$websitesActive = '';
$raspiActive = '';
$otherActivityActive = '';
$contactActive = '';
$bookActive = '';
$resourcesActive = '';

switch($_SERVER['PHP_SELF']) {

	case '/index.php':
		$homeActive=' active ';
		break;
    case '/about_coderdojo.php':
		$aboutUsActive = ' active ';
		$aboutCoderDojoActive = ' active ';
		break;
    case '/about_stockportdojo.php':
		$aboutUsActive = ' active ';
		$aboutStockportDojoActive = ' active ';
		break;
    case '/what_to_bring.php':
		$aboutUsActive = ' active ';
		$whatToBringActive = ' active ';
		break;
    case '/mentors.php':
		$aboutUsActive = ' active ';
		$mentorsActive = ' active ';
		break;
    case '/info_for_parents.php':
		$aboutUsActive = ' active ';
		$parentsActive = ' active ';
		break;
    case '/scratch.php':
		$whatWeDoActive = ' active ';
		$scratchActive = ' active ';
		break;
    case '/minecraft.php':
		$whatWeDoActive = ' active ';
		$minecraftActive = ' active ';
		break;
    case '/makey_makey.php':
		$whatWeDoActive = ' active ';
		$makeyActive = ' active ';
		break;
    case '/websites.php':
		$whatWeDoActive = ' active ';
		$websitesActive = ' active ';
		break;
    case '/raspberry_pi.php':
		$whatWeDoActive = ' active ';
		$raspiActive = ' active ';
		break;
    case '/other_activities.php':
		$whatWeDoActive = ' active ';
		$otherActivityActive = ' active ';
		break;
    case '/contact.php':
		$contactActive = ' active ';
		break;
    case '/book.php':
		$bookActive = ' active ';
		break;
	case '/resources.php':
		$resourcesActive = ' active ';
		break;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/favicon.ico">

	<title>Stockport CoderDojo</title>

	<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="/css/theme.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">Stockport CoderDojo</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li <?php if ($_SERVER['PHP_SELF'] == '/index.php') { echo ' class="active" ';} ?>><a href="/">Home</a></li>
				<li class="dropdown <?php echo $aboutUsActive; ?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li class="<?php echo $aboutCoderDojoActive;?>"><a href="/about_coderdojo.php">What is CoderDojo?</a></li>
						<li class="<?php echo $aboutStockportDojoActive;?>"><a href="/about_stockportdojo.php">When / Where is StockportDojo?</a></li>
						<li class="<?php echo $whatToBringActive;?>"><a href="/what_to_bring.php">What will I need to bring?</a></li>
						<li class="divider"></li>
						<li class="<?php echo $mentorsActive;?>"><a href="/mentors.php">Who are the Mentors?</a></li>
						<li class="<?php echo $parentsActive;?>"><a href="/info_for_parents.php">Info for parents</a></li>
					</ul>
				</li>
				<li class="dropdown <?php echo $whatWeDoActive;?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">What we do<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li class="<?php echo $scratchActive;?>"><a href="/scratch.php">Scratch</a></li>
						<li class="<?php echo $minecraftActive;?>"><a href="/minecraft.php">Minecraft</a></li>
						<li class="<?php echo $makeyActive;?>"><a href="/makey_makey.php">Makey-makey</a></li>
						<li class="<?php echo $websitesActive;?>"><a href="/websites.php">Websites</a></li>
						<li class="<?php echo $raspiActive;?>"><a href="/raspberry_pi.php">Raspberry Pi</a></li>
						<li class="<?php echo $otherActivityActive;?>"><a href="/other_activities.php">What else?</a></li>
					</ul>
				</li>
				<li class="<?php echo $contactActive;?>" ><a href="/contact.php">Contact Us</a></li>
				<li class="<?php echo $bookActive;?>" ><a href="/book.php">Book Your Place</a></li>
				<li class="<?php echo $resourcesActive;?>" ><a href="/resources.php">Resources</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>