<link rel="stylesheet" href="recursos/css/estilo.css">

<?php 
session_start();


$array = array('isosceles.jpg', 'augusto.png', 'vini.png', 'augusto.png');

?>
<div class="container">

<?php

 


echo "<img src='$array[0]' border='0' />";




?>

<div class="modulo verde">
        <h3>Escolha alternativa correta</h3>
        <ul>
            <li>
                <a href="menuequilatero.php">
                Triângulo Isósceles
                </a>
            </li>
            <li>
                <a href="formas.php">
                Triângulo Equilátero
                </a>
            </li>
            <li>
                <a href="formas.php">
                Triângulo Escaleno
                </a>
            </li>
            <li>
                <a href="formas.php">
                Triângulo Retângulo
                </a>
            </li>
        </ul>
    </div>
</div>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="pt_br" xml:lang="pt_br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    
    <title>Curso</title>
</head>
