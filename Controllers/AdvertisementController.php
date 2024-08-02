<?php 

require_once 'services/AdvertisementService.php';

class AdvertisementController {
    private $advertisementService;

    // Constructor to initialize the Advertisement service
    public function __construct() {
        $this->advertisementService = new AdvertisementService();
    }

    // Default method to display the list of advertisements
    public function index() {
        $advertisements = $this->advertisementService->getAllAdvertisements();
        require 'views/advertisements.php';
    }
}
?>

