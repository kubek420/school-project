<?php
    session_start();

    if (isset($_SESSION['user_logged']) && $_SESSION['user_logged']) {
        header('Location: strona-glowna');

        exit();
    }

    require_once 'config/app_config.php';
    require_once 'config/db_connect.php';
    require_once 'core/DB.php';

    define('PAGE_TITLE', 'Rejestracja');
    define('ACTIVE_PAGE', 6);

    if (isset($_POST['email'])) {
		$valid_reg = true;

		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password_confirm = $_POST['password_confirm'];

		$email_sanitized = filter_var($email, FILTER_SANITIZE_EMAIL);

		# Username
		if (strlen($username) < 8 || strlen($username) > 64) {
			$valid_reg = false;

			$_SESSION['error_username'] = 'Nazwa musi mieć długość od 8 do 64 znaków';
		}

		# Email
		if (!filter_var($email_sanitized, FILTER_VALIDATE_EMAIL) || $email_sanitized != $email) {
			$valid_reg = false;

			$_SESSION['error_email'] = 'Podaj prawidłowy adres e-mail';
		}

		# Password
		if (strlen($password) < 8 || strlen($password) > 64) {
			$valid_reg = false;

			$_SESSION['error_password'] = 'Hasło musi mieć od 8 do 64 znaków';
		}

		# Password confirm
		if ($password != $password_confirm) {
			$valid_reg = false;

			$_SESSION['error_password_confirm'] = 'Podane hasła są różne';
		}

		if ($password_confirm == '' || !isset($password_confirm)) {
			$valid_reg = false;

			$_SESSION['error_password_confirm'] = 'Potwierdź hasło';
		}

        # Avatar
        $image = $_FILES['avatar']['name'];
        $imageGeneratedName = bin2hex(openssl_random_pseudo_bytes(14)).'.'.end(explode('.', basename($image)));

        move_uploaded_file($_FILES['avatar']['tmp_name'], 'assets/avatars/'.$imageGeneratedName);

		# Remember input data
		$_SESSION['register_username'] = $username;
		$_SESSION['register_email'] = $email;
		$_SESSION['register_password'] = $password;
		$_SESSION['register_password_confirm'] = $password_confirm;

		# Register user
		if ($valid_reg) {
			$emails = DBConnect::execute("SELECT `id` FROM `uczniowie` WHERE `email` = '$email'", DBConnect::FETCH);

			if (!is_null($emails) && count($emails) > 0) {
				$valid_reg = false;

				$_SESSION['error_email'] = 'Istnieje już konto z tym adresem';
			} else {
				DBConnect::execute("INSERT INTO `uczniowie` VALUES (NULL, '$username', '$username', '', 0, '', 'Brak', '$email', '$password', '$imageGeneratedName', NULL)", DBConnect::EXEC);
                
                header('Location: logowanie');
			}
		}
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
                <form target="_self" method="POST" class="login-form" enctype="multipart/form-data">
                    <h1>Załóż konto</h1>

                    <label>Adres e-mail
                        <input type="text" autocomplete="off" class="login-input" name="email" value="<?php if (isset($_SESSION['register_email'])): echo $_SESSION['register_email']; unset($_SESSION['register_email']); endif; ?>">
                    </label>

                    <?php
                        if (isset($_SESSION['error_email'])) {
                            echo '<div class="sign-error">'.$_SESSION['error_email'].'</div>';
                            unset($_SESSION['error_email']);
                        }
                    ?>

                    <label>Nazwa użytkownika
                        <input type="text" autocomplete="off" class="login-input" name="username" value="<?php if (isset($_SESSION['register_username'])): echo $_SESSION['register_username']; unset($_SESSION['register_username']); endif; ?>">
                    </label>

                    <?php
                        if (isset($_SESSION['error_username'])) {
                            echo '<div class="sign-error">'.$_SESSION['error_username'].'</div>';
                            unset($_SESSION['error_username']);
                        }
                    ?>

                    <label>Hasło
                        <input type="password" autocomplete="off" class="login-input" name="password" value="<?php if (isset($_SESSION['register_password'])): echo $_SESSION['register_password']; unset($_SESSION['register_password']); endif; ?>">
                    </label>

                    <?php
                        if (isset($_SESSION['error_password'])) {
                            echo '<div class="sign-error">'.$_SESSION['error_password'].'</div>';
                            unset($_SESSION['error_password']);
                        }
                    ?>

                    <label>Powtórz hasło
                        <input type="password" autocomplete="off" class="login-input" name="password_confirm" value="<?php if (isset($_SESSION['register_password_confirm'])): echo $_SESSION['register_password_confirm']; unset($_SESSION['register_password_confirm']); endif; ?>">
                    </label>

                    <?php
                        if (isset($_SESSION['error_password_confirm'])) {
                            echo '<div class="sign-error">'.$_SESSION['error_password_confirm'].'</div>';
                            unset($_SESSION['error_password_confirm']);
                        }
                    ?>

                    <label style="width:100%">Wybierz zdjęcie profilowe<br>
                        <input type="file" id="av" accept="image/x-png,image/gif,image/jpeg,video/mp4" hidden style="display:none;" name="avatar">
                        <span id="sel"></span>

                        <br>
                        <button class="button" id="btn1" type="button">Dodaj zdjęcie profilowe</button>
                    </label>

                    <?php
                        if (isset($_SESSION['error_register'])) {
                            echo '<div class="login-error">'.$_SESSION['error_register'].'</div>';
                            unset($_SESSION['error_register']);
                        }
                    ?>

                    <button type="submit" class="login-button">Załóż konto</button>
                </form>
            </div>

            <script>
                document.getElementById('btn1').addEventListener('click', () => {
                    document.getElementById('av').click();

                    document.getElementById('av').addEventListener('change', () => {
                        document.getElementById('sel').innerHTML = document.getElementById('av').files[0].name;
                    });
                });
            </script>

            <?php include 'templates/footer.php' ?>
       </div>
   </body>
</html>
