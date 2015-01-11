<?php

$useRecaptcha = false;
if (file_exists(dirname(__FILE__) . '/../includes/recaptchaconfig.php')) {
	include(dirname(__FILE__) . '/../includes/recaptchaconfig.php');
}

?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<?php

/**
 * contact.php
 *
 * This file is the "Contact Us" page.
 *
 */

$formSubmitted = false;
$formErrors = array();
$postedName = '';
$postedEmail = '';
$postedMessage = '';


if (isset($_POST['message'])) {
	$formSubmitted = true;

	if ($useRecaptcha) {
		include(dirname(__FILE__) . '/../includes/recaptcha.php');
		$resp = null;
		$error = null;
		$reCaptcha = new ReCaptcha($secret);
		if ($_POST["g-recaptcha-response"]) {
			$resp = $reCaptcha->verifyResponse(
				$_SERVER["REMOTE_ADDR"],
				$_POST["g-recaptcha-response"]
			);
		}

		if (is_null($resp) || !$resp->success) {
			$formErrors['captcha'] = 'Please confirm you are not a robot';
		}

	}

	if (empty($_POST['senderName'])) {
		$formErrors['senderName'] = 'Please enter your name';
	}

	if (empty($_POST['senderEmail'])) {
		$formErrors['senderEmail'] = 'Please enter your email address so we can reply';
	} elseif(!filter_var($_POST['senderEmail'], FILTER_VALIDATE_EMAIL)) {
		$formErrors['senderEmail'] = 'Please enter a correct email address so we can reply';
 	}

	if (empty($_POST['message'])) {
		$formErrors['message'] = 'Please enter your message';
	}

	if (empty($formErrors)) {

		$message = 'Name: ' . $_POST['senderName'] . "\n";
		$message.= 'Email: ' . $_POST['senderEmail'] . "\n";
		$message.= 'Message: ' . $_POST['message'];

		mail('hippyjim@gmail.com', 'Message From stockportdojo website', $message);

	} else {
		$postedName = $_POST['senderName'];
		$postedEmail = $_POST['senderEmail'];
		$postedMessage = $_POST['message'];
	}

}

/**
 * Include the page header to add the menu at the top of the page.
 */
include(dirname(__FILE__) . '/../includes/header.php');

?>
<div class="container">
	<div class="row">
		<h2>Contact Us</h2>
		<div class="col-md-12">
			<p>If you'd like to know more about us, or are interested in volunteering as a Mentor or Organiser, use the methods below to get in touch.</p>
		</div>
		<div class="col-md-5 gutter-right">
			<div class="well">
				<h3>Get Social</h3>
				<p>Find us on social media:</p>
				<ul>
					<li><a href="https://twitter.com/intent/user?screen_name=stockportdojo">Follow @stockportdojo on Twitter</a></li>
					<li><a href="https://www.facebook.com/stockportdojo">Like us on Facebook</a></li>
				</ul>
				<h3>Get Zen</h3>
				<p>Find our listing on the <a href="https://zen.coderdojo.com/dojo/906">CoderDojo Zen</a> list of dojos</p>
			</div>
			<div class="well">
				<h3>At Startpoint</h3>
				<p>You can contact the Startpoint team on</p>
				<p><span class="glyphicon glyphicon-earphone"></span> 0161 494 9947</p>
			</div>
		</div>
		<div class="col-md-5 well">
			<h3>By email</h3>
			<form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<?php

				if ($formSubmitted && empty($formErrors)) {
					?>
				<div class="alert alert-success" role="alert">
					Thanks for getting in touch. Your message has been sent.
				</div>
					<?php
				}

				?>
				<div class="form-group <?php if (isset($formErrors['senderName'])) { echo "has-error has-feedback"; } ?>">
					<label for="senderName" class="control-label">Your Name</label>
					<input type="text" class="form-control" name="senderName" id="senderName" placeholder="Enter your name" value="<?php echo $postedName; ?>">
					<?php
						if (isset($formErrors['senderName'])) {
							?>

							<span class="glyphicon glyphicon-remove form-control-feedback"></span>
							<?php
							echo "<p class=\"help-block\">" . $formErrors['senderName'] . "</p>";
						}
					?>
				</div>

				<div class="form-group <?php if (isset($formErrors['senderEmail'])) { echo "has-error has-feedback"; } ?>">
					<label for="senderEmail" class="control-label">Email address</label>
					<input type="email" class="form-control" name="senderEmail" id="senderEmail" placeholder="Enter your email" value="<?php echo $postedEmail; ?>">
					<?php
					if (isset($formErrors['senderEmail'])) {
						?>

						<span class="glyphicon glyphicon-remove form-control-feedback"></span>
						<?php
						echo "<p class=\"help-block\">" . $formErrors['senderEmail'] . "</p>";
					}
					?>
				</div>
				<div class="form-group <?php if (isset($formErrors['message'])) { echo "has-error has-feedback"; } ?>">
					<label for="message" class="control-label">Message</label>
					<textarea class="form-control" name="message" id="message" placeholder="Enter your message"><?php echo $postedMessage; ?></textarea>
					<?php
					if (isset($formErrors['message'])) {
						?>

						<span class="glyphicon glyphicon-remove form-control-feedback"></span>
						<?php
						echo "<p class=\"help-block\">" . $formErrors['message'] . "</p>";
					}
					?>
				</div>
				<?php if ($useRecaptcha) { ?>
				<div class="form-group <?php if (isset($formErrors['captcha'])) { echo "has-error has-feedback"; } ?>">
				<?php
					if (isset($formErrors['captcha'])) {
						?>
						<span class="glyphicon glyphicon-remove form-control-feedback"></span>
						<?php
						echo "<p class=\"help-block\">" . $formErrors['captcha'] . "</p>";
					}
				?>
				<div class="g-recaptcha" data-sitekey="6LfaUAATAAAAAGjXvaOBicIc4GmGRO6M6LWqC3HF"></div>
				</div>
				<?php } ?>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
</div>
<?php

/**
 * Include the page footer to finish the page neatly.
 */
include(dirname(__FILE__) . '/../includes/footer.php');
