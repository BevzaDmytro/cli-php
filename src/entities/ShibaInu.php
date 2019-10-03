<?php


namespace CLI\Entities;


use CLI\Interfaces\HuntAble;
use CLI\Interfaces\SoundAble;

class ShibaInu implements SoundAble, HuntAble
{

    public function sound() : string
    {
        return "woof! woof!";
    }

    public function hunt() : string
    {
        return "woof! woof!";
    }
}