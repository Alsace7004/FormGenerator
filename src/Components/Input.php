<?php
namespace Alsace\FormGenerator\Components;
class Input{
    /************************************************/
        public string $id;
        public string $name;
        public string $value='';
        public string $class;
        public string $placeholder='';
        public string $required='';
        public string $type='';
    /************************************************/
    public $inputs = [];
    private $form;
    public function __construct(){
        $this->form = "";
    }

    /**********************************************************************/
    public static function make(){
        return new Input();
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
    public function type(string $type){
        $this->type = $type;
        return $this;
    }
    /**********************************************************************/
    public function render(){
        return "<input 
                id          ='$this->id' 
                type        ='$this->type' 
                name        ='$this->name' 
                value       ='$this->value' 
                class       ='$this->class' 
                placeholder ='$this->placeholder' 
                required    ='$this->required' 
                />"."<br><br>";
    }
   

    public function form(string $action,string $method){
        $this->form = "<form action='$action' method='$method'>";
            foreach($this->inputs as $inp){
                $this->form.=$inp->render();
            } 
        $this->form.= "</form>";
        echo $this->form;
    }
    public function formAppend(Input $input){
        array_push($this->inputs, $input);
        return $this;
    }
}

//----------------------------------------
/* $fm = new Input();
    $lastname = Input::make('votre nom')
        ->id('username_id')
        ->name('username')
        ->value('')
        ->class('form-control')
        ->placeholder('votre nom...')
        ->required('required');
    $firstname = Input::make('votre prenom')
        ->id('prenom')
        ->name('username')
        ->value('')
        ->class('form-control')
        ->placeholder('votre prenom...')
        ->required('required');
    $contact = Input::make('votre contact')
        ->id('contact_id')
        ->name('username')
        ->value('')
        ->class('form-control')
        ->placeholder('votre contact...')
        ->required('required');
    $btn = Input::make("validation")
        ->id("id_btn")
        ->type("submit")
        ->name("name_btn")
        ->value('valider')
        ->class("form-control"); */
/***************************************************************/
//------if formAppend could be an array-------------------------
/*     $fm->formAppend($lastname);
    $fm->formAppend($firstname);
    $fm->formAppend($contact);
    $fm->formAppend($btn);
$fm->form("/users/create","post"); */
?>