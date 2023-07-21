<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture the email from the form submission
    $email = $_POST['email'];

    // Perform any necessary validation or processing with the email address here
    // For example, store it in a database, send a confirmation email, etc.

    // Send a response back to the user (you can customize this message as needed)
    echo "Thank you for subscribing with the email: " . $email;
}
?>
