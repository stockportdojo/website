<?php

/**
 * mentors.php
 *
 * This file is the "Who are the Mentors?" page.
 *
 */

/**
 * Include the page header to add the menu at the top of the page.
 */
include(dirname(__FILE__) . '/../includes/header.php');

?>
<div class="jumbotron">
	<div class="container">
		<h1>Who are the Mentors?</h1>
		<p>Mentors are volunteers that can help you as you code. However we have a rule. Please, Please, Please, TRIPLE PLEASE, can you search up your problem or question on <a href="https://www.google.com">Google</a> before asking help from a mentor. Mentors can be extremely busy at times and would appreciate you searching on Google.</p>
		<center>
		<h2>Some of our Mentors are...</h2>
		<div class="col-md-5 well">
		<iframe width="350" height="200" src="https://www.youtube.com/embed/zKSMJnoWlpk?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
		<img src="/images/jim.png" alt="Mentors-Jim" height="200" width="320">
		<h3>Jim</h3>
		<div class="col-md-5 well">
		<iframe width="350" height="200" src="https://www.youtube.com/embed/iuvs6fKiRk4?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
		<img src="/images/ryan.png" alt="Mentors-Ryan" height="220" width="250">
		<h3>Ryan</h3>
		<h2>and many more...</h2>
		</center>
		
	<div class="col-md-5 well">
		<h2>Why not join us as a mentor?</h2>
		<p>Know a bit about code? Want to help the community? Why not join us as a mentor? It's free and not compulsory. Mentors must be over the age of 18. If you would like to help as a mentor please go to the contact page by pressing the button below.</p>
		<p><a class="btn btn-primary btn-lg" href="/contact.php" role="button">Contact Us&raquo;</a></p>
	</div>
	</div>
	</div>

	<?php
include(dirname(__FILE__) . '/../includes/footer.php');