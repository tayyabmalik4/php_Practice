<?php
    class Employee{
        public $name;

        public $salary;

        public function __construct($name, $salary){
            $this->name = $name;
            // $this->lang = $lang;
            $this->salary = $salary;
            $this->describe();

        }
            protected function describe(){
                echo "Name of the programmer: $this->name<br>";
                // echo "Language of the programmer: $this->lang<br>";
                echo "Salary of the programmer: $this->salary<br>";
            }
       }      
            class programmer extends Employee{
                public $lang = "php";
                public function __construct($name, $lang, $salary){
                    $this->name = $name;
                    $this->lang = $lang;
                    $this->salary = $salary;
                    $this->describe();
                }
            }
   
    

    $harry = new Employee("Harry","", 3);
    $rohan = new programmer("Rohan","phython", 3000);

?>