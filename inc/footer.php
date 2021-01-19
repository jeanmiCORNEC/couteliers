</main>
<footer>

<?php
if (!isset($_COOKIE['accepte-cookie'])) {
    ?>
    <div class="banner">
        <div class="text_banner">
            <p>Pour une meilleure expérience utilisateur, ce site utilise des cookies ou technologie similaire, pour mesurer l'audience et accéder à des données personnelles comme votre visite sur ce site.</p>
        </div>
        <div class="button_banner">
            <a href="?accept_cookie">J'accepte les cookies !</a>
        </div>
    </div>
<?php
}
?>

</footer>    
<!-- leaflet -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="crossorigin=""></script>
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</div>
</body>
</html>