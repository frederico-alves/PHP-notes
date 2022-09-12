<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards we can write PHP in either a procedural or object-oriented way.
  OOP consists of classes that can hold "properties" and "methods".
  Objects can be created from classes.
*/

class User {
    // Properties are just variables that belong to a class.
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

    // Methods are just functions that belong to a class.
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }

    // The constructor is called whenever an object is created from the class.
    // We pass in properties to the constructor from the outside.
    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
//        echo 'User = ' . $this->name . '; ';
    }
}

// Initiate a user object from the User class
$user1 = new User('Frederico', 'frederico@gmail.com', '123456');
$user2 = new User('John', 'john@gmail.com', 'abcdef');
//$user1 -> name = 'Frederico';
//$user1 -> set_name('Frederico');
//$user2 -> set_name('John');

//echo $user1 -> get_name();
//echo $user2 -> get_name();

//var_dump($user1);
//var_dump($user2);
//echo $user1 -> name;

/* ----------- Inheritence ---------- */

/*
  Inheritence is the ability to create a new class from an existing class.
  It is achieved by creating a new class that extends an existing class.
*/

class Employee extends User {
    public function __construct($name, $email, $password, $title)
    {
        // We can use the parent keyword to access the parent class's properties and methods.
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Frederico', 'frederico@gmail.com', '123456', 'Web Developer');
echo $employee1->get_title();