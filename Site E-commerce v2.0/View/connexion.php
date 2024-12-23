<?php
include('./Model/flyfree.php');

$connexion = new flyfree;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['emailing'];
    $mdp = $_POST['secret-password'];

    $stmt = $connexion->connexion()->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $stmt = $connexion->connexion()->prepare("SELECT * FROM users WHERE emails = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($username && $email && (password_verify($mdp, $user['mot_de_passe']))) {
        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['emails'] = $user['emails'];
        header("Location: ./index.php");
    }
}
?>

<h1 class="head-title-page">Connexion</h1>

<div class="log-form">
    <form method="POST" class="">
        <input type="text" name="username" placeholder="Nom d'utilisateur" maxlength="50" required>
        <br>
        <input type="email" name="emailing" placeholder="Adresse e-mail" maxlength="70" required>
        <br>
        <input type="password" name="secret-password" placeholder="Mot de passe" required>
        <br>
        <div>
            <button type="submit">Se connecter</button>
        </div>
    </form>
</div>