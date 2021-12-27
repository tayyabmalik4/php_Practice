<?php
    //access modifiers in php
// 1.  public - can be accessed from anywhere
// 2.  private - can only be accessed from within the class
// 3.  protected - Can be accessed from within the class and from derived class
//By default the properties and methods are treated as public
//private properties and methods can only be accessed by other member functions of the class

    class Employee{
        private $name ="harry";


         function showName(){
            echo "$this->name";

        }
    }
    $harry = new Employee();
    // echo $harry->name; ->This will not work if harry is private
    $harry->showName();
?>