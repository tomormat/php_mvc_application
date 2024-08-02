<?php 

require_once 'services/UserService.php';

class UserController {
    private $userService;

    // Constructor to initialize the User service
    public function __construct() {
        $this->userService = new UserService();
    }

    // Default method to display the list of users
    public function index() {
        $users = $this->userService->getAllUsers();
        require 'views/users.php';
    }
}
?>
