<?php

require_once('class.Person.php');

class Student extends Person {
    private $gpa;
    private $major;
    private $address;

    public function __construct($name, $dob, $address, $major = 'Undecided') {
        parent::__construct($name, $dob);
        $this->address = $address;
        $this->major = $major;
        $this->gpa = null;
    }

    
}