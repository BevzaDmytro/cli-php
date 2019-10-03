<?php


namespace CLI\Entities;


use CLI\Interfaces\SoundAble;

class RubberDachshund implements SoundAble
{

    public function sound() : string
    {
        return "beep! beep!";
    }
}