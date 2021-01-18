<?php
require __DIR__.'/inc/header.php';
?>
<?php
if (!empty($_GET['login_err'])) {
    $err = htmlspecialchars(trim($_GET['login_err']));
    switch ($err) {
        case 'password':
        ?>
            <div class="alert alert-danger">
            Erreur !! Mot de passe incorrect !!
            </div>
        <?php
        break;
        case 'email':
        ?>
            <div class="alert alert-danger">
            Erreur !! Email incorrect !!
            </div>
        <?php
        break;
        case'already':
        ?>
            <div class="alert alert-danger">
            Erreur !! Compte non existant !!
            </div>
        <?php
    }
} elseif (!empty($_GET['reg_err'])) {
    $err = htmlspecialchars(trim($_GET['reg_err']));

    switch ($err) {
        case'success':
        ?>
            <div class="alert alert-success">
            Félicitation !! Inscription réussie !!
            </div>
        <?php
        break;
        case'empty':
        ?>
            <div class="alert alert-danger">
            Erreur Tous les champs doivent être remplis
            </div>
        <?php
    }
}
?>

<?php
require __DIR__.'/inc/footer.php';
?>