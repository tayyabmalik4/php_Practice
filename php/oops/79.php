<?php
class Employee{
//properties of our class
public $name;
public $salary;

//Methids of our class
// Construct Method
function __construct($name, $salary){
$this->name = $name;
$this->salary = $salary;

}
//Destuctor
function __destruct(){
    echo "I am destructing $this->name<br> ";
}
}
$rohan = new Employee("Rohan", 73000);
$harry = new Employee("Harry", 10000);
$skillF = new Employee("skillF", 56000);
echo "The salary of rohan is $rohan->salary<br>";
echo "The salary of harry is $harry->salary<br>";
echo "The salary of skillF is $skillF->salary<br>";
?>