<?php
namespace Alsace\FormGenerator\Controllers;

class FormBuilderController{

    public function index(){
        $my_message = "Formulaire";
        $uri = $_SERVER['REQUEST_URI'];
        /* $firstnameField;
        $lastnameField; */
        return view('FormGenerator::index',compact('my_message','uri'));
    }
}

?>