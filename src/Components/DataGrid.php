<?php
namespace Alsace\FormGenerator\Components;

class DataGrid{
    public string $input_attribut;
    public string $db_table_attribute; //column
    protected $sAttributes= [];

    public array $fields = []; // filter
    public bool $editable; //editable
    public int $nombre; //editable

    public static function make(){
        
        echo "am the make method";
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

    public function renderTable(){
        $datas = [
            [
                'firstname' =>'Ola',
                'lastname'  =>'Mide',
                'email'     =>'ola@mide.com',
                'password'  =>'9045',
                'password'  =>'9045',
            ],
            [
                'firstname' =>'Fola',
                'lastname'  =>'Shade',
                'email'     =>'Fola@Shade.com',
                'password'  =>'1685'
            ],
            [
                'firstname' =>'Akin',
                'lastname'  =>'Tola',
                'email'     =>'Akin@Tola.com',
                'password'  =>'1774'
            ],
            [
                'firstname' =>'Tinu',
                'lastname'  =>'Bu',
                'email'     =>'Tinu@Bu.com',
                'password'  =>'1545'
            ],
            [
                'firstname' =>'Ogun',
                'lastname'  =>'Mide',
                'email'     =>'Ogun@Kemi.com',
                'password'  =>'1829'
            ],
            [
                'firstname' =>'Toba',
                'lastname'  =>'Shade',
                'email'     =>'Toba@Shade.com',
                'password'  =>'4574'
            ],
        ];

        $table = "<table class='table table-bordered table-stripped table-hovered'>";
                /* -------------------thead-begin------------------ */
                $table .= "<thead>";
                    $table .= "<tr>";
                        foreach($this->sAttributes as $k=> $head){
                            $table .= "<th>".$k."</th>";
                        }
                    $table .= "</tr>";
                $table .= "</thead>";
                /* -------------------thead-end------------------ */
                /* -------------------tbody-begin------------------ */
                $table .= "<tbody>";
                    foreach($datas as $k=> $item){

                        $table .= "<tr>";
                            foreach($this->sAttributes as $head){
                                $table .= "<td>".$item[$head]."</td>";
                            }
                        $table .= "</tr>";
                    }
                $table .= "</tbody>";
                /* -------------------tbody-end------------------- */
        $table .= "</table>";


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
        return $table;
    }
}

?>