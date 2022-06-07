<?php

require_once 'includes/sidebarAdmin.php';

$data = new UserControllers();
$users =$data-> getAllUsers();
print_r($users);

?>