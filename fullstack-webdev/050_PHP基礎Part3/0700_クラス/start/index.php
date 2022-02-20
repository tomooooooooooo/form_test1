<?php 
class Person
{
    public $name;
    public $age;


    function __construct($name, $age)

    {
        $this->name = $name;
        $this->name = $age;
    }
    function hello() {
        echo 'hello, ' . $this->name;
    }
}


$bob = new Person('Bob', 18);
echo $bob->age;