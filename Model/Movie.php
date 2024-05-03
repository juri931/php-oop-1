<?php 

class Movie{
  private $title;
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


    // SETTER E GETTER NON SERVONO CON LE ISTANZE IN PUBLIC IN QUANTO SERVONO PER RICEVERE O IMPOSTARE UN VALORE TRAMITE UN CONTROLLO E QUINDI NON POSSONO ESSERE IMPOSTATE ALTRIMENTI //
  // SETTER ///
  public function setTitle($_title){
    $this->title = $_title;
  }
  // public function setYear($_year){
  //   $this->year = $_year;
  // }
  // public function setGenre($_genre){
  //   $this->genre = $_genre;
  // }
  // public function setDirector($_director){
  //   $this->director = $_director;
  // }

  // GETTER ///
  public function getTitle(){
    return $this->title;
  }
  // public function getYear(){
  //   return $this->year;
  // }
  // public function getGenre(){
  //   return $this->genre;
  // }
  // public function getDirector(){
  //   return $this->director;
  // }
  
}
