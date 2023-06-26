<?php

namespace App\Src;


use ArrayObject;
use Alsace\FormGenerator\Components\Tag;
use Alsace\FormGenerator\Components\Test;
use Alsace\FormGenerator\Components\PageBuilder;


class User extends Tag
{
    //
    private $authorise = [];
    protected $name;
    public function builder()
    {
        /* return Test::make('votre nom')
            ->id('id_nom')
            ->name('firstname')
            ->value('')
            ->class('form-control')
            ->placeholder('Veuillez entrer le nom')
            ->required()
            ->bind('nom'); */
            /**********************************************************************/
            $firstnameField = new Tag('input');
                         $firstnameField->addAttribute('type','text')
                                        ->addAttribute('name', 'username')
                                        ->addAttribute('id', 'username_id')
                                        ->addAttribute('value', '')
                                        ->addAttribute('class', 'form-control')
                                        ->addAttribute('style', 'margin-top:0')
                                        ->addAttribute('placeholder', 'votre nom...');
            $lastnameField = new Tag('input');
                          $lastnameField->addAttribute('type','text')
                                        ->addAttribute('name', 'lastname')
                                        ->addAttribute('id', 'lastname_id')
                                        ->addAttribute('value', '')
                                        ->addAttribute('class', 'form-control')
                                        ->addAttribute('style', 'margin-top:0')
                                        ->addAttribute('placeholder', 'votre prenom...');
            /**************************************************************************************/                            
                            $SubmitButton = new Tag('button', 'Envoyer.');
                            $SubmitButton->addAttribute('type', 'submit')
                                        ->addAttribute('name', 'submit')
                                        ->addAttribute('value', 'login')
                                        ->addAttribute('class', 'btn btn-primary mb-3');
                            $firstnameFieldLabel = new Tag('label', 'Nom');
                            $firstnameFieldLabel->addAttribute('for', 'exampleFormControlInput1')
                                                ->addAttribute('class', 'form-label');
                            $lastnameFieldLabel = new Tag('label', 'Prenom');
                            $lastnameFieldLabel->addAttribute('for', 'exampleFormControlInput2')
                                                ->addAttribute('class', 'form-label');
 
            /**************************************************************************************/
         
                $arrayobj = new ArrayObject(array());
                $arrayobj->append(array($firstnameField,$lastnameField));
            return view('FormGenerator::index',compact('arrayobj'));
            /**********************************************************************/
    }
    public function create()
    {
        
    }
    public function edit()
    {
        
    }
    public function update()
    {
        
    }
    public function list()
    {
        
    }
}
