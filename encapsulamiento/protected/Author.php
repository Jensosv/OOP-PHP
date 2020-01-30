<?php

    class Author
    {
        protected $name;
        protected $lastname;

        public function __construct($name, $lastname)
        {
            $this->name = $name;
            $this->lastname = $lastname;
        }

        public function greet()
        {
            echo "Hola, cómo estas? {$this->name} {$this->lastname} <br>";
        }
    }
    

?>