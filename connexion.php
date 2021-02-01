<?php
require __DIR__.'/inc/header.php';
session_start();

// Switch on the messages to display

if (!empty($_GET['inf'])) {
    $inf = htmlspecialchars(trim($_GET['inf']));
    switch ($inf) {
    case'success':
    ?>
        <div class="alert-success">
        Email de récupération du mot de passe envoyé
        </div>
    <?php
    break;
    case'no_compte':
    ?>
        <div class="alert-danger">
        Adresse Email inconnue !!
        </div>
    <?php
}
} ?>

<section class="connexion">
    <div class="connexion_title">
        <h1>Connexion</h1>
    </div>
    <div class="connexion_form">
        <form action="connexion_traitement.php" method="post">
            <div class="connexion_form_email">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required="required">
            </div>
            <div class="connexion_form_password">
                <label for="password" class="col-sm-4">Mot de passe</label>
                <input id="password" type="password" name="password" placeholder="Mot de passe" required="required">
            </div>
            <div class="remember">
                <input type="checkbox" name="remember" id="check">
                <label for="check">Se souvenir de moi </label>
            </div>
            <div class="connexion_form_button">
                <button type="submit" class="button">Valider</button>
            </div>
        </form>
    </div>
</section>

<section class="lost_password">
    <div class="lost_password_title">
        <h1>Mot de passe oublié</h1>
    </div>
    <div class="lost_password_form">
        <form action="forgot.php" method="POST">
            <div class="lost_password_form_email">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" required="required">
            </div>
            <div class="lost_password_button">
                <button type="submit" class="button">Envoyer</button>
            </div>
        </form>
    </div>
</section>


<?php
require __DIR__.'/inc/footer.php';
?>