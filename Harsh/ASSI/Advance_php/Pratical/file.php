<?php

// File path
$filePath = "example.txt";

// Check if the file exists
if (file_exists($filePath)) {
    // Open the file in read mode
    $file = fopen($filePath, "r");
    
    // Read the file content
    $content = fread($file, filesize($filePath));
    
    // Close the file
    fclose($file);

    // Display the content on the web page
    echo "<h3>File Content:</h3>";
    echo "<pre>$content</pre>";
} else {
    echo "The file does not exist.";
}

?>
