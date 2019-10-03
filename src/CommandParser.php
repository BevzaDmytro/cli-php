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

    public function isCommandRight(string $command) : bool
    {
        $result = explode(" ", trim($command));
        if(count($result) !== 2 ) {
           return false;
        }
        else {
            $dogName = $result[0];
            $action = $result[1];
            return $this->checkIsDogExists($dogName) && $this->checkIsCommandExists($action);
        }
    }
    public function checkIsDogExists(string $dogName) : bool
    {
        return array_key_exists($dogName, $this->dogs);
    }
    public function checkIsCommandExists(string $action) : bool
    {
        return in_array($action, $this->actions);
    }

    public function getDogName(string $command) : string
    {
        $result = explode(" ", trim($command));
        return $result[0];
    }

    public function getAction(string $command) : string
    {
        $result = explode(" ", trim($command));
        return $result[1];
    }
}