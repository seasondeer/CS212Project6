<html>
  <body>

    <?php
	//calculates current time
	$timestamp = time();


	//saves the timestamp in the proper format, then prints
	$date = date('D M j g:i:s A', $timestamp);

	$to = "cdk82@nau.edu";

	$subject = $_POST["subject"];

	$message = "HELLO WORLD";
	$from = "From: " . $_POST['email'] . "\r\n" . "CC: " . $_POST['email'];

  if (mail($to, $subject, $message, $from)) {
    echo "Email sent";
  } else {
    echo "error sending email";
  }

	echo "<A HREF='contact.php'>Go Back</A>";

	?>
  </body>
</html>
