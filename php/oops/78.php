<?php
class Employee{
//properties of our class
public $name;
public $salary;
// Methods of our class
//Contructor  - it allows you to initialize objects. It is the code which is executed whenever a new object is instantiated
// constructor without arguments
// function __construct(){
    // echo "This is my constructor for employee";
// } 

// Constructor with arguments
function __construct($name, $salary){
    $this->name = $name;
    $this->salary =$salary;
}

}
$rohan = new Employee("rohan", 73000); 
$harry = new Employee("harry", 10000);
$skillF= new Employee("skillF", 56000);
echo "The salary of harry is $harry->salary <br>";
echo "The salary of skillF is $skillF->salary";
?>