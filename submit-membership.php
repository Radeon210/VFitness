<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect POST data from form
    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $membershipType = isset($_POST['membershipType']) ? $_POST['membershipType'] : "";
    $terms = isset($_POST['terms']) ? $_POST['terms'] : "";

    // TODO: Validate the input

    // Check if the terms checkbox was checked
    if ($terms !== "on") {
        die("You must agree to the terms and conditions.");
    }

    // TODO: Process the payment and store the membership details in the database

    // Assuming everything went well, send a thank you response
    echo "Thank you, " . htmlspecialchars($fullname) . ". You have successfully signed up for a " . htmlspecialchars($membershipType) . " membership.";
    // Redirect to a new page or display a success message
    // header('Location: thank-you.html');
} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
?>
