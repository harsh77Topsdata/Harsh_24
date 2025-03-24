<?php
require 'model.php';

class UserController {
    public $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function index() {
        $users = $this->userModel->getUsers();
        require 'UserView.php';
    }
}

// Run the controller
$controller = new UserController();
$controller->index();
?>
