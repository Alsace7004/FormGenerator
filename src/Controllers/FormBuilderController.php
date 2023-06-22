<?php
namespace Alsace\FormGenerator\Controllers;

class FormBuilderController{

    public function index(){
        $my_message = "Formulaire";
        return view('FormGenerator::index',compact('my_message'));
    }
}

?>