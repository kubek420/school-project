<?php
    require_once 'config/app_config.php';
    require_once 'config/db_connect.php';
    require_once 'core/DB.php';

    define('PAGE_TITLE', 'Rekrutacja');
    define('ACTIVE_PAGE', 3);

    if (!isset($_SESSION['user_logged']) || $_SESSION['user_logged'] == false) {
        header('Location: logowanie');
    }

    if ($_SESSION['user_admin'] == 'tak') {
        header('Location: adminpanel');
    }

    if ($_SESSION['user_klasa'] == 'Brak') {
        header('Location: brak-klasy');
    }

    $min = DBConnect::execute("SELECT MIN(ilosc_pkt) as minpkt FROM uczniowie WHERE ilosc_pkt > 0", DBConnect::FETCH);
    $avg = DBConnect::execute("SELECT AVG(ilosc_pkt) as avgpkt FROM uczniowie WHERE ilosc_pkt > 0", DBConnect::FETCH);
    $max = DBConnect::execute("SELECT MAX(ilosc_pkt) as maxpkt FROM uczniowie WHERE ilosc_pkt > 0", DBConnect::FETCH);
    

    $minpkt = $min[0]['minpkt'];
    $avgpkt = $avg[0]['avgpkt'];
    $maxpkt = $max[0]['maxpkt'];

    $rekrutacja['pkt'] = $_SESSION['user_points'];
    $rekrutacja['klasa'] = $_SESSION['user_klasa'];
    $rekrutacja['email'] = $_SESSION['user_email'];

    $allosoby = DBConnect::execute("SELECT * FROM uczniowie WHERE oddzial = '".$rekrutacja['klasa']."' AND EMAIL != '".$rekrutacja['email']."'ORDER BY nazwisko", DBConnect::FETCH);
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
                <h1 style="margin-bottom:10px;"><small>Twoje informacje</small></h1>

                <p><?php echo 'Punkty: <b>'.$rekrutacja['pkt'].'/200</b>'; ?><br><?php echo 'Przydzielona klasa: <b>'.$rekrutacja['klasa'].'</b>'; ?></p>

                <h1 style="margin-bottom:10px; margin-top:10px;"><small>Wyniki innych uczniów</small></h1>

                <p><?php echo 'Najwyższa ilość punktów: <b>'.$maxpkt.'/200</b><br>Najniższa ilość punktów: <b>'.$minpkt.'/200</b><br>Średnia ilość punktów: <b>'.(int)$avgpkt.'</b>'; ?></p>

                <h1 style="margin-bottom:10px; margin-top:10px;"><small>Inne osoby z twojej klasy</small></h1>

                <table style="width:440px;font-size:14px;margin-top:32px;">
                    <tbody>
                        <tr style="margin-bottom:10px;">
                            <th style="text-align:left;">Imię</th>
                            <th style="text-align:left;">Nazwisko</th>
                            <th style="text-align:left;">Punkty</th>
                        </tr>

                        <?php 
                            foreach ($allosoby as $osoba) {
                                echo '<tr>';
                                echo '<td>'.$osoba['imie'].'</td>';
                                echo '<td>'.$osoba['nazwisko'].'</td>';
                                echo '<td>'.$osoba['ilosc_pkt'].'</td>';
                                echo '</tr>';
                            }
                        ?>
                    </tbody>
                </table>

                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
            
            <?php include 'templates/footer.php' ?>
       </div>
   </body>
</html>