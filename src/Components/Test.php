<?php
    namespace Alsace\FormGenerator\Components;

    class Test{
        public string $id;
        public string $name;
        public string $value;
        public string $class;
        public string $placeholder;
        public string $required;

        protected $aTags = array();

        public function __construct()
        {
            
        }
        public static function make(){
            return new Test();
        }
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
        public function render(){
            echo "<input id='$this->id' name='$this->name' value='$this->value' class='$this->class' placeholder='$this->placeholder' required='$this->required' />";
        }
        public function addTag(Tag $oTag)
        {
            $this->aTags[] = $oTag;
        }

        public function Button(){
            
        }
    }
?>