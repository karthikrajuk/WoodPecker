<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    // $lastname = strip_tags(trim($_POST["last-name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"]));
    $message = trim($_POST["message"]);

    // Set recipient email address.
    $recipient = "diwakar.l@softcons.net, karthik.r@softcons.net";

    // Set email subject.
    $subject = "Contact Form Submission from $name";

    // Build the email content.
    $email_content = "First Name: $name\n";
    // $email_content .= "Last Name: $lasttname\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone Number: $phone\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers.
    $headers = "From: $name <$email>";

    // Send the email.
    if (mail($recipient, $subject, $email_content, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href = 'contact.html';</script>";
    } else {
        echo "<p class='error'>Oops! Something went wrong, and we couldn’t send your message.</p>";
    }
} else {
    echo "<p class='error'>There was a problem with your submission, please try again.</p>";
}
?>
