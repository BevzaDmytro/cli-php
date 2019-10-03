<?php


namespace CLI\Entities;


use CLI\Interfaces\SoundAble;

class Mops implements SoundAble
{

    public function sound()
    {
        return "woof! woof!";
    }
}