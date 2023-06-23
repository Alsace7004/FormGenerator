<?php
    namespace Alsace\FormGenerator\Components;

class Tag
{
    protected $sTag;
    protected $sAttributes;
    protected $sContent;

    public function __construct($sTag='', $sContent = '')
    {
        $this->sTag = $sTag;
        $this->sContent = $sContent;
    }

    public function addAttribute($sName, $mValue)
    {
        $this->sAttributes .= "{$sName}='{$mValue}' ";
        return $this; // daisy chained
    }

    public function addTag(Tag $oTag)
    {
        if ($this->sContent == '')
        {
            $this->sContent = "";
        }
        $this->sContent .= $oTag->render() . "";
    }

    public function render()
    {
        $temp = trim("{$this->sTag} {$this->sAttributes}");
        if ($this->sContent == '')
        {
            echo "<{$temp} />";
        }else
        echo "<{$temp}>{$this->sContent}</{$this->sTag}>";
    }
    /*******************************************************/
        
    /*******************************************************/
}



/* $usernameField = new Tag('input');
$usernameField->addAttribute('type', 'text')
                ->addAttribute('name', 'username')
                ->addAttribute('id', 'username_id')
                ->addAttribute('value', '')
                ->addAttribute('class', 'form-control')
                ->addAttribute('placeholder', 'votre nom');

$firstnameField = new Tag('input');
$firstnameField->addAttribute('type', 'text')
                ->addAttribute('name', 'firstname')
                ->addAttribute('id', 'firstname_id')
                ->addAttribute('value', '')
                ->addAttribute('class', 'form-control')
                ->addAttribute('placeholder', 'votre firstname');

$lastnameField = new Tag('input');
$lastnameField->addAttribute('type', 'text')
                ->addAttribute('name', 'lastname')
                ->addAttribute('id', 'lastname_id')
                ->addAttribute('value', '')
                ->addAttribute('class', 'form-control')
                ->addAttribute('placeholder', 'votre lastname');

$passwordField = new Tag('input');
$passwordField->addAttribute('type', 'password')
                ->addAttribute('name', 'password')
                ->addAttribute('id', 'password_id')
                ->addAttribute('value', '')
                ->addAttribute('class', 'form-control')
                ->addAttribute('placeholder', 'votre mot de passe');

$buttonField = new Tag('button','Envoyer');
$buttonField->addAttribute('type', 'button')
                ->addAttribute('name', 'password')
                ->addAttribute('id', 'password_id')
                ->addAttribute('value', 'ok');



echo $usernameField->render();

echo $firstnameField->render();

echo $lastnameField->render();

echo $passwordField->render();

echo $buttonField->render(); */

/* 

*/





?>