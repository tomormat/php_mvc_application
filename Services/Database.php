<?php
class Database {
    private static $instance = null; // Hold the single instance of the class
    private $connection;

    // Private constructor to prevent direct object creation
    private function __construct() {
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        // Check for connection errors
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    // Get the single instance of the Database class
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Get the database connection
    public function getConnection() {
        return $this->connection;
    }
}
?>

