<?php
    namespace Alsace\FormGenerator\Components;

    class PageBuilder{

        public string $id;
        public string $name;
        public string $value;
        public string $class;
        public string $placeholder;
        public string $required;
        public string $bind;

        

        public function id(string $id){
            $this->id = $id;
            return $this;
        }
        public function name(string $name){
            $this->name = $name;
            return $this;
        }
        public function value(string $value){
            $this->value = $value;
            return $this;
        }
        public function class(string $class){
            $this->class = $class;
            return $this;
        }
        public function placeholder(string $placeholder){
            $this->placeholder = $placeholder;
            return $this;
        }
        public function required(string $required){
            $this->required = $required;
            return $this;
        }
        public function bind(string $bind){
            $this->bind = $bind;
            return $this;
        }
    }
?>