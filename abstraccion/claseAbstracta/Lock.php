<?php

    abstract class Lock
    {
        abstract public function acquire();

        public function get()
        {
            //...
        }
    }

?>