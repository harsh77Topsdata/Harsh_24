<?php

function sanitizeAndValidateEmail($email) {
    // Sanitize the email input
    $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Validate the sanitized email
    if (filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL)) {
        return $sanitizedEmail; // Valid email
    } else {
        return false; // Invalid email
    }
}

// Example usage
$email = "example@domain.com <script>alert('Hacked');</script>";

$validatedEmail = sanitizeAndValidateEmail($email);

if ($validatedEmail) {
    echo "Valid email: $validatedEmail\n";
    // Proceed to send email
} else {
    echo "Invalid email input $validatedEmail.\n";
}
?>
