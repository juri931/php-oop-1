<?php 

require_once __DIR__ . '/Model/Movie.php';

$oppenheimer = new Movie('Oppenheimer', '2023', 'drama', 'Christopher Nolan');

$avengers = new Movie('Avengers', '2023', 'action', 'Joe Russo');

$oppenheimer->vote = '9.5';
$avengers->vote = '7';

var_dump($avengers);
var_dump($oppenheimer);

var_dump($oppenheimer->getTitle());

// TITLE è IN PRIVATE QUINDI NON POSSO CAMBIARGLI IL VALORE DIRETTAMENTE DA QUI PER UNA QUESTIONE DI SICUREZZA, MA SI PUò CAMBIARE UTILIZZANDO LA FUNZIONE SET //
// $oppenheimer->title = 'ciao';
$oppenheimer->setTitle('ciao');
$oppenheimer->year = 'ciao';
var_dump($oppenheimer);





?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP 1</title>
</head>
<body>
  
</body>
</html>