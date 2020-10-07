<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>TP PHP</title>
</head>
<body>
    <?php
    
    ?>
    <form action="validation.php" method="POST">
    <div>
        <label for="login">Login : </label>
        <input type="text" name="login" id="login">
    </div>
    <div>
        <label for="mdp">Mot de passe : </label>
        <input type="text" name="mdp" id="mdp">
    </div>
    <div>
        <input type="submit" value="Se connecter !">
    </div>
    </form>
</body>
</html>