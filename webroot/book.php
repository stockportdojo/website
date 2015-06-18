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
				<div class="well well-sm" style="margin-top: 1em; max-width: 320px">
					If you're interested in helping out as a Mentor or Volunteer, please use our <a href="/contact.php">Contact Us page</a> to get in touch.
				</div>
			</div>
			<div class="col-md-8">
				<h2>Get Me Coding!</h2>

				<p>We run every 3rd Sunday in the month.</p>
                <p>Our next Dojo is on the 21st June 2015 from 11am to 3pm. Places are limited so when tickets are available you can use the form below to book yours.
					Tickets will be available from 1st June 2015.</p>
                <p><em>Don't forget, Ninjas under 12 will need an adult to stay with them.</em></p>
				<div class="well well-sm">
					<iframe src="//eventbrite.co.uk/tickets-external?eid=17267949903&ref=etckt" frameborder="0"
							height="280" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5"
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
