<?php


namespace CLI;


use CLI\Interfaces\HuntAble;
use CLI\Interfaces\SoundAble;


class CommandInterpreter
{
    private $dogs;

    public function __construct($dogs)
    {
        $this->dogs = $dogs;
    }

    public function executeCommand($dogName, $action) : string
    {
        $dogClass = $this->dogs[$dogName];
        $dog =  new $dogClass;
        if(!($dog instanceof SoundAble) && $action ==='sound'){
             return "** no reaction";
        }
        if(!($dog instanceof HuntAble) && $action === 'hunt'){
            return "** no reaction";
        }
        return $dog->{$action}();
    }


}