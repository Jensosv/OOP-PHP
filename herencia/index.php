<?php

    require_once('User.php');
    require_once('Admin.php');

    $admin = new Admin('Edwin Martínez');
    echo $admin->getName();

?>