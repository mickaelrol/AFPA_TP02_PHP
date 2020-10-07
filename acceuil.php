<?php
session_start();
if($_SESSION['CONNECT'] !== 'OK'){
    $_SESSION['erreur']="";
    header ('location:login.php');
    exit();
}else{
    echo 'Hello ' .$_SESSION['login'];
    echo ('<a href="validation.php?affaire=deconnexion">Deconnexion</a>');
}
