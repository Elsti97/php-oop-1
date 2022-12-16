<?php

class movies{
  public $name;
  // public $year;
  public $genre;
  public $vote;

  function __construct( $_x, $_z ){
    $this->name = $_x;
    // $this->year = $_y;
    $this->genre = $_z;
    $this->vote =  rand(1, 10);
  }

  public function functionVote(){
    if( $this->vote > 6 ){
      return "$this->name è da vedere";
    } else {
      return "$this->name non lo guardare";
    }
  }
}
