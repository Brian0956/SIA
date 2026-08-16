<?php
// Handles member registration and lookup requests
require_once 'db_connect.php';
require_once 'MemberModel.php';

class MemberController {
    private $model;
    public function __construct($conn) {
        $this->model = new MemberModel($conn);
    }
    public function registerMember($name, $email) {
        return $this->model->createMember($name, $email);
    }
}
