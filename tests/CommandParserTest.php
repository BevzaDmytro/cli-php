<?php

use CLI\CommandParser;
use CLI\Config\Config;
use PHPUnit\Framework\TestCase;

class CommandParserTest extends TestCase
{
public function testIsCommandRight(){
    $commandParser = new CommandParser(Config::$dogs, Config::$commands);
    $this->assertTrue($commandParser->isCommandRight(" mops hunt "));
    $this->assertTrue($commandParser->isCommandRight("mops sound"));
    $this->assertFalse($commandParser->isCommandRight("mops"));
    $this->assertFalse($commandParser->isCommandRight("mops  sound"));
}

public function testGetDogName(){
    $commandParser = new CommandParser(Config::$dogs, Config::$commands);
    $this->assertSame("mops",$commandParser->getDogName(" mops sound"));
    $this->assertSame("dachshund",$commandParser->getDogName("dachshund sound"));
}

    public function testGetAction(){
        $commandParser = new CommandParser(Config::$dogs, Config::$commands);
        $this->assertSame("sound",$commandParser->getAction(" mops sound"));
        $this->assertSame("hunt",$commandParser->getAction("dachshund hunt"));
    }

    public function testCheckIsCommandExist(){
        $commandParser = new CommandParser(Config::$dogs, Config::$commands);
        $this->assertTrue($commandParser->checkIsCommandExists("hunt"));
        $this->assertTrue($commandParser->checkIsCommandExists("sound"));
    }
    public function testCheckIsDogExists(){
        $commandParser = new CommandParser(Config::$dogs, Config::$commands);
        $this->assertTrue($commandParser->checkIsDogExists("mops"));
        $this->assertTrue($commandParser->checkIsDogExists("dachshund"));
    }
}