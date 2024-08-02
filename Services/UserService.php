<?php
require_once 'models/User.php';

class UserService {
    private $db;

    // Constructor to initialize the database connection
    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    // Get all users from the database
    public function getAllUsers() {
        $result = $this->db->query("SELECT * FROM users");
        $users = [];
        while ($row = $result->fetch_assoc()) {
            $users[] = new User($row['id'], $row['name']);
        }
        return $users;
    }
}
?>

