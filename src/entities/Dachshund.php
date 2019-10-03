<?php


namespace CLI\Entities;


use CLI\Interfaces\HuntAble;
use CLI\Interfaces\SoundAble;

class Dachshund implements SoundAble, HuntAble
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