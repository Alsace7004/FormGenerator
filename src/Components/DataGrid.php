<?php
namespace Alsace\FormGenerator\Components;

class DataGrid{
    public string $input_attribut;
    public string $db_table_attribute; //column
    protected array $data = []; //column
    protected $sAttributes= [];

    public array $fields = []; // filter
    public bool $editable; //editable
    public int $nombre; //editable
    private $table;

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
        $this->data = $data;
        return $this;
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
                    foreach($this->data as $k=> $item){
                        $this->table .= "<tr>";
                            foreach($this->sAttributes as $head){
                                $this->table .= "<td>".$item[$head]."</td>";
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