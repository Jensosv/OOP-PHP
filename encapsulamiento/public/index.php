<?php

    require 'Author.php';

    $author = new Author('Edwin', 'Martínez');
    echo "Nombre: {$author->name} {$author->lastname} <br>";
    echo $author->greet();

?>