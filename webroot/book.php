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
                <p>Our next Dojo is on the 16th October 2016 from 11am to 3pm. Places are limited so please use the form below to book yours. Tickets are available from 1st October 2016.</p>
                <p><em>Don't forget, Ninjas under 12 will need an adult to stay with them.</em></p>
                <div style="width:100%; text-align:left;">
                    <iframe
                        src="//eventbrite.co.uk/tickets-external?eid=28015399815&ref=etckt"
                        frameborder="0" height="600"
                        width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5"
                        scrolling="auto" allowtransparency="true"></iframe>
                    <div style="font-family:Helvetica, Arial; font-size:12px; padding:10px 0 5px; margin:2px; width:100%; text-align:left;" ><a class="powered-by-eb" style="color: #ADB0B6; text-decoration: none;" target="_blank" href="http://www.eventbrite.co.uk/">Powered by Eventbrite</a>
                    </div>
                </div>
			</div>
		</div>
	</div> <!-- /container -->
<?php
/**
 * Include the page footer to finish the page neatly.
 */
include(dirname(__FILE__) . '/../includes/footer.php');
