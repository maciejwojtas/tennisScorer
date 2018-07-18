<?php

class Player {
    function __construct($name){
$this->name = $name;
$this->points=0;


    }
    function earnPoints($points){
        $this->points=$points;
    }
    public function getName(){
      return  $this->name;
    }
    public function getPoints(){
        return  $this->points;
      }
}
