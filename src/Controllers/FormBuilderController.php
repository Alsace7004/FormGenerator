<?php
namespace Alsace\FormGenerator\Controllers;

class FormBuilderController{

    public function index(){
        $my_message = "Hello, bonjour je suis la vue";
        return view('FormGenerator::index',compact('my_message'));
    }
}

?>