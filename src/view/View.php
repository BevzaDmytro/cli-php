<?php


namespace CLI\View;


class View
{
    public function show( array $commandsData)
    {

        if(!empty($commandsData)){
            extract($commandsData);
        }
        require_once "./src/templates/cli.php";
    }
}