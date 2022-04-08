<?php
include_once 'autoloader.php';
class UserRepository extends Repository
{
    public function __construct() {
        parent::__construct('user');
    }
}