<?php 

    require 'Lock.php';

    class Cached extends Lock
    {
        public function acquire()
        {
            echo "acquired";
        }
    }

    $cache = new Cached();
    $cache->acquire();

?>