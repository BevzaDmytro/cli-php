<?php

namespace CLI;

class CommandParser
{
    private $actions;
    private $dogs;
    public function __construct($dogs, $actions)
    {
        $this->dogs = $dogs;
        $this->actions = $actions;
    }

    public function parseCommand(string $command)
    {
        $result = explode(" ", $command);
        $this->dog =  $result[0];
        $this->action = $result[1];
    }

    public function isCommandRight(string $command) : bool
    {
        $result = explode(" ", $command);
        if(count($result) !== 2 ) {
           return false;
        }
        else {
            $dogName = $result[0];
            $action = $result[1];
            return $this->checkIsDogAvaliable($dogName) && $this->checkIsCommandExists($action);
        }
    }
    public function checkIsDogAvaliable(string $dogName) : bool
    {
        return array_key_exists($dogName, $this->dogs);
    }
    public function checkIsCommandExists(string $action) : bool
    {
        return in_array($action, $this->actions);
    }

    public function getDogName(string $command) : string
    {
        $result = explode(" ", $command);
        return $result[0];
    }

    public function getAction(string $command) : string
    {
        $result = explode(" ", $command);
        return $result[1];
    }
}