<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email is set and not empty
    if (isset($_POST["email"]) && !empty($_POST["email"])) {
        $email = $_POST["email"];

        // Validate email address
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
         
            $to = "steveemejen931@gmail.com";
            $subject = "New signup";
            $message = "A new user signed up with the email: $email";
            $headers = "From: emejensteve1@gmail.com"; 

            if (mail($to, $subject, $message, $headers)) {
                echo "Thank you for signing up. Your email address ($email) has been added to our newsletter.";
            } else {
                echo "Failed to send email. Please try again later.";
            }
        } else {
            // Invalid email format
            echo "Invalid email address.";
        }
    } else {
        // Email field is empty
        echo "Please provide your email address.";
    }
} else {
    // If the request method is not POST, redirect to the form page
    header("Location: your_form_page.php");
    exit;
}
?>
