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
<div class="main_index">
    <div class="main_title"><h1>Référencement Couteliers</h1>
    </div>
    <div class="main_presentation">
        <div class="main_presentation_title">
            <h2>Pourquoi ce site ?</h2>
        </div>
        <div class="main_presentation_content">
        <p>Fan de couteaux, j'ai récemment fait une reconversion dans le développement Web.</p>
        <p>J'ai décidé de créer ce site, pour donner de la visibilité a nos chers couteliers.</p>
        <p>L'inscription est requise afin d'accéder à la carte des couteliers.</p>
        </div>
    </div>
</div>
<?php
require __DIR__.'/inc/footer.php';
?>