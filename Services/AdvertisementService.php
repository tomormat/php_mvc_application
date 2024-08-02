<?php
require_once 'models/Advertisement.php';

class AdvertisementService {
    private $db;

    // Constructor to initialize the database connection
    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    // Get all advertisements along with the related user names
    public function getAllAdvertisements() {
        $result = $this->db->query("SELECT advertisement.*, users.name AS username FROM advertisement JOIN users ON advertisement.userid = users.id");
        $advertisements = [];
        while ($row = $result->fetch_assoc()) {
            $advertisements[] = new Advertisement($row['id'], $row['userid'], $row['title'], $row['username']);
        }
        return $advertisements;
    }
}
?>
