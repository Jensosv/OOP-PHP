<?php

    abstract class Base
    {
        protected $name = '';

        private function className()
        {
            return get_called_class();
        }

        public function login()
        {
            return "Mi nombre es {$this->name}
            desde la clase <b>{$this->className()}</b>
            y me encuentro iniciando sesion... <br>";
        }
    }

?>