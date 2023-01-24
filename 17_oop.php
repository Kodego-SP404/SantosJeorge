<?php
/* --- Object Oriented Programming -- */

/*
From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
 */

class User
{

    public $name;
    public $password;
    public $email;

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function set_name($name)
    {
        $this->name = $name;

    }
    public function get_name()
    {
        return $this->name;
    }
}

$user1 = new User('jem', "jemjem@gmail,com", "123");
$user2 = new User("Benjie", "benjie@gmail.com", "qwety");

class Employee extends User
{
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title(){
        return $this-> title;
    }

}

$employee1 = new Employee("Catrice", "catrice@gmail.com", "12345", "Manager");