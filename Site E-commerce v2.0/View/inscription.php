<?php
include('./Model/flyfree.php');

$inscription = new flyfree;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['username'];
    $email = $_POST['emailing'];
    $mdp = $_POST['secret-password'];

    if (!empty($nom) && !empty($email) && !empty($mdp)) {
        $hashPassword = password_hash($mdp, PASSWORD_DEFAULT);
        $inscription->connexion()->query("INSERT INTO users(username, emails, mot_de_passe) VALUES ('$nom', '$email', '$hashPassword')")->fetchAll(PDO::FETCH_ASSOC);
        header("Location: ./index.php");
    }
}
?>

<h1 class="head-title-page">Inscription</h1>

<div class="log-form">
    <form method="POST" class="">
        <input type="text" name="username" placeholder="Nom d'utilisateur" maxlength="50" required>
        <br>
        <input type="email" name="emailing" placeholder="Adresse e-mail" maxlength="70" required>
        <br>
        <input type="password" name="secret-password" placeholder="Mot de passe" required>
        <br>
        <div>
            <button type="submit">S'inscrire</button>
        </div>
    </form>
</div>