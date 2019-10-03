<?php


use CLI\CommandInterpreter;
use CLI\Config\Config;
use PHPUnit\Framework\TestCase;

class CommandInterpreterTest extends TestCase
{
    public function testExecuteCommand(){
        $commandInterpreter = new CommandInterpreter(Config::$dogs);
        $this->assertSame("**whining piteously", $commandInterpreter->executeCommand("mops","hunt"));
        $this->assertSame("woof! woof!", $commandInterpreter->executeCommand("mops","sound"));
        $this->assertSame("** no reaction", $commandInterpreter->executeCommand("plush-labrador","sound"));
        $this->assertSame("** no reaction", $commandInterpreter->executeCommand("plush-labrador","hunt"));
        $this->assertSame("** no reaction", $commandInterpreter->executeCommand("rubber-dachshund","hunt"));
        $this->assertSame("beep! beep!", $commandInterpreter->executeCommand("rubber-dachshund","sound"));
    }
}