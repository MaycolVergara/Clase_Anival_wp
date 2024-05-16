<?php
$localhost="localhost";
$user="root";
$password="";
$bdatos="practica_bd_niño";

$conn= new mysqli($localhost,$user,$password,$bdatos);

if (mysqli_error($conn)){
    die("Error al conectar".mysqli_error($conn));
}//else print "Conectado Satisfactoriamente"

?>