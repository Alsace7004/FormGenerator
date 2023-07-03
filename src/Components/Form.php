<?php
namespace Alsace\FormGenerator\Components;
use Alsace\FormGenerator\Components\Tag;

class Form
{
    protected $sAction;

    protected $sMethod;

    protected $aTags = array();

    public $sTags; //mysef

    public function __construct($sAction, $sMethod = 'post')
    {
        $this->sAction = $sAction;
        $this->sMethod = $sMethod;
    }

    public function addTag(Tag $oTag)
    {
        $this->aTags[] = $oTag;
    }

    public function render()
    {
        foreach ($this->aTags as $oTag)
        {
            $this->sTags .= $oTag->render();
        }
        echo sprintf(
            '<form action="%s" method="%s">
                %s
            </form>',
            $this->sAction,
            $this->sMethod,
            $this->sTags
        );
    }
}






?>