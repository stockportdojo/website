<?php

/**
 * book.php
 *
 * This file is the "Book Your Place" page.
 *
 */

/**
 * Include the page header to add the menu at the top of the page.
 */
include(dirname(__FILE__) . '/../includes/header.php');

?>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img class="img-responsive img-thumbnail" src="/images/book_your_place.jpg"
					 alt="Photograph of Ninjas coding with Minecraft at Stockport Dojo">
			</div>
			<div class="col-md-8">
				<h2>Get Me Coding!</h2>

				<p>We run every 3rd Sunday in the month.</p>
				<p>Our next Dojo is on the 21st September from 10am to 2pm. Places are limited so use the form below to book yours.</p>
				<p><em>Don't forget, Ninjas under 12 will need an adult to stay with them.</em></p>
				<div class="well well-sm">
					<iframe src="//eventbrite.co.uk/tickets-external?eid=12633674661&ref=etckt" frameborder="0"
							height="260" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5"
							scrolling="auto" allowtransparency="true"></iframe>
				</div>
			</div>
		</div>
	</div> <!-- /container -->
<?php
/**
 * Include the page footer to finish the page neatly.
 */
include(dirname(__FILE__) . '/../includes/footer.php');
