<?php
namespace Alsace\FormGenerator\Components;

class DataGrid{
    public string $input_attribut,$db_table_attribute; //column


    public array $fields = []; // filter
    public bool $editable; //editable
    public int $nombre; //editable

    public static function make(){
        
        echo "am the make method";
    }

    public function column(string $input_attribut,string $db_table_attribute){
        $this->input_attribut       = $input_attribut;
        $this->db_table_attribute   = $db_table_attribute;
        return $this;
    }
    public function filter(array $fields){
        $this->fields = $fields;
        return $this;
    }
    public function editable(bool $editable){
        $this->editable = $editable;
        return $this;
    }
    public function paginate(int $nombre){
        $this->nombre = $nombre;
        return $this;
    }
}

?>