<?php

    require_once('ISearch.php');

    require_once('User.php');
    require_once('Post.php');


    $users = new Users();
    echo $users->all();

    $posts = new Post();
    echo $posts->all();

?>