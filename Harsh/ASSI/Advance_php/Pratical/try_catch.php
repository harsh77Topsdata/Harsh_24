<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'example';

try {
    // Establish database connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check for connection error
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute query
    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);

    // Check for query execution error
    if (!$result) {
        throw new Exception("Query failed: " . $conn->error);
    }

    // Display query results
    while ($row = $result->fetch_assoc()) {
        echo $row['name'] . "<br>";
    }

} catch (Exception $e) {
    // Handle exceptions
    echo "Error: " . $e->getMessage();
} finally {
    // Close the connection (if established)
    if (isset($conn) && $conn->connect_error == false) {
        $conn->close();
    }
}
?>
