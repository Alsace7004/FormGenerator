<?php
    namespace Alsace\FormGenerator\Components;

    class PageBuilder{

        private $fields     = [];
        private $from       = [];
        private $conditions = [];

        //select
        public function select(string ...$select){
            $this->fields = $select;
            return $this;
        }
        //from
        public function from(string $table, ?string $aliase=null){
            if($aliase === null){
                $this->from[] = $table;
            }else{
                $this->from[] = "$table as $aliase";
            }
            return $this;
        }
        //where
        public function where(string ...$where){
            foreach($where as $arg){
                $this->conditions[] = $arg;
            }
            return $this;
        }
    }
?>