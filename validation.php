<?php
// ont recupere les données de config.php .
require 'config.php';

session_start();
$_SESSION['erreur'];

$_SESSION['CONNECT'];

// ont cree 2 variables pour recuperer le login et mdp du formulaire .
$login = (htmlspecialchars($_POST['login']));
$mdp = (htmlspecialchars($_POST['mdp']));

$_SESSION['login'] = $_POST['login'];
$_SESSION['mdp'] = $_POST['mdp'];

$affaire = $_GET['affaire'];
if ($affaire == 'deconnexion') {
    $_SESSION['erreur'] = 3;
    header ('Location:login.php');
    exit();
}

//ont cree une condition if qui va renvoyer vers 2 page d'erreurs soit si le champ est vide ou si il ne correspond pas au bon login et mdp .
if ($login == "" || $mdp == "") {
    // log ou mdp vide , redirection vers page location.php avec message erreur vide
    $_SESSION['erreur'] = 1;
    header ('Location:login.php');
    exit();
}elseif($login !== LEBONLOGIN ||$mdp !== LEBONPASS ){
    $_SESSION['erreur'] = 2;
    header ('location:login.php');
    exit();
}else{
    // login et mdp correct redirection vers page acceuil.php .
    $_SESSION['CONNECT'] = 'OK';
    header('location:acceuil.php');
    exit();
}

