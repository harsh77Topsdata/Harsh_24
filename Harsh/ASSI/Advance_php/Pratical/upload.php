<?php

$allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
$maxFileSize = 5 * 1024 * 1024; // 5MB


if (isset($_POST['upload'])) {

    if ($_FILES['file']['error'] == 0) {
        // Get file info
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];
        
        // Check if file type is allowed
        if (!in_array($fileType, $allowedTypes)) {
            echo "Error: Only JPEG, PNG, and PDF files are allowed.";
            exit();
        }
        
        // Check if file size exceeds the limit
        if ($fileSize > $maxFileSize) {
            echo "Error: File size exceeds the 5MB limit.";
            exit();
        }

        // Generate a unique file name to prevent overwriting
        $uploadDir = 'uploads/';
        $uniqueFileName = uniqid('', true) . '-' . basename($fileName);
        $uploadFilePath = $uploadDir . $uniqueFileName;

        
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Move the uploaded file to the server directory
        if (move_uploaded_file($fileTmpName, $uploadFilePath)) {
            echo "File uploaded successfully!<br>";
            echo "Uploaded file: " . $uniqueFileName;
        } else {
            echo "Error: File upload failed!";
        }
    } else {
        echo "Error: No file uploaded or an error occurred during upload.";
    }
}
?>
