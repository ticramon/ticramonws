<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'ConexionDB.php'; // Assuming your connection class file is named ConexionDB.php

// Attempt to establish a connection
try {
    $db = ConexionDB::getConnection();
    $message = "Connection to la base de datos established successfully!";
} catch (PDOException $e) {
    $message = "Connection failed: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Database Connection</title>
</head>
<body>
    <h1>Database Connection Test</h1>
    <p><?php echo $message; ?></p>
</body>
</html>
