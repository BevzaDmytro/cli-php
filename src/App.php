<?php


namespace CLI;


use CLI\Config\Config;
use CLI\View\View;


class App
{
    private $view;
    private $commandParser;
    public function __construct()
    {
        $this->view = new View();
        $this->commandParser = new CommandParser(Config::$dogs, Config::$commands);
    }

    public function start() : void
    {
        $command = isset($_POST['command']) ? $_POST['command'] : null;
        if(!empty($command) ){
            $this->executeCommand($command);
        }
        else {
            $this->view->show([]);
        }
    }
    private function executeCommand(string $command) : void
    {
        if($this->commandParser->isCommandRight($command)){
            $commandInterpreter = new CommandInterpreter(Config::$dogs);
            $commandResult = $commandInterpreter->executeCommand($this->commandParser->getDogName($command), $this->commandParser->getAction($command));
            $this->view->show(['command' => $command, 'commandResult'=>$commandResult]);
        }
        else {
            $this->view->show(['command' => $command, 'commandResult' => "Command is wrong. Type another command, please"]);
        }
    }

}