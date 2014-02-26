<?php

// Main Frog class
class Frog
{
    protected $id;
    var $name;
    var $gender;

    function __construct($frogJson)
    {
        $this->birth($frogJson);
    }

    function birth($frogJson)
    {
        $frog = json_decode($frogJson);
        $this->name = $frog->name;
        $this->gender = $frog->gender;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function getId() { return $this->id; }

}

