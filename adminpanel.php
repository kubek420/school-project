<?php
    require_once 'config/app_config.php';
    require_once 'config/db_connect.php';
    require_once 'core/DB.php';

    define('PAGE_TITLE', 'Admin Panel');
    define('ACTIVE_PAGE', 10);

    if (!isset($_SESSION['user_logged']) || $_SESSION['user_logged'] == false) {
        header('Location: logowanie');
    }
    if ($_SESSION['user_admin'] != 'tak') {
        header('Location: strona-glowna');
    }

    $klasa = $_POST['classX'];
    $wybranaklasa = DBConnect::execute("SELECT * FROM uczniowie WHERE oddzial = '".$klasa."'", DBConnect::FETCH);

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
                    <section class="adminPanelFindUsersError"><h1>(Funkcja nie dostępna na smartfonach)</h1><br></section>
                    <section class="adminPanelFindUsers">
                        <h1>Zobacz uczniów z klas:</h1>
                        
                        <form target="_self" method="POST">
                            <label for="chooseClass">Wybierz klase:</label>

                            <select onchange="showClass()" id="selectClass">
                                <option disabled selected value="."> -- wybierz klasę -- </option>
                                <option value="1P"<?php if ($klasa === '1P') echo ' selected' ?>>1P</option>
                                <option value="1TI"<?php if ($klasa === '1TI') echo ' selected' ?>>1TI</option>
                                <option value="1TIA"<?php if ($klasa === '1TIA') echo ' selected' ?>>1TIA</option>
                                <option value="1TIB"<?php if ($klasa === '1TIB') echo ' selected' ?>>1TIB</option>
                                <option value="1TL"<?php if ($klasa === '1TL') echo ' selected' ?>>1TL</option>
                                <option value="1TE"<?php if ($klasa === '1TE') echo ' selected' ?>>1TE</option>
                            </select>

                            <input type="hidden" id="classY" name="classX" value="">
                        </form>
                        <table style="width:840px;font-size:14px;margin-top:32px;">
                                <tbody>
                                    <tr style="margin-bottom:10px;">
                                        <th style="text-align:left;">Imię</th>
                                        <th style="text-align:left;">Nazwisko</th>
                                        <th style="text-align:left;">Punkty</th>
                                        <th style="text-align:left;">Miasto</th>
                                        <th style="text-align:left;">Email</th>
                                        <th style="text-align:left;">Haslo</th>
                                    </tr>

                                    <?php 
                                        foreach ($wybranaklasa as $osoba) {
                                            echo '<tr>';
                                            echo '<td>'.$osoba['imie'].'</td>';
                                            echo '<td>'.$osoba['nazwisko'].'</td>';
                                            echo '<td>'.$osoba['ilosc_pkt'].'</td>';
                                            echo '<td>'.$osoba['miasto'].'</td>';
                                            echo '<td>'.$osoba['email'].'</td>';
                                            echo '<td>'.$osoba['password'].'</td>';
                                            echo '</tr>';
                                        }
                                    ?>
                                </tbody>
                            </table>
                    </section>

                    <section style="margin-right: 100px;" class="ad-form">
                        <form target="_self" method="POST" class="login-form" style="margin-top: 0px">
                            <h1>Dodaj do tabeli</h1>

                            <label>Imię
                                <input type="text" autocomplete="off" class="login-input" name="addimie" value="" >
                            </label>

                            <label>Nazwisko
                                <input type="text" autocomplete="off" class="login-input" name="addnazwisko" value="">
                            </label>

                            <label>Miasto
                                <input type="text" autocomplete="off" class="login-input" name="addmiasto" value="">
                            </label>

                            <label>Ilość punktów<small>&nbsp;(0-200)</small>
                                <input type="text" autocomplete="off" class="login-input" name="addpkt" value="0">
                            </label>

                            <label>Szkoła podstawowa
                                <input type="text" autocomplete="off" class="login-input" name="addszkola" value="">
                            </label>

                            <label>Klasa
                                <input type="text" autocomplete="off" class="login-input" name="addklasa" value="">
                            </label>

                            <label>E-mail<small>&nbsp;(imienazwisko@gmail.com)</small>
                                <input type="text" autocomplete="off" class="login-input" name="addemail" value="">
                            </label>

                            <label>Hasło<small>&nbsp;(nazwisko123)</small>
                                <input type="text" autocomplete="off" class="login-input" name="addhaslo" value="">
                            </label>
                            
                            <button type="submit" class="login-button">Wyślij</button>
                        </form>
                    </section>
                </section>

                <?php 
                    if (isset($_POST['addemail']) && isset($_POST['addhaslo']) && isset($_POST['addimie']) && isset($_POST['addnazwisko']) && isset($_POST['addpkt'])) {
                        $imie = $_POST['addimie'];
                        $nazwisko = $_POST['addnazwisko'];
                        $miasto = $_POST['addmiasto'];
                        $pkt = $_POST['addpkt'];
                        $szkola = $_POST['addszkola'];
                        $klasa = $_POST['addklasa'];
                        $email = htmlentities($_POST['addemail'], ENT_QUOTES, 'UTF-8');
                        $haslo = $_POST['addhaslo'];

                        DBConnect::execute("INSERT INTO uczniowie (id, imie, nazwisko, miasto, ilosc_pkt, szkola_podstawowa, oddzial, email, `password`, adminpanel) VALUES(NULL, '$imie', '$nazwisko', '$miasto', '$pkt', '$szkola', '$klasa', '$email', '$haslo', '')", DBConnect::EXEC);
                    }
                ?>

                <br><br><br><br><br><br><br><br><br><br><br>
            </div>

            <script>
                function showClass(){
                    let selectedClass = document.getElementById("selectClass").value;

                    document.getElementById("classY").value = selectedClass;
                    document.forms[0].submit();
                }
            </script>

            <?php include 'templates/footer.php' ?>
       </div>
   </body>
</html>
