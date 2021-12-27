<?php

class Player{
    //properties
    public $name;
    public $speed = 5;
    public $running = false;
    //Methods
    function set_name($name){
        $this->name = $name;
    } 
    function get_name(){
        return $this->name;
    }
    function run(){
        $this->running = true;
    }
    function stoprun(){
        $this->running = false;
    }

}
  echo "Lets Understand OOPs using GTA vice City<br>";
  $player1 = new player();
  $player1->set_name("Harry");
  echo $player1->get_name();
  echo $player1-> speed;
  echo "<br>";

  $player2 = new player();
  $player2->set_name("Tayyab");
echo $player2-> get_name();
echo "<br>";

    $player3 = new player();
    $player3->set_name("uzair");
    echo $player3->get_name();
    echo "<br>";
?>