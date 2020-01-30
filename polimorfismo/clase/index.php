<?php
    require_once('Base.php');

    require_once('Admin.php');
    require_once('User.php');
    require_once('Guest.php');

    $guest = new Guest();
    echo $guest->login();

    $user = new User("Edwin Martínez");
    echo $user->login();

    $admin = new Admin("Laura Martinez");
    echo $admin->login();
?>