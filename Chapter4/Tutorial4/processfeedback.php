<?php

//create short variable names
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$feedback = trim($_POST['feedback']);

if (preg_match('/^[a-zA-Z0-p_\-\.]+@[a-zA-z0-9\-]+\.[a-zA-Z0-9\-\.]+$/',
              $email) === 0) {
  echo "<p>That is not a valid email address.</p>".
        "<p>please return to the previous page and try again.</p>";
  exit;
}

//set up some static information
$toaddress = "feedback@example.com";
if (preg_match('/shop|customer service|retail/', $feedback)) {
  $toaddress = 'retail@example.com';
} else if (preg_match('/deliver|fulfill/', $feedback)) {
  $toaddress = 'fulfillment@example.com';
} else if (preg_match('/bill|account/', $feedback)) {
  $toaddress = 'accounts@example.com';
}
if (preg_match('/bigcustomer\.com/', $email)) {
  $toaddress = 'bob@example.com';
}

$subject = "Feedback from web site";

$mailcontent = "Customer name: ".str_replace("\r\n", "", $name)."\n".
               "Customer email: ".str_replace("\r\n", "",$email)."\n".
               "Customer comments:\n".str_replace("\r\n", "",$feedback)."\n";

$fromaddress = "From: webserver@example.com";

//invoke mail() function to send mail
mail($toaddress, $subject, $mailcontent, $fromaddress);

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bob's Auto Parts - Feedback Submitted</title>
  </head>
  <body>

    <h1>Feedback Submitted</h1>
    <p>Your feedback (shown  below) has been sent.</p>
    <p><?php echo nl2br(htmlspecialchars($feedback)); ?> </p>
    <p><?php echo "Email sent to: $toaddress"; ?></p>
  </body>
</html>