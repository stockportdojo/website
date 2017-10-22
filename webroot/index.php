<?php
/**
 * index.php
 *
 * This file is the "Home" page.
 *
 */

/**
 * Include the page header to add the menu at the top of the page.
 */
include(dirname(__FILE__) . '/../includes/header.php');
?>

<!-- jumbotron is a large element to attract attention to an important message -->
<div class="jumbotron">
	<div class="container">
		<div class="row">
            <div class="col-md-2">
                <img src="/images/logo.gif" alt="CoderDojo Logo" class="logo" />
            </div>
			<div class="col-md-6">
				<h1>Do code.</h1>
				<p>Stockport CoderDojo is a free code club where young people can learn to code in a safe, friendly and relaxed environment.</p>
				<p><a class="btn btn-primary btn-lg" role="button" href="/about_coderdojo.php">Learn more &raquo;</a></p>
			</div>
            <div class="col-md-4">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/0usv3wLnH2w?ecver=1" frameborder="0" allowfullscreen></iframe>
                <div class="col-md-12 small">
                    The video above was made by one our Ninjas - <a href="https://www.youtube.com/watch?v=0usv3wLnH2w">Eddie C</a>
                </div>
            </div>
		</div>
	</div>
</div>

<div class="container">
	<!-- row of columns -->
	<div class="row">
		<div class="col-md-4">
			<h2>One Rule: Be Cool!</h2>
			<p>The heart of CoderDojo is peer-to-peer learning. Ninjas learn from each other as well as from experienced mentors. As part of the global CoderDojo movement we have a large support system with plenty of help to get you started.</p>
			<p><a class="btn btn-default" href="/about_coderdojo.php" role="button">About CoderDojo &raquo;</a></p>
		</div>
		<div class="col-md-4">
			<h2>Where / When?</h2>
			<p>StockportDojo is based in space generously donated by Startpoint Woodley. We hold Dojos every 3rd Sunday of the month. Find out more about our location.</p>
			<p><a class="btn btn-default" href="/about_stockportdojo.php" role="button">Find StockportDojo &raquo;</a></p>
		</div>
		<div class="col-md-4">
			<h2>Sign me up!</h2>
			<p>As we're still growing, places are limited so booking for each session is essential. Visit our booking page for details of our next session and to book your place. If you're interested in mentoring, please get in touch through our <a href="/contact.php">Contact Page</a>.</p>
			<p><a class="btn btn-default" href="/book.php" role="button">Book My Place &raquo;</a></p>
		</div>
	</div>
</div> <!-- /container -->
<?php

/**
 * Include the page footer to finish the page neatly.
 */
include(dirname(__FILE__) . '/../includes/footer.php');

