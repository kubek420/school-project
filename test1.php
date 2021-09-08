<?php
    require_once 'config/app_config.php';
    require_once 'config/db_connect.php';
    require_once 'core/DB.php';

    define('PAGE_TITLE', 'Rekrutacja');
    define('ACTIVE_PAGE', 2021);

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
                <section>
                <section><h1>Nabór elektroniczny</h1>
                        <p><a class="link1" href="https://dolnoslaskie.edu.com.pl/" target="_blank">https://dolnoslaskie.edu.com.pl</a></p></section>
                <section><img style="border-radius:12px; margin-right:100px;" src="assets/nabor.jpg" width="350px" alt=""></section>
                </section>

                <br><br><br><br><br><br><br><br><br><br>
            </div>
            
            <?php include 'templates/footer.php' ?>
       </div>
   </body>
</html>