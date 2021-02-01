<?php
session_start();
require('inc/header.php');
?>
<?php
    if (isset($_GET['reg_err'])) {
        $err = htmlspecialchars(trim($_GET['reg_err']));

        switch ($err) {
            case'success':
            ?>
                <div class="alert-success">
                Inscription réussie !!
                </div>
            <?php
            break;
            case'password':
            ?>
                <div class="alert-danger">
                Erreur mot de passe différent !!
                </div>
            <?php
            break;
            case'email':
            ?>
                <div class="alert-danger">
                Erreur !! email non valide !!
                </div>
            <?php
            break;
            case'email_length':
            ?>
                <div class="alert-danger">
                Erreur !! Email trop long !!
                </div>
            <?php
            break;
            case'pseudo_length':
            ?>
                <div class="alert-danger">
                Erreur !! pseudo trop long !!
                </div>
            <?php
            break;
            case'already':
            ?>
                <div class="alert-danger">
                Erreur !! compte déjà existant !!
                </div>
            <?php
            
        }
    }

    
$token = md5(uniqid(rand(), true));
$_SESSION['token'] = $token;
$_SESSION['token_time'] = time();

?>
<section class="inscription">
    <div class="inscription_title">
        <h1>Inscription</h1>
    </div>
    <div class="inscription_form">
        <form action="inscription_traitement.php" method="post">
            <div class="inscription_form_group">
                <label for="pseudo">Pseudo</label>
                <input  type="text" name="pseudo" required="required" placeholder="Pseudo">
            </div>
            <div class="inscription_form_group">
                <label for="email">Email</label>
                <input  type="email" name="email" required="required" placeholder="Email">
            </div>
            <div class="inscription_form_group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" required="required" placeholder="Mot de passe">
            </div>
            <div class="inscription_form_group password_retype">
                <label for="password_retype">Vérification du mot de passe</label>
                <input  type="password" name="password_retype" required="required" placeholder="Vérification du mot de passe">
            </div>
            <div class="inscription_form_group inscription_form_select">
                <label for="status">Quel est votre rapport aux lames ?</label>
                <select name="status">
                    <option value="fan">Amateur de belles lames</option>
                    <option value="amateur">Coutelier amateur/hobbyiste</option>
                    <option value="pro">Coutelier Professionnel/artisan</option>
                </select>
            </div>
            <input type="hidden" name="token" value="<?php echo $token; ?>"/>
            <div class="inscription_form_button">
                <button type="submit" class="button">Valider</button>
            </div>
        </form>
    </div>
</section>

<?php
require('inc/footer.php');
?>