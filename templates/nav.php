<div class="nav">
    <ol class="mainmenu">
        <a href="strona-glowna"><img src="assets/logo-green.png" class="brand-logo"></a>

        <a href="strona-glowna"><li <?php if (ACTIVE_PAGE === 0) echo ' class="active"' ?>>Strona główna</li></a>
        <a href="plan-lekcji"><li <?php if (ACTIVE_PAGE === 1) echo ' class="active"' ?>>Plan lekcji</li></a>

        <?php
            if ($_SESSION['user_admin'] == 'tak') {
                echo "<a href=\"adminpanel\"><li".((ACTIVE_PAGE === 10) ? ' class="active"' : '').">Panel Administratora</li></a> ";
            }

            if ($_SESSION['user_admin'] != 'tak') {
                if (isset($_SESSION['user_logged']) || $_SESSION['user_logged'] == true)
                    echo "<a href=\"rekrutacja\"><li".((ACTIVE_PAGE === 3) ? ' class="active"' : '').">Rekrutacja</li></a> ";
            }

            if (!isset($_SESSION['user_logged']) || $_SESSION['user_logged'] == false)
                echo "<a href=\"nabor-2021\"><li".((ACTIVE_PAGE === 2021) ? ' class="active"' : '').">Nabór / Rekrutacja</li></a> ";
        ?>

        <a href="kontakt"><li <?php if (ACTIVE_PAGE === 4) echo ' class="active"' ?>>Kontakt</li></a>

        <?php
            if (!isset($_SESSION['user_logged']) || $_SESSION['user_logged'] == false)
                echo "<a href=\"rejestracja\"><li".((ACTIVE_PAGE === 6) ? ' class="active"' : '').">Załóż konto</li></a> ";
        ?>

        <?php
            if (!isset($_SESSION['user_logged']) || $_SESSION['user_logged'] == false)
                echo "<a href=\"logowanie\"><li".((ACTIVE_PAGE === 5) ? ' class="active"' : '').">Zaloguj się</li></a> ";
        ?>
    </ol>

    <?php
        if (isset($_SESSION['user_logged']) || $_SESSION['user_logged'] == true)
            echo '<a href="wyloguj"><button class="btn-logout">Wyloguj się</button></a>';
    ?>

    <span class="nav-name"> 
        <?php 
            if (isset($_SESSION['user_logged']) || $_SESSION['user_logged'] == true)
                echo 'Witaj, '.$_SESSION['user_name'].'!';
        ?> 
    </span>

    <img src="https://img.icons8.com/material-rounded/344/menu--v1.png" class="menu-toggler">

    <div class="settings-menu">
        <ol class="res-menu">
            <div class="d-cont"><h2 class="glitch" data-text="#Elektronik">#Elektronik</h2></div>

            <a href="strona-glowna"><li <?php if (ACTIVE_PAGE === 0) echo ' class="active"' ?>>Strona główna</li></a>
            <a href="plan-lekcji"><li <?php if (ACTIVE_PAGE === 1) echo ' class="active"' ?>>Plan lekcji</li></a>

            <?php
                if ($_SESSION['user_admin'] == 'tak') {
                    echo "<a href=\"adminpanel\"><li".((ACTIVE_PAGE === 10) ? ' class="active"' : '').">Panel Administratora</li></a> ";
                }

                if ($_SESSION['user_admin'] != 'tak') {
                    if (isset($_SESSION['user_logged']) || $_SESSION['user_logged'] == true)
                        echo "<a href=\"rekrutacja\"><li".((ACTIVE_PAGE === 3) ? ' class="active"' : '').">Rekrutacja</li></a> ";
                }

                if (!isset($_SESSION['user_logged']) || $_SESSION['user_logged'] == false)
                    echo "<a href=\"nabor-2021\"><li".((ACTIVE_PAGE === 2021) ? ' class="active"' : '').">Nabór / Rekrutacja</li></a> ";
            ?>

            <a href="kontakt"><li <?php if (ACTIVE_PAGE === 4) echo ' class="active"' ?>>Kontakt</li></a>

            <?php
                if (!isset($_SESSION['user_logged']) || $_SESSION['user_logged'] == false)
                    echo "<a href=\"rejestracja\"><li".((ACTIVE_PAGE === 6) ? ' class="active"' : '').">Załóż konto</li></a> ";
            ?>

            <?php
                if (!isset($_SESSION['user_logged']) || $_SESSION['user_logged'] == false)
                    echo "<a href=\"logowanie\"><li".((ACTIVE_PAGE === 5) ? ' class="active"' : '').">Zaloguj się</li></a> ";
            ?>
            <?php
                if (isset($_SESSION['user_logged']) || $_SESSION['user_logged'] == true)
                    echo '<a href="wyloguj"><li class="active-logout">Wyloguj się</li></a>';
            ?>
        </ol>

        <h3>Ustaw kolor strony</h3>

        <div class="colors">
            <div class="color" style="background:#fdaa11;" data-color="#fdaa11"></div>
            <div class="color" style="background:#e06be0;" data-color="#e06be0"></div>
            <div class="color" style="background:#15cc7d;" data-color="#15cc7d"></div>
            <div class="color" style="background:#15a2cc;" data-color="#15a2cc"></div>
        </div>

        <h3 style="margin-top:14px;" class="theme-h">Motyw</h3>

        <div class="theme-container">
            <input type="checkbox" id="darktheme" class="theme-toggler">
            <label for="darktheme">Ciemny motyw</label>
        </div>
    </div>

    <?php
        $avatar = '';
        
        if (isset($_SESSION['user_logged']) && $_SESSION['user_logged'] == true) {
            $av = DBConnect::execute("SELECT `avatar` FROM `uczniowie` WHERE `email` = '".$_SESSION['user_email']."'", DBConnect::FETCH);

            if($av[0][0] == '') $avatar = '';
            else $avatar = $av;
        }
    ?>

    <img src="assets/avatars/<?php echo (!$avatar || $avatar == null || $avatar == '') ? '008f6a3b0b5ee617101a0e023479.png' : $avatar[0][0] ?>" class="user-avatar">

    <script>
        const themeToggler = document.querySelector('.theme-toggler');

        document.addEventListener('DOMContentLoaded', () => {

            if (localStorage.getItem("theme") === 'dark') {
                document.documentElement.classList.add('theme-dark');
                document.documentElement.classList.remove('theme-light');

                themeToggler.checked = true;
            }
        });
    
        themeToggler.addEventListener('change', () => {
            if (themeToggler.checked) {
                document.documentElement.classList.add('theme-dark');
                document.documentElement.classList.remove('theme-light');

                localStorage.setItem("theme", "dark");
            } else {
                document.documentElement.classList.add('theme-light');
                document.documentElement.classList.remove('theme-dark');

                localStorage.setItem("theme", "light");
            }
        });

        /*menu*/

        document.querySelector('.menu-toggler').addEventListener('click', () => {
            if (document.querySelector('.settings-menu').style.display == 'block') {
                document.querySelector('.settings-menu').style.display = 'none';
            } else {
                document.querySelector('.settings-menu').style.display = 'block';
            }
        });
       
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelector('.container').addEventListener('click', () => {
                document.querySelector('.settings-menu').style.display = 'none';
            });

            setTimeout(() => {
                document.querySelector('.video').addEventListener('click', () => {
                    document.querySelector('.settings-menu').style.display = 'none';
                });

                document.querySelector('video').addEventListener('click', () => {
                    document.querySelector('.settings-menu').style.display = 'none';
                });
            }, 2000);

            document.querySelectorAll('.color').forEach(color => {
                color.addEventListener('click', () => {
                    document.documentElement.style.setProperty('--theme', color.dataset.color);

                    switch(color.dataset.color) {
                        case '#fdaa11':
                            document.querySelector('.brand-logo').src = 'assets/logo-orange.png';
                            localStorage.setItem("theme-color", 'orange');
                        break;

                        case '#e06be0':
                            document.querySelector('.brand-logo').src = 'assets/logo-pink.png';
                            localStorage.setItem("theme-color", 'pink');
                        break;

                        case '#15cc7d':
                            document.querySelector('.brand-logo').src = 'assets/logo-green.png';
                            localStorage.setItem("theme-color", 'green');
                        break;

                        case '#15a2cc':
                            document.querySelector('.brand-logo').src = 'assets/logo-blue.png';
                            localStorage.setItem("theme-color", 'blue');
                        break;
                    }

                    localStorage.setItem("color", color.dataset.color);
                });
            });
        });

        switch(localStorage.getItem("theme-color")) {
            case 'orange':
                document.querySelector('.brand-logo').src = 'assets/logo-orange.png';
                localStorage.setItem("theme-color", 'orange');
            break;

            case 'pink':
                document.querySelector('.brand-logo').src = 'assets/logo-pink.png';
                localStorage.setItem("theme-color", 'pink');
            break;

            case 'green':
                document.querySelector('.brand-logo').src = 'assets/logo-green.png';
                localStorage.setItem("theme-color", 'green');
            break;

            case 'blue':
                document.querySelector('.brand-logo').src = 'assets/logo-blue.png';
                localStorage.setItem("theme-color", 'blue');
            break;
        }
        

        if (localStorage.getItem('color')) {
            document.documentElement.style.setProperty('--theme', localStorage.getItem('color'));
        }
    </script>
</div>
