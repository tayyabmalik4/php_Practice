<?php
    echo " What is Inheritance?<br>";
    class Employee{
        // properties
        public $name = "harry";
        private $salary = 12000;
        private $grade = 3;

        function setSalary($salary){
            $this->salary = $salary;
        }
        function getSalary(){
            echo "The salary of employee $this->name is $this->salary <br>";
        }
        function showName(){
            echo "The name of this employee is $this->name<br>";
        }

    }

        class programmer extends Employee{
            private $language = "php";

            function changeLanguage($lang){
                $this->language = $lang;
                // echo $this->grade; THis will throw an error because grade is private in the parent class
            }
        }
    
    $rohan = new Employee();
    $rohan->name = "Rohan";
    $rohan->setSalary(100);
    $rohan->getSalary();
    $rohan->showName();

    $shubham = new Employee();
    $shubham->name = "Shubam";
    $shubham->setSalary(100000);
    $shubham->getSalary();
    $shubham->showName();


    $geeta = new programmer();
    $geeta->name = "Geeta";
    echo $geeta->changeLanguage("phthon");
    $geeta->getSalary();
    $geeta->showName();
?>