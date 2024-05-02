<?php 

class Movie{
  public $title;
  public $year;
  public $genre;
  public $director;
  public $vote;

  // COSTRUTTORE ///

  function __construct($_title, $_year, $_genre, $_director)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this->genre = $_genre;
    $this->director = $_director;
  }

  // SETTER ///
  public function setTitle($_title){
    $this->title = $_title;
  }
  public function setYear($_year){
    $this->year = $_year;
  }
  public function setGenre($_genre){
    $this->genre = $_genre;
  }
  public function setDirector($_director){
    $this->director = $_director;
  }

  // GETTER ///
  public function getTitle(){
    return $this->title;
  }
  public function getYear(){
    return $this->year;
  }
  public function getGenre(){
    return $this->genre;
  }
  public function getDirector(){
    return $this->director;
  }
  
}
