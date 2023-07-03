<?php
    namespace Alsace\FormGenerator\Components;

class Tag
{
    protected $sTag;
    protected $sDisplayText;
    //Mine
    public string $id;
    public string $name;
    public string $class='';
    public string $type='';
    public string $placeholder;
    public string $required='';

    public function __construct($sTag,$sDisplayText = null)
    {
        $this->sTag = $sTag;
        $this->sDisplayText = $sDisplayText;
    }
    // Factory pattern.
    public static function get($sTag,$sDisplayText = null)
    {
        return new Tag($sTag,$sDisplayText);
    }
    /************************************************************************/
    public function id(string $id){
        $this->id = $id;
        return $this;
    }
    public function name(string $name){
        $this->name = $name;
        return $this;
    }
    public function type(string $type){
        $this->type = $type;
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
    public function class(string $class){
        $this->class = $class;
        return $this;
    }
    /************************************************************************/
    //renders
    public function render()
    {

        if ($this->sDisplayText == '')
        {
            return "<$this->sTag 
                            id='$this->id' 
                            name='$this->name' 
                            class='$this->class' 
                            type='$this->type' 
                            required='$this->required'
                            placeholder='$this->placeholder' 
                    />";
        } else {
            return "<$this->sTag id='$this->id' name='$this->name'class='$this->class' >$this->sDisplayText</$this->sTag>";
        }
    }
}
?>