<div class="footer">
    <img src="assets/logo-main.png" class="footer-logo">

    <div class="footer-copy">&copy; <?= date('Y') ?> Dominik Rajkowski | Michał Romanowski | Maciej Struś</div>

    <a href="https://www.youtube.com/channel/UCuj9ezPlPHmxvVFhzbM50Uw?view_as=subscriber" target="_blank" title="Odwiedź nasz kanał na Youtube"><img src="assets/youtube.png" class="footer-yt"></a>
    <a href="https://www.facebook.com/ZSEJG" target="_blank" title="Przedź na nasz profil na Facebooku"><img src="assets/facebook.png" class="footer-fb"></a>

    <div class="footer-href">
        <ol>
            <li><a href="strona-glowna">Strona główna</a></li>
            <li><a href="plan-lekcji">Plan lekcji</a></li>
            <li><a href="informacje">Informacje</a></li>
            <li><a href="rekrutacja">Rekrutacja</a></li>
            <li><a href="kontakt">Kontakt</a></li>
        </ol>
    </div>
</div>

<div class="loader">
    <div class="ladowanie"></div>
</div>

<script>
    window.addEventListener("load", function(){
        const loader = document.querySelector(".loader");

        setTimeout(() => {
            loader.className += " hide"
        }, 500);
    });
</script>
