<?php
    require_once 'config/app_config.php';
    require_once 'core/DB.php';

    define('PAGE_TITLE', 'Strona główna');
    define('ACTIVE_PAGE', 0);
?>

<!DOCTYPE html>
<html lang="pl" class="theme-light">
    <head>
        <?php include 'templates/head.php' ?>
    </head>

    <body>
        <?php include 'templates/nav.php' ?>

        <div class="container">
            <div class="content">
                <section>
                    <section>
                        <h1 class="hh1">Zespół Szkół Elektronicznych w<br>Jeleniej Górze</h1>
                        <h1 class="hh2">ZSE Elektronik</h1>

                        <p style="text-indent:20px;">Na tej stronie zobaczysz informacje dotyczące rekrutacji, plan lekcji oraz dziennik elektroniczny szkoły.<br>Dowiesz się również, dlaczego warto wybrać naszą szkołę.</p>
                    </section>

                    <section>
                        <h1 style="margin-right: 100px;">Filmy promocyjne</h1>

                        <div class="video">
                            <video width="218px" height="389px" src="./videos/1.mp4" class="video-slider" controls></video>

                            <div class="video-btns">
                                <button onclick="clickedcolor('slider-btn1'), unclickedcolor('slider-btn2'), unclickedcolor('slider-btn3'), unclickedcolor('slider-btn4'), unclickedcolor('slider-btn5'), unclickedcolor('slider-btn6'), slider('./videos/1.mp4')" id="slider-btn1" class="slider-btn" style="background: var(--theme); color: rgb(18, 18, 18);">1</button>
                                <button onclick="clickedcolor('slider-btn2'), unclickedcolor('slider-btn1'), unclickedcolor('slider-btn3'), unclickedcolor('slider-btn4'), unclickedcolor('slider-btn5'), unclickedcolor('slider-btn6'), slider('./videos/2.mp4')" id="slider-btn2" class="slider-btn">2</button>
                                <button onclick="clickedcolor('slider-btn3'), unclickedcolor('slider-btn2'), unclickedcolor('slider-btn1'), unclickedcolor('slider-btn4'), unclickedcolor('slider-btn5'), unclickedcolor('slider-btn6'), slider('./videos/3.mp4')" id="slider-btn3" class="slider-btn">3</button>
                                <button onclick="clickedcolor('slider-btn4'), unclickedcolor('slider-btn2'), unclickedcolor('slider-btn3'), unclickedcolor('slider-btn1'), unclickedcolor('slider-btn5'), unclickedcolor('slider-btn6'), slider('./videos/4.mp4')" id="slider-btn4" class="slider-btn">4</button>
                                <button onclick="clickedcolor('slider-btn5'), unclickedcolor('slider-btn2'), unclickedcolor('slider-btn3'), unclickedcolor('slider-btn4'), unclickedcolor('slider-btn1'), unclickedcolor('slider-btn6'), slider('./videos/5.mp4')" id="slider-btn5" class="slider-btn">5</button>
                                <button onclick="clickedcolor('slider-btn6'), unclickedcolor('slider-btn1'), unclickedcolor('slider-btn3'), unclickedcolor('slider-btn4'), unclickedcolor('slider-btn5'), unclickedcolor('slider-btn1'), slider('./videos/6.mp4')" id="slider-btn6" class="slider-btn">6</button>
                            </div>
                        </div>
                    </section>
                </section>

                <h1>Dlaczego wybrać naszą szkołę?</h1>

                <p class="txt">Nasza szkoła posiada jeden z lepszych współczynników zdawalności matur z wysokim wynikiem oraz jednych z lepszych nauczycieli w swoim zawodzie. W naszej szkole rozwijane są kierunki przyszłościowe takie jak programista czy informatyk, jak i te na które jest duże zapotrzebowanie, choćby logistyk. Budynek szkoły znajduje się blisko centrum, niedaleko PKS-u, także dojazd nie sprawia problemu.</p>

                <p class="txt" style="padding-top:0">Do zalet można również zaliczyć wspaniałego dyrektora, mającego ciepłe relacje z każdym uczniem, zna on każdego po imieniu, nazwisku i twarzy, dzięki czemu nie ma on problemu z rozpoznaniem nas i przeprowadzeniem przyjemnej rozmowy :)</p>


                <h1>Plan lekcji</h1>

                <p><a href="plan-lekcji">Wyświetl plan lekcji</a></p>


                <br>


                <h1>Dziennik elektroniczny</h1>

                <p>Wyświetl dziennik w wersji elektronicznej <a href="https://uonetplus.vulcan.net.pl/jeleniagora/" target="_blank">Przejdź do dziennika</a></p>

                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>

            <script src="vanilla-tilt.min.js"></script>
            <script>
                document.getElementsByTagName('video')[0].volume = 0.5;

                function slider(srcvideo) {
                    document.querySelector(".video-slider").src = srcvideo;
                    document.querySelector(".video-slider").play();
                }

                function clickedcolor(id) {
                    document.getElementById(id).style.background = "var(--theme)";
                    document.getElementById(id).style.color = "#121212";
                }

                function unclickedcolor(id) {
                    document.getElementById(id).style.background = "var(--slider-btn)";
                    document.getElementById(id).style.color = "var(--slider-btn-color)";
                }

                if (window.matchMedia('(min-width: 700px)').matches) {
                    VanillaTilt.init(document.querySelector(".video-slider"), {
                        max: 15,
                        speed: 400
                    });
                }

            </script>

            <?php include 'templates/footer.php' ?>
       </div>
   </body>
</html>
