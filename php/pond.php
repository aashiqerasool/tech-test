<?php
// Containing pond manager
class Pond
{
    protected $frogs;

    function __construct()
    {
        $this->frogs = array();
    }

    function add($frogs)
    {
        if(!is_array($frogs))
            $frogs = array($frogs);
        foreach($frogs as $f) {
            $this->addFrog($f);
        }
    }

    function display()
    {
        $output = array('<div>');
        $output[] = '<ul class="frogs">';
        foreach($this->frogs as $f) {
            $output[] = '<li class="'.$f->gender.'">'.$f->name.'</li>';
        }
        $output[] = '</ul>';
        echo implode(PHP_EOL, $output) . PHP_EOL;
    }

    protected function addFrog($frog)
    {
        $f = new Frog($frog);
        $f->setId(count($this->frogs) ? $this->frogs[count($this->frogs)-1]->getId()+1 : 1);
        $this->frogs[] = $f;
    }

}

