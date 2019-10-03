<?php


namespace CLI\Entities;


use CLI\Interfaces\SoundAble;

class RubberDachshund implements SoundAble
{

    public function sound()
    {
        return "beep! beep!";
    }
}