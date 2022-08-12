<?php


$conn= new PDO("mysql:bdname=agenda;host=localhost","root","");

$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>