<?php

    class Author
    {
        private $name;
        private $lastname;

        public function __construct($name, $lastname)
        {
            $this->name = $name;
            $this->lastname = $lastname;
        }

        public function greet()
        {
            return "Hola, cómo estas? {$this->name} {$this->lastname} <br>";
        }
    }
    

?>