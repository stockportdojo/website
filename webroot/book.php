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
                <p>Our next Dojo is on the 17th January 2016 from 11am to 3pm. Places are limited so use the form below to book yours. Tickets are available now.</p>
                <p><em>Don't forget, Ninjas under 12 will need an adult to stay with them.</em></p>
				<p><strong>STOP PRESS!</strong> - We're trying out the brand new CoderDojo booking system - powered by Zen! You can find it at:</p>
				<p><a class="btn btn-block btn-primary btn-lg" href="https://zen.coderdojo.com/dojo/gb/stockport/stockport-1"><strong>https://zen.coderdojo.com/dojo/gb/stockport/stockport-1</strong></a></p>
			</div>
		</div>
	</div> <!-- /container -->
<?php
/**
 * Include the page footer to finish the page neatly.
 */
include(dirname(__FILE__) . '/../includes/footer.php');
