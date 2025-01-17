<?php
require_once __DIR__."/../controllers/AuthController.php";

class Admin extends Person {
    private $role;
    public function __construct($role = 1)
{
    parent::__construct();
    $this->role = $role;
}

}
