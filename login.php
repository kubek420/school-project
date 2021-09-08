<?php
    session_start();

    if (isset($_SESSION['user_logged']) && $_SESSION['user_logged']) {
	header('Location: strona-glowna');

	exit();
    }

    require_once 'config/app_config.php';
    require_once 'config/db_connect.php';
    require_once 'core/DB.php';

    define('PAGE_TITLE', 'Zaloguj się');
    define('ACTIVE_PAGE', 5);

    # logowanie

    if (isset($_POST['email']) && isset($_POST['password'])) {
		$email = htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8');
		$password = $_POST['password'];

		$users = DBConnect::execute("SELECT * FROM uczniowie WHERE email='$email' AND password='$password'", DBConnect::FETCH);

		foreach ($users as $user) {
			if (count($users) > 0) {
				$_SESSION['user_logged'] = true;
	
				$_SESSION['user_id'] = $user['id'];
				$_SESSION['user_name'] = $user['imie'];
				$_SESSION['user_email'] = $user['email'];
                $_SESSION['user_points'] = $user['ilosc_pkt'];
                $_SESSION['user_klasa'] = $user['oddzial'];
                $_SESSION['user_admin'] = $user['adminpanel'];

                                header('Location: strona-glowna');
			} else {
				$_SESSION['error_login'] = 'Nieprawidłowy adres lub hasło';
			}
		}

		$_SESSION['login_email'] = $email;
		$_SESSION['login_password'] = $password;
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
            <div class="content login">
                <form target="_self" method="POST" class="login-form">
                    <h1>Zaloguj się</h1>

                    <label>E-mail
                        <input type="text" autocomplete="off" class="login-input" name="email" value="<?php if (isset($_SESSION['login_email'])): echo $_SESSION['login_email']; unset($_SESSION['login_email']); endif; ?>">
                    </label>

                    <label>Hasło
                        <input type="password" autocomplete="off" class="login-input" name="password" value="<?php if (isset($_SESSION['login_password'])): echo $_SESSION['login_password']; unset($_SESSION['login_password']); endif; ?>">
                    </label>

                    <?php
                        if (isset($_SESSION['error_login'])) {
                            echo '<div class="login-error">'.$_SESSION['error_login'].'</div>';
                            unset($_SESSION['error_login']);
                        }
                    ?>

                    <button type="submit" class="login-button">Zaloguj się</button>
                </form>
            </div>

            <!--<div class="empty-content"></div>-->

            <?php include 'templates/footer.php' ?>
            
       </div>
   </body>
</html>
