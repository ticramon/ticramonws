<?php

class ConexionDB {
    private static $sgbd = "mysql";
    private static $host = "localhost";
    private static $port = "3306";
    private static $database = "ticramon";
    private static $DB_USER = "ticramon";
    private static $DB_PASSWORD = "soportetecnico";

    private static $connection;

    public static function getConnection() {
        if (!self::$connection) {
            $dsn = self::$sgbd . ":host=" . self::$host . ";port=" . self::$port . ";dbname=" . self::$database;
            try {
                self::$connection = new PDO($dsn, self::$DB_USER, self::$DB_PASSWORD);
                // Set PDO to throw exceptions on error
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                // Handle connection errors
                die("Connection failed: " . $e->getMessage());
            }
        }
        return self::$connection;
    }

    public static function closeConnection() {
        self::$connection = null;
    }
}

// Example usage:
// $db = DatabaseConnection::getConnection();
// Now you can use $db for database operations
// Remember to close the connection when you're done:
// DatabaseConnection::closeConnection();

?>
