
<?php

include_once("config/url.php");
include_once("config/process.php");


if(isset($_SESSION["msg"])){
    $printMensagem= $_SESSION["msg"];
    $_SESSION["msg"]=" ";
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contatos</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="<?=$BASE_URL?>css/style.css">
</head>

<body>
<header>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

<a class="navbar-brand"  href="<?=$BASE_URL?>index.php" ><img src="<?=$BASE_URL?>img/logo.svg" alt="agenda">
</a>
<div>
<div class="navbar-nav">
    <a class="nav-link active" id="home-link" href="<?=$BASE_URL?>index.php" >Agenda</a>
    <a class="nav-link active"  href="<?=$BASE_URL?>create.php" >Adicionar Contato</a>


</div>

</div>
</nav>


</header>
