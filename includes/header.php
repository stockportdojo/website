<?php

/**
 * header.php
 *
 * This file makes the top part of the page.
 * It loads all the other JavaScript and CSS files the page needs.
 *
 * It also creates the menu at the top of the page.
 *
 * Include this file before all your content, like this:
 *
 * include(dirname(__FILE__) . '/../includes/header.php');
 *
 */


/**
 * These variables are used to keep track of what page we're on,
 * so we can make highlight the right option in the menu at the top of the page.
 *
 */
$homeActive = '';
$aboutUsActive = '';
$aboutCoderDojoActive = '';
$aboutStockportDojoActive = '';
$whatToBringActive = '';
$mentorsActive = '';
$parentsActive = '';
$whatWeDoActive = '';
$whatWeveDoneActive = '';
$scratchActive = '';
$minecraftActive = '';
$makeyActive = '';
$makerFunActive = '';
$mothersDayEcardActive = '';
$websitesActive = '';
$raspiActive = '';
$otherActivityActive = '';
$awardsActive = '';
$contactActive = '';
$bookActive = '';
$usefulStuffActive = '';

/**
 * Work out which page we're on and set the matching menu option active.
 *
 */
switch($_SERVER['PHP_SELF']) {

	// We're on the "Home" page
	case '/index.php':
		$homeActive=' active ';
		break;

	// We're on the "What is CoderDojo?" page
    case '/about_coderdojo.php':
		$aboutUsActive = ' active ';
		$aboutCoderDojoActive = ' active ';
		break;

	// We're on the "When / Where is StockportDojo?" page
    case '/about_stockportdojo.php':
		$aboutUsActive = ' active ';
		$aboutStockportDojoActive = ' active ';
		break;

	/// We're on the "What will I need to bring?" page
    case '/what_to_bring.php':
		$aboutUsActive = ' active ';
		$whatToBringActive = ' active ';
		break;

	// We're on the "Who are the Mentors?" page
    case '/mentors.php':
		$aboutUsActive = ' active ';
		$mentorsActive = ' active ';
		break;

	// We're on the "Info for parents" page
    case '/info_for_parents.php':
		$aboutUsActive = ' active ';
		$parentsActive = ' active ';
		break;

	// We're on the "Scratch" page
    case '/scratch.php':
		$whatWeDoActive = ' active ';
		$scratchActive = ' active ';
		break;

	// We're on the "Minecraft" page
    case '/minecraft.php':
		$whatWeDoActive = ' active ';
		$minecraftActive = ' active ';
		break;

	// We're on the "Makey-makey" page
    case '/makey_makey.php':
		$whatWeDoActive = ' active ';
		$makeyActive = ' active ';
		break;


    // We're on the "Makey-makey" page
    case '/maker_fun.php':
        $whatWeveDoneActive = ' active ';
        $makerFunActive = ' active ';
        break;

    // We're on the "Mothers Day E-card" page
    case '/mothers_day_ecards.php':
        $whatWeveDoneActive = ' active ';
        $mothersDayEcardActive = ' active ';
        break;

	// We're on the "Websites" page
    case '/websites.php':
		$whatWeDoActive = ' active ';
		$websitesActive = ' active ';
		break;

	// We're on the "Raspberry Pi" page
    case '/raspberry_pi.php':
		$whatWeDoActive = ' active ';
		$raspiActive = ' active ';
		break;

	// We're on the "What else?" page
    case '/other_activities.php':
		$whatWeDoActive = ' active ';
		$otherActivityActive = ' active ';
		break;

    //We're on the "Awards" page
    case '/awards.php':
        $awardsActive = ' active ';
        break;


    // We're on the "Contact Us" page
    case '/contact.php':
		$contactActive = ' active ';
		break;

	// We're on the "Book your place" page
    case '/book.php':
		$bookActive = ' active ';
		break;

	// We're on the "Useful Stuff" page
	case '/useful_stuff.php':
		$usefulStuffActive = ' active ';
		break;
}

// Here is the start of the HTML page proper.
?>
<!DOCTYPE html>
<html lang="en">
<!-- The head section contains links to all the JavaScript and CSS we need to load -->
<head>
	<!-- Tell the browser how to display the page -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Some information about the website to help search engines understand what the page is about -->
	<meta name="description" content="Stockport CoderDojo is a free code club where children can learn to code in a safe, friendly and relaxed environment.">
	<meta name="author" content="StockportDojo">

	<!-- A link to an icon file that browsers use in favourites, shortcuts and tabs -->
	<link rel="icon" href="/favicon.ico">

	<!-- The page title that shows up in the browser history, favourites and tabs -->
	<title>Stockport CoderDojo</title>

	<!-- Our themed Bootstrap CSS style rules to change the way the page looks -->
	<link href="/css/bootstrap.css" rel="stylesheet">

	<!-- Some more CSS style rules that aren't included in Bootstrap -->
	<link href="/css/theme.css" rel="stylesheet">

	<!-- Some extra rules for older versions of Internet Explorer -->
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- The jQuery JavaScript library that Bootstrap requires -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<!-- Bootstrap core JavaScript -->
	<script src="/js/bootstrap.js"></script>
</head>

<!-- The main body of the page. HTML inside of the body will be displayed -->
<body>

<!-- The menu at the top of the page -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- The menu buttons that are shown to mobile users -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">Stockport CoderDojo</a>
		</div>

		<!-- The menu buttons that are shown to non-mobile users -->
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<?php

				/**
				 * Each of our menu options has a variable that we set earlier to be either
				 * empty or to contain the CSS class "active".
				 *
				 * For example, if we're on the Home page, $homeActive will contain "active" and
				 * that will apply the active CSS class to the menu element, changing its background colour.
				 *
				 * Where we're on a page that's in a submenu, both the top level menu item and the link for
				 * the page will have "active".
				 *
				 */

				?>
				<li class="<?php echo $homeActive; ?>"><a href="/">Home</a></li>
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
                <li class="dropdown <?php echo $whatWeveDoneActive;?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">What we've done<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="<?php echo $mothersDayEcardActive;?>"><a href="/mothers_day_ecards.php">Mother's Day E-Cards</a></li>
                    </ul>
                </li>
                <li class="<?php echo $awardsActive;?>" ><a href="/awards.php">Awards</a></li>
				<li class="<?php echo $contactActive;?>" ><a href="/contact.php">Contact Us</a></li>
				<li class="<?php echo $bookActive;?>" ><a href="/book.php">Book Your Place</a></li>
				<li class="<?php echo $usefulStuffActive;?>" ><a href="/useful_stuff.php">Useful Stuff</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>