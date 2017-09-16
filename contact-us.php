<?php include 'gzip.php'; // Compress Stuff ?><?php $page = "contact"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'document-head.php'; // Renders HEAD elements of page?>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<title></title>
</head>
<body class="<?php echo $page ?>">
	<?php include 'header.php'; // Renders navigation ?>
	<div class="logomark">
		<section class="fadein fast" id="intro">
			<div class="text-container">
				<h1>Made in the <strong>USA.</strong></h1>
				<p>Thank you for your interest in Novogro&reg;.</p>
				<p>Please use the form below to submit any questions or comments.</p>
			</div>
			<div class="form">
				<form action="contact.php" id="contact-form" method="post" name="contact-form" role="form">
					<div class="messages"></div>
					<div class="controls">
						<div class="form-group">
							<label for="form_name">First Name *</label> <input class="form-control" data-error="First name is required." id="form_name" name="name" placeholder="First Name *" required="required" type="text">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label for="form_lastname">Last Name *</label> <input class="form-control" data-error="Last name is required." id="form_lastname" name="surname" placeholder="Last Name *" required="required" type="text">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label for="form_email">Email *</label> <input class="form-control" data-error="Valid email is required." id="form_email" name="email" placeholder="Email *" required="required" type="email">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label for="form_phone">Phone Number *</label> <input class="form-control" id="form_phone" name="phone" placeholder="Phone Number *" type="tel" required="required" data-error="Phone number is required.">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label for="form_contact">Visitor Category</label>
							 <select data-error="Inquiry is required." id="form_visitor" name="visitor">
								<option>
									What best describes you?
								</option>
								<option value="physician">
									Physician
								</option>
								<option value="vendor">
									Vendor
								</option>
								<option value="other">
									Other
								</option>
							</select>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label for="form_contact">Reason for Inquiry</label>
							 <select data-error="Inquiry is required." id="form_contact" name="contact">
								<option>
									How can we help you?
								</option>
								<option value="business">
									Business Inquiries
								</option>
								<option value="customerservice">
									Customer Service / Technical Questions
								</option>
								<option value="ordering">
									Ordering / Billing
								</option>
c							</select>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label for="form_message">Message *</label> 
							<textarea class="form-control" data-error="A message is required." id="form_message" name="message" placeholder="Message *" required="required" rows="4"></textarea>
							<div class="help-block with-errors"></div>
						</div>
						<div class="g-recaptcha" data-sitekey="6LfjgjAUAAAAAIz-GsdDgtOJPpyQZKZOu3wZi4ay"></div>
						<input class="btn btn-success btn-send" type="submit" value="Send message">
						<p class="text-muted"><strong>*</strong> These fields are required.</p>
					</div>
				</form>
			</div>
		</section>
	</div><?php include 'footer.php'; // Renders page footer ?>
	<script src="https://code.jquery.com/jquery-1.12.0.min.js">
	</script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
	</script> 
	<script src='https://www.google.com/recaptcha/api.js'>
	</script> 
	<script src="validator.js">
	</script> 
	<script src="contact.js">
	</script>
</body>
</html>