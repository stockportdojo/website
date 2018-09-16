<?php

/**
 * minecraft.php
 *
 * This file is the "Minecraft" page.
 *
 */

/**
 * Include the page header to add the menu at the top of the page.
 */
include(dirname(__FILE__) . '/../includes/header.php');

?>
<div class="jumbotron">
	<div class="container">
		<h1>Minecraft</h1>
		<p>Minecraft is a game developed by Mojang and recently Microsoft. Although the game costs money you may play on a free version on a Raspberry Pi.</p>
		<p><a class="btn btn-primary btn-lg" href="../raspberry_pi.php" role="button">For More Info on the Raspberry Pi click here&raquo;</a></p>
	</div>
</div>

<div class="col-md-5 well">
		<h2>Try Something cool with Minecraft Pi!</h2>
		<p>While at the Dojo why not try and do something cool with Minecraft on the Pi. You can code Minecraft Pi using programming languages like Python.</p>
		<p><a class="btn btn-primary btn-lg" href="https://docs.google.com/document/d/1gDoaiSKq6OOSk1GditlkGJnt8qdZ119eW67L-UTkFRI/" role="button">Here's a worksheet CoderDojo have made.&raquo;</a></p>
	</div>
</div>

<img src="/images/minecraft.jpg" alt="Minecraft Pi" height="267" width="565">
<?php
include(dirname(__FILE__) . '/../includes/footer.php');