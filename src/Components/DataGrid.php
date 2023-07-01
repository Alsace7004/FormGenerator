<?php
namespace Alsace\FormGenerator\Components;

class DataGrid{
    public      string  $input_attribut;
    public      string  $db_table_attribute; //column
    protected   array   $data = [];          //column
    protected           $sAttributes= [];

    public      array   $fields = [];        //filter
    public      bool    $editable;           //editable
    public      int     $nombre;             //editable
    private             $table;

    public function __constructor() {
        // Set HTML code to empty string
        $this->table = "";
    }    

    public function column(string $input_attribut,string $db_table_attribute){
        $this->sAttributes += [$input_attribut=>$db_table_attribute];
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

    public function datas(array $data){
        $data_converted_to_object = $this->convert_array_to_object($data);
        $this->data = $data_converted_to_object;
        return $this;
    }
    //convert array to object
    private function convert_array_to_object($arr){
        foreach($arr as $r){
            $object[] = (object) $r;
        }
        return $object;
    }

    public function renderTable(){
        

        $this->table = "<table class='table table-bordered table-stripped table-hovered'>";
                /* -------------------thead-begin------------------ */
                $this->table .= "<thead>";
                    $this->table .= "<tr>";
                        foreach($this->sAttributes as $k=> $head){
                            $this->table .= "<th>".$k."</th>";
                        }
                    $this->table .= "</tr>";
                $this->table .= "</thead>";
                /* -------------------thead-end------------------ */
                /* -------------------tbody-begin------------------ */
                $this->table .= "<tbody>";
                //dd($this->data);
                    foreach($this->data as $k=> $item){
                        $this->table .= "<tr>";
                        //dd($this->sAttributes);
                            foreach($this->sAttributes as $head){
                              
                                //if(is_array($this->sAttributes)){
                                 //   $this->table .= "<td>".$item[$head]."</td>"; //Array
                               // }else{
                                    $this->table .= "<td>".$item->$head."</td>"; //Object
                                //}
                            }
                        $this->table .= "</tr>";
                    }
                $this->table .= "</tbody>";
                /* -------------------tbody-end------------------- */
        $this->table .= "</table>";


        /* $table = "
                        <table class='table table-bordered table-stripped table-hovered'>
                            <thead>
                                
                                <tr>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ola</td>
                                    <td>Mide</td>
                                    <td>9045</td>
                                </tr>
                                <tr>
                                    <td>Fola</td>
                                    <td>Shade</td>
                                    <td>1685</td>
                                </tr>
                                <tr>
                                    <td>Akin</td>
                                    <td>Tola</td>
                                    <td>1774</td>
                                </tr>
                                <tr>
                                    <td>Tinu</td>
                                    <td>Bu</td>
                                    <td>1545</td>
                                </tr>
                                <tr>
                                    <td>Ogun</td>
                                    <td>Kemi</td>
                                    <td>1829</td>
                                </tr>
                                <tr>
                                    <td>Toba</td>
                                    <td>Shade</td>
                                    <td>4574</td>
                                </tr>
                            </tbody>
                        </table>
        "; */

        //dd($table);
        //echo $table;
        echo $this->table;
    }
}

?>