<?php


namespace CLI\Config;


class Config
{
    public static $dogs = [
        'shiba-inu' => 'CLI\Entities\ShibaInu',
        'mops' => 'CLI\Entities\Mops',
        'dachshund' => 'CLI\Entities\Dachshund',
        'plush-labrador' => 'CLI\Entities\PlushLabrador',
        'rubber-dachshund' => 'CLI\Entities\RubberDachshund'
    ];

    public static $commands =[
        'sound',
        'hunt'
    ];
}