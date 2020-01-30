<?php

    require 'IPerson.php';

    class Person implements IPerson
    {
        public function gatear()
        {
            echo "hola";
        }

        public function caminar()
        {
            echo "caminando";
        }

        public function correr($mts)
        {
            echo  "corriendo {$mts} millas";
        }
    }

    $edwin = new Person();
    $edwin->caminar();
?>