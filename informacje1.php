<?php
    require_once 'config/app_config.php';
    require_once 'core/DB.php';

    define('PAGE_TITLE', 'Informacje');
    define('ACTIVE_PAGE', 2);
?>
<!DOCTYPE html>
<html class="theme-light">
    <head>
        <?php include 'templates/head.php' ?>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.16.2/build/styles/default.min.css">
	    <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.16.2/build/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
    </head>

    <body>
        <?php include 'templates/nav.php' ?>

        <div class="container">

            <div class="content">
                <section>
                    <section>
                        <h1>Skrypt PHP</h1>
                        <p>Przerobiony skrypt php wymagany do zdania projektu ^_^</p>
                    </section>

                    <section style="margin-right: 200px;">
                        <pre><code class="previewCode">
                            &lt;?php <br>
                            define("Os1P", 25); <br>
                            define("Os1TI", 25);<br>
                            define("Os1TIA", 25);<br>
                            define("Os1TIB", 25);<br>
                            define("Os1TL", 25);<br>
                            define("Os1TE", 25);<br>
                            <br>
                            $Os1p = Os1P;<br>
                            $Os1TI = Os1TI;<br>
                            $Os1TIA = Os1TIA;<br>
                            $Os1TIB = Os1TIB;<br>
                            $Os1TL = Os1TL;<br>
                            $Os1TE = Os1TE;<br>
                            <br>
                            $AllOs = $Os1p + $Os1TI + $Os1TIA + $Os1TIB + $Os1TL + $Os1TE;<br>
                            ?&gt; 
                        </code></pre>
                    </section>
                </section>


                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

            </div>

            <?php include 'templates/footer.php' ?>
       </div>
   </body>
</html>