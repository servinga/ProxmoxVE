<?php

namespace Tests\CustomClasses;

class Person
{
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

