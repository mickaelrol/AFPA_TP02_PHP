<?php
// ont recupere les données de config.php .
require 'config.php';


// ont cree 2 variables pour recuperer le login et mdp du formulaire .
$login = (htmlspecialchars($_POST['login']));
$mdp = (htmlspecialchars($_POST['mdp']));
$vide = 'Veuillez saisir un login et un mot de passe';
$wrong = 'Erreur de login / Mot de passe';


//ont cree une condition if qui va renvoyer vers 2 page d'erreurs soit si le champ est vide ou si il ne correspond pas au bon login et mdp .
if ($login == "" || $mdp == "") {
    // log ou mdp vide , redirection vers page location.php avec message erreur vide
    header ('Location:login.php');
    echo $vide;
    exit();
}else if($login !== LEBONLOGIN ||$mdp !== LEBONPASS ){
    header ('location:login.php');
    echo $wrong;
    exit();
}else{
    // login et mdp correct redirection vers page acceuil.php .
    header('location:acceuil.php');
    exit();
}