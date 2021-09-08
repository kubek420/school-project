<?php
    require_once 'config/app_config.php';
    require_once 'config/db_connect.php';
    require_once 'core/DB.php';

    define('PAGE_TITLE', 'Rekrutacja');
    define('ACTIVE_PAGE', 2021);

    if ($_SESSION['user_klasa'] <> 'Brak') {
        header('Location: rekrutacja');
    }
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
                <h1>Nastąpił problem!</h1>
                <p>Nie jesteś przydzielony do żadnej klasy, jeśli uważasz, że to błąd. Zgłoś to do administratora strony!</p>
                <a href="kontakt"><button class="contact-btn">Kontakt</button></a>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
            
            <?php include 'templates/footer.php' ?>
       </div>
   </body>
</html>
