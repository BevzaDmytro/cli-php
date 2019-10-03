<?php


namespace CLI\Entities;


use CLI\Interfaces\HuntAble;
use CLI\Interfaces\SoundAble;

class ShibaInu implements SoundAble, HuntAble
{

    public function sound()
    {
        return "woof! woof!";
    }

    public function hunt()
    {
        return "woof! woof!";
    }
}