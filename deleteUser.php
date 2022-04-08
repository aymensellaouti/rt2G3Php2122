<?php
include_once 'classes/autoloader.php';
$id = htmlspecialchars($_GET['id']);
if (isset($id)) {
    $userRepository = new UserRepository();
    $userRepository->deleteById($id);
}

header("location:users.php");