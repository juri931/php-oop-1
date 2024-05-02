<?php 

require_once __DIR__ . '/Model/Movie.php';

$oppenheimer = new Movie('Oppenheimer', '2023', 'drama', 'Christopher Nolan');

$avengers = new Movie('Avengers', '2023', 'action', 'Joe Russo');

$oppenheimer->vote = '9';
$avengers->vote = '7';


var_dump($oppenheimer);
var_dump($avengers);



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