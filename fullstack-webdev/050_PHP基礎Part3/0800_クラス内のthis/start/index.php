<?php 
class Person
{
    private $name;
    public $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello() {
        echo 'hello, ' . $this->name;
    }
}

$bob = new Person('Tomo', 18);
$bob->hello();
$bob = new Person('Bob', 18);