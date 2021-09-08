<?php
    require_once 'config/app_config.php';
    require_once 'core/DB.php';

    define('PAGE_TITLE', 'Kontakt');
    define('ACTIVE_PAGE', 4);
?>
<!DOCTYPE html>
<html class="theme-light">
    <head>
        <?php include 'templates/head.php' ?>
    </head>

    <body>
        <?php include 'templates/nav.php' ?>

        <div class="container">
            <div class="content">
                <section><section>
                <h1>Kontakt do nas</h1>

                <p style="padding: 0 25px;">Zespół Szkół Elektronicznych w Jeleniej Górze</p>
                <p style="line-height: 1; padding: 0 25px;">ul. Grunwaldzka 64a</p>
                <p style="line-height: 1; padding: 0 25px;">58-506 Jelenia Góra</p>
                <p style="line-height: 1; padding: 0 25px;">Email: elektronik@zsejg.edu.pl</p>
                <p style="line-height: 1; padding: 0 25px;">tel. 75 75 245 81</p>

                </section><section>

                <h1 class="local-header">Nasza lokalizacja</h1>

                <iframe class="local-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2515.622543637668!2d15.73769220398255!3d50.91219995743541!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8a26f0c73a771c60!2zWmVzcMOzxYIgU3prw7PFgiBFbGVrdHJvbmljem55Y2ggdyBKZWxlbmllaiBHw7NyemU!5e0!3m2!1spl!2spl!4v1615031853179!5m2!1spl!2spl" width="700" height="550" style="border-radiuss:12px; border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </section></section>
                <br><br><br><br>
                
            </div>

            <?php include 'templates/footer.php' ?>
       </div>
   </body>
</html>