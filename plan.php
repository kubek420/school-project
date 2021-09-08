<?php
    require_once 'config/app_config.php';
    require_once 'core/DB.php';

    define('PAGE_TITLE', 'Plan lekcji');
    define('ACTIVE_PAGE', 1);
?>
<!DOCTYPE html>
<html class="theme-light">
    <head>
        <?php include 'templates/head.php' ?>
        <script>
			function show(id){
                document.getElementById(id).style.visibility = "visible";
                document.getElementById(id).style.animation = "show .5s";
                document.getElementById(id).style.opacity = 1;
            }
            function fasthide(id){
                document.getElementById(id).style.visibility = "hidden";
                document.getElementById(id).style.opacity = 0;
            }
            function color(id){
                document.getElementById(id).style.borderBottomColor = " var(--theme)";
                document.getElementById(id).style.borderRadius = " 0";
            }
            function uncolor(id){
                document.getElementById(id).style.borderBottomColor = "transparent";
                document.getElementById(id).style.borderRadius = " 6px";
            }
            function hide(id){
                document.getElementById(id).style.animation = "hide .5s";
                document.getElementById(id).style.opacity = 0;
                setTimeout(function(){
                  document.getElementById(id).style.visibility = "hidden";  
                }, 400);
            }

            document.addEventListener('DOMContentLoaded', () => {
				fasthide('plan1');fasthide('plan2');fasthide('plan3');fasthide('plan4');fasthide('plan5');fasthide('plan6');
				color('btn1');uncolor('btn2');uncolor('btn3');uncolor('btn4');uncolor('btn5');uncolor('btn6');show('plan1');fasthide('plan2');fasthide('plan3');fasthide('plan4');fasthide('plan5');fasthide('plan6');
			});
        </script>

    </head>

    <body>
        <?php include 'templates/nav.php' ?>

        <div class="container">
            
            <div class="classMenu">
                <ol> Klasy: <br>
                    <li id="btn1" onclick="color('btn1'), uncolor('btn2'), uncolor('btn3'), uncolor('btn4'), uncolor('btn5'), uncolor('btn6'), show('plan1'), fasthide('plan2'), fasthide('plan3'), fasthide('plan4'), fasthide('plan5'), fasthide('plan6')"><a href="#">1P</a></li>
                    <li id="btn2" onclick="color('btn2'), uncolor('btn1'), uncolor('btn3'), uncolor('btn4'), uncolor('btn5'), uncolor('btn6'), show('plan2'), fasthide('plan1'), fasthide('plan3'), fasthide('plan4'), fasthide('plan5'), fasthide('plan6')"><a href="#">1TI</a></li>
                    <li id="btn3" onclick="color('btn3'), uncolor('btn2'), uncolor('btn1'), uncolor('btn4'), uncolor('btn5'), uncolor('btn6'), show('plan3'), fasthide('plan2'), fasthide('plan1'), fasthide('plan4'), fasthide('plan5'), fasthide('plan6')"><a href="#">1TIA</a></li>
                    <li id="btn4" onclick="color('btn4'), uncolor('btn2'), uncolor('btn3'), uncolor('btn1'), uncolor('btn5'), uncolor('btn6'), show('plan4'), fasthide('plan2'), fasthide('plan3'), fasthide('plan1'), fasthide('plan5'), fasthide('plan6')"><a href="#">1TIB</a></li>
                    <li id="btn5" onclick="color('btn5'), uncolor('btn2'), uncolor('btn3'), uncolor('btn4'), uncolor('btn1'), uncolor('btn6'), show('plan5'), fasthide('plan2'), fasthide('plan3'), fasthide('plan4'), fasthide('plan1'), fasthide('plan6')"><a href="#">1TL</a></li>
                    <li id="btn6" onclick="color('btn6'), uncolor('btn2'), uncolor('btn3'), uncolor('btn4'), uncolor('btn5'), uncolor('btn1'), show('plan6'), fasthide('plan2'), fasthide('plan3'), fasthide('plan4'), fasthide('plan5'), fasthide('plan1')"><a href="#">1TE</a></li>
                </ol>
            </div>
            <div class="showClassPlan">
                <div id="plan1">
                    <table border="1" cellspacing="0" cellpadding="4" class="tabela">
                    <tr>
                    <th>Nr</th>
                    <th>Godz</th>
                    <th>Poniedziałek</th>
                    <th>Wtorek</th>
                    <th>Środa</th>
                    <th>Czwartek</th>
                    <th>Piątek</th>
                    </tr>
                    <tr>
                    <td class="nr">0</td>
                    <td class="g"> 7:05- 7:50</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    </tr>
                    <tr>
                    <td class="nr">1</td>
                    <td class="g"> 8:00- 8:45</td>
                    <td class="l"><span class="p">historia</span></td>
                    <td class="l"><span class="p">GD</span></td>
                    <td class="l"><span class="p">chemia</span></td>
                    <td class="l">&nbsp;</td>
                    <td class="l"><span class="p">r_matematyka</span></td>
                    </tr>
                    <tr>
                    <td class="nr">2</td>
                    <td class="g"> 8:50- 9:35</td>
                    <td class="l"><span style="font-size:95%"><span class="p">wf-1/2</span> <br><span style="font-size:95%"><span class="p">wf-2/2</span></td>
                    <td class="l"><span class="p">historia</span></td>
                    <td class="l"><span class="p">BHP</span></td>
                    <td class="l"><span class="p">biologia</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">informatyka-1/2</span> <br><span style="font-size:95%"><span class="p">j.niemiecki-2/2</span></td>
                    </tr>
                    <tr>
                    <td class="nr">3</td>
                    <td class="g"> 9:40-10:25</td>
                    <td class="l"><span style="font-size:95%"><span class="p">wf-1/2</span><br><span style="font-size:95%"><span class="p">wf-2/2</span> </td>
                    <td class="l"><span style="font-size:95%"><span class="p">PDK-1/2</span><br><span style="font-size:95%"><span class="p">e_dla_bezp-2/2</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">pr.str.inter-1/2</span><br><span style="font-size:95%"><span class="p">j.angielski-2/2</span> </td>
                    <td class="l"><span class="p">filozofia</span></td>
                    <td class="l"><span class="p">fizyka</span></td>
                    </tr>
                    <tr>
                    <td class="nr">4</td>
                    <td class="g">10:35-11:20</td>
                    <td class="l"><span class="p">matematyka</span> </td>
                    <td class="l"><span class="p">geografia</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">pr.str.inter-1/2</span><br><span style="font-size:95%"><span class="p">wf-2/2</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">Projekt.i ad-1/2</span><br><span style="font-size:95%"><span class="p">informatyka-2/2</span></span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">pr.str. int-1/2</span><span style="font-size:95%"><span class="p">PDK-2/2</span>0</td>
                    </tr>
                    <tr>
                    <td class="nr">5</td>
                    <td class="g">11:35-12:20</td>
                    <td class="l"><span class="p">godz.wych</span></td>
                    <td class="l"><span class="p">j.polski</span></td>
                    <td class="l"><span class="p">j.polski</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">Projekt.i ad-1/2</span><br><span style="font-size:95%"><span class="p">j.angielski-2/2</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">pr.str. int-1/2</span><br><span style="font-size:95%"><span class="p">PDK-2/2</span></td>
                    </tr>
                    <tr>
                    <td class="nr">6</td>
                    <td class="g">12:25-13:10</td>
                    <td class="l"><span style="font-size:95%"><span class="p">pr.baz dan-1/2</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">j.angielski-1/2</span> <br><span style="font-size:95%"><span class="p">pr.str.inter-2/2</span></td>
                    <td class="l"><span class="p">j.polski</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">wf-1/2</span><br><span style="font-size:95%"><span class="p">pr.baz dan-2/2</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">j.angielski-1/2</span><br><span style="font-size:95%"><span class="p">Projekt.i ad-2/2</span></td>
                    </tr>
                    <tr>
                    <td class="nr">7</td>
                    <td class="g">13:20-14:05</td>
                    <td class="l"><span style="font-size:95%"><span class="p">pr.baz dan-1/2</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">j.niemiecki-1/2</span><br><span style="font-size:95%"><span class="p">pr.str.inter-2/2</span></td>
                    <td class="l"><span class="p">matematyka</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">e_dla_bezp-1/2</span><br><span style="font-size:95%"><span class="p">pr.str. int-2/2</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">j.niemiecki-1/2</span><br><span style="font-size:95%"><span class="p">Projekt.i ad-2/2</span></td>
                    </tr>
                    <tr>
                    <td class="nr">8</td>
                    <td class="g">14:10-14:55</td>
                    <td class="l"><span style="font-size:95%"><span class="p">PDK-1/2</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">pr.baz dan-2/2</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">j.niemiecki-2/2</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">pr.str. int-2/2</span></td>
                    <td class="l"><span class="p">religia</span>-1/1 <span class="p">#rel</span></td>
                    </tr>
                    <tr>
                    <td class="nr">9</td>
                    <td class="g">15:00-15:45</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l"><span class="p">religia</span>-1/1 <span class="p">#rel</span></td>
                    </tr>
                    </table>
                </div>
                <div id="plan2">
                    <table border="1" cellspacing="0" cellpadding="4" class="tabela">
                    <tr>
                    <th>Nr</th>
                    <th>Godz</th>
                    <th>Poniedziałek</th>
                    <th>Wtorek</th>
                    <th>Środa</th>
                    <th>Czwartek</th>
                    <th>Piątek</th>
                    </tr>
                    <tr>
                    <td class="nr">0</td>
                    <td class="g"> 7:05- 7:50</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    </tr>
                    <tr>
                    <td class="nr">1</td>
                    <td class="g"> 8:00- 8:45</td>
                    <td class="l"><span style="font-size:95%"><span class="p">obsł.syst.op-2/2</span></span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">obsł.syst.op-1/2</span></span></td>
                    <td class="l">&nbsp;</td>
                    <td class="l"><span class="p">j.polski</span></td>
                    <td class="l">&nbsp;</td>
                    </tr>
                    <tr>
                    <td class="nr">2</td>
                    <td class="g"> 8:50- 9:35</td>
                    <td class="l"><span style="font-size:95%"><span class="p">obsł.syst.op-2/2</span></span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">obsł.syst.op-1/2</span></span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">j.angielski-1/2</span></span></td>
                    <td class="l"><span class="p">j.polski</span></td>
                    <td class="l"><span class="p">matematyka</span></td>
                    </tr>
                    <tr>
                    <td class="nr">3</td>
                    <td class="g"> 9:40-10:25</td>
                    <td class="l"><span class="p">j.polski</span></td>
                    <td class="l"><span class="p">filozofia</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">j.niemiecki-1/2</span></span><br><span style="font-size:85%"><span class="p">j.angielski-2/2</span></span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">syst.operac.-1/2</span></span><br><span style="font-size:85%"><span class="p">j.angielski-2/2</span></span></td>
                    <td class="l"><span class="p">BHP</span></td>
                    </tr>
                    <tr>
                    <td class="nr">4</td>
                    <td class="g">10:35-11:20</td>
                    <td class="l"><span class="p">godz.wych</span></td>
                    <td class="l"><span class="p">historia</span></td>
                    <td class="l"><span class="p">matematyka</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">syst.operac.-1/2</span></span><br><span style="font-size:85%"><span class="p">j.niemiecki-2/2</span></span></td>
                    <td class="l"><span class="p">GD</span></td>
                    </tr>
                    <tr>
                    <td class="nr">5</td>
                    <td class="g">11:35-12:20</td>
                    <td class="l"><span class="p">geografia</span></td>
                    <td class="l"><span class="p">fizyka</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">UTK-1/2</span></span><br><span style="font-size:85%"><span class="p">serwis kom.-2/2</span></span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">j.angielski-1/2</span></span><br><span style="font-size:85%"><span class="p">e_dla_bezp-2/2</span> </span></td>
                    <td class="l"><span class="p">historia</span></td>
                    </tr>
                    <tr>
                    <td class="nr">6</td>
                    <td class="g">12:25-13:10</td>
                    <td class="l"><span style="font-size:95%"><span class="p">wf-1/2</span></span><br><span style="font-size:85%"><span class="p">j.niemiecki-2/2</span></span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">j.niemiecki-1/2</span></span><br><span style="font-size:85%"><span class="p">informatyka-2/2</span></span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">UTK-1/2</span></span><br><span style="font-size:85%"><span class="p">serwis kom.-2/2</span></span></td>
                    <td class="l"><span class="p">biologia</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">oprogr.użyt-1/2</span></span><br><span style="font-size:85%"><span class="p">syst.operac.-2/2</span></span></td>
                    </tr>
                    <tr>
                    <td class="nr">7</td>
                    <td class="g">13:20-14:05</td>
                    <td class="l"><span style="font-size:95%"><span class="p">r_ang_n-1/2</span></span><br><span style="font-size:85%"><span class="p">wf-2/2</span></span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">e_dla_bezp-1/2</span> </span><br><span style="font-size:85%"><span class="p">r_ang_n-2/2</span></span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">serwis kom.-1/2</span></span><br><span style="font-size:85%"><span class="p">UTK-2/2</span></span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">wf-1/2</span></span><br><span style="font-size:85%"><span class="p">wf-2/2</span></span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">oprogr.użyt-1/2</span></span><br><span style="font-size:85%"><span class="p">syst.operac.-2/2</span></span></td>
                    </tr>
                    <tr>
                    <td class="nr">8</td>
                    <td class="g">14:10-14:55</td>
                    <td class="l"><span class="p">religia</span>-1/1 <span class="p">#1re</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">oprogr.użyt-2/2</span></span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">serwis kom.-1/2</span></span><br><span style="font-size:85%"><span class="p">UTK-2/2</span></span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">wf-1/2</span></span><br><span style="font-size:85%"><span class="p">wf-2/2</span></span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">informatyka-1/2</span></span></td>
                    </tr>
                    <tr>
                    <td class="nr">9</td>
                    <td class="g">15:00-15:45</td>
                    <td class="l"><span class="p">religia</span>-1/1 <span class="p">#1re</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">oprogr.użyt-2/2</span></span></td>
                    <td class="l"><span class="p">chemia</span></td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    </tr>
                    </table>
                </div>
                <div id="plan3">
                    <table border="1" cellspacing="0" cellpadding="4" class="tabela">
                    <tr>
                    <th>Nr</th>
                    <th>Godz</th>
                    <th>Poniedziałek</th>
                    <th>Wtorek</th>
                    <th>Środa</th>
                    <th>Czwartek</th>
                    <th>Piątek</th>
                    </tr>
                    <tr>
                    <td class="nr">0</td>
                    <td class="g"> 7:05- 7:50</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    </tr>
                    <tr>
                    <td class="nr">1</td>
                    <td class="g"> 8:00- 8:45</td>
                    <td class="l"><span style="font-size:95%"><span class="p">obsł.syst.op-2/2</span></span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">obsł.syst.op-1/2</span></span></td>
                    <td class="l">&nbsp;</td>
                    <td class="l"><span class="p">j.polski</span></td>
                    <td class="l">&nbsp;</td>
                    </tr>
                    <tr>
                    <td class="nr">2</td>
                    <td class="g"> 8:50- 9:35</td>
                    <td class="l"><span style="font-size:95%"><span class="p">obsł.syst.op-2/2</span></span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">obsł.syst.op-1/2</span></span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">j.angielski-1/2</span></span></td>
                    <td class="l"><span class="p">j.polski</span></td>
                    <td class="l"><span class="p">matematyka</span></td>
                    </tr>
                    <tr>
                    <td class="nr">3</td>
                    <td class="g"> 9:40-10:25</td>
                    <td class="l"><span class="p">j.polski</span></td>
                    <td class="l"><span class="p">filozofia</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">j.niemiecki-1/2</span></span><br><span style="font-size:85%"><span class="p">j.angielski-2/2</span></span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">syst.operac.-1/2</span></span><br><span style="font-size:85%"><span class="p">j.angielski-2/2</span></span></td>
                    <td class="l"><span class="p">BHP</span></td>
                    </tr>
                    <tr>
                    <td class="nr">4</td>
                    <td class="g">10:35-11:20</td>
                    <td class="l"><span class="p">godz.wych</span></td>
                    <td class="l"><span class="p">historia</span></td>
                    <td class="l"><span class="p">matematyka</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">syst.operac.-1/2</span></span><br><span style="font-size:85%"><span class="p">j.niemiecki-2/2</span></span></td>
                    <td class="l"><span class="p">fizyka</span></td>
                    </tr>
                    <tr>
                    <td class="nr">5</td>
                    <td class="g">11:35-12:20</td>
                    <td class="l"><span class="p">GD</span></td>
                    <td class="l"><span class="p">biologia</span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">UTK-1/2</span></span><br><span style="font-size:85%"><span class="p">serwis kom.-2/2</span></span></td>
                    <td class="l"><span style="font-size:95%"><span class="p">j.angielski-1/2</span></span><br><span style="font-size:85%"><span class="p">e_dla_bezp-2/2</span> </span></td>
                    <td class="l"><span class="p">historia</span></td>
                    </tr>
                    <tr>
                    <td class="nr">6</td>
                    <td class="g">12:25-13:10</td>
                    <td class="l"><span style="font-size:85%"><span class="p">wf-1/2</span></span><br><span style="font-size:85%"><span class="p">j.niemiecki-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">j.niemiecki-1/2</span></span><br><span style="font-size:85%"><span class="p">informatyka-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">UTK-1/2</span></span><br><span style="font-size:85%"><span class="p">serwis kom.-2/2</span></span></td>
                    <td class="l"><span class="p">geografia</span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">oprogr.użyt-1/2</span></span><br><span style="font-size:85%"><span class="p">syst.operac.-2/2</span></span></td>
                    </tr>
                    <tr>
                    <td class="nr">7</td>
                    <td class="g">13:20-14:05</td>
                    <td class="l"><span style="font-size:85%"><span class="p">r_ang_n-1/2</span></span><br><span style="font-size:85%"><span class="p">wf-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">e_dla_bezp-1/2</span> </span><br><span style="font-size:85%"><span class="p">r_ang_n-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">serwis kom.-1/2</span></span><br><span style="font-size:85%"><span class="p">UTK-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">wf-1/2</span></span><br><span style="font-size:85%"><span class="p">wf-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">oprogr.użyt-1/2</span></span><br><span style="font-size:85%"><span class="p">syst.operac.-2/2</span></span></td>
                    </tr>
                    <tr>
                    <td class="nr">8</td>
                    <td class="g">14:10-14:55</td>
                    <td class="l"><span class="p">religia</span>-1/1 <span class="p">#1re</span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">oprogr.użyt-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">serwis kom.-1/2</span></span><br><span style="font-size:85%"><span class="p">UTK-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">wf-1/2</span></span><br><span style="font-size:85%"><span class="p">wf-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">informatyka-1/2</span></span></td>
                    </tr>
                    <tr>
                    <td class="nr">9</td>
                    <td class="g">15:00-15:45</td>
                    <td class="l"><span class="p">religia</span>-1/1 <span class="p">#1re</span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">oprogr.użyt-2/2</span></span></td>
                    <td class="l"><span class="p">chemia</span></td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    </tr>
                    </table>
                </div>
                <div id="plan4">
                    <table border="1" cellspacing="0" cellpadding="4" class="tabela">
                    <tr>
                    <th>Nr</th>
                    <th>Godz</th>
                    <th>Poniedziałek</th>
                    <th>Wtorek</th>
                    <th>Środa</th>
                    <th>Czwartek</th>
                    <th>Piątek</th>
                    </tr>
                    <tr>
                    <td class="nr">0</td>
                    <td class="g"> 7:05- 7:50</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    </tr>
                    <tr>
                    <td class="nr">1</td>
                    <td class="g"> 8:00- 8:45</td>
                    <td class="l"><span style="font-size:85%"><span class="p">j.angielski-2/2</span></span></td>
                    <td class="l">&nbsp;</td>
                    <td class="l"><span style="font-size:85%"><span class="p">informatyka-1/2</span></span><br><span style="font-size:85%"><span class="p">wf-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">syst.operac.-1/2</span></span><br><span style="font-size:85%"><span class="p">obsł.syst.op-2/2</span></span></td>
                    <td class="l"><span class="p">j.polski</span></td>
                    </tr>
                    <tr>
                    <td class="nr">2</td>
                    <td class="g"> 8:50- 9:35</td>
                    <td class="l"><span class="p">GD</span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">wf-1/2</span></span><br><span style="font-size:85%"><span class="p">wf-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">j.angielski-1/2</span></span><br><span style="font-size:85%"><span class="p">informatyka-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">syst.operac.-1/2</span></span><br><span style="font-size:85%"><span class="p">obsł.syst.op-2/2</span></span></td>
                    <td class="l"><span class="p">j.polski</span></td>
                    </tr>
                    <tr>
                    <td class="nr">3</td>
                    <td class="g"> 9:40-10:25</td>
                    <td class="l"><span class="p">godz.wych</span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">wf-1/2</span></span><br><span style="font-size:85%"><span class="p">wf-2/2</span></span></td>
                    <td class="l"><span class="p">BHP</span> </td>
                    <td class="l"><span style="font-size:85%"><span class="p">oprogr.użyt-1/2</span></span><br><span style="font-size:85%"><span class="p">syst.operac.-2/2</span></span></td>
                    <td class="l"><span class="p">matematyka</span></td>
                    </tr>
                    <tr>
                    <td class="nr">4</td>
                    <td class="g">10:35-11:20</td>
                    <td class="l"><span class="p">geografia</span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">j.angielski-1/2</span></span><br><span style="font-size:85%"><span class="p">j.niemiecki-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">obsł.syst.op-1/2</span></span><br><span style="font-size:85%"><span class="p">e_dla_bezp-2/2</span> </span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">oprogr.użyt-1/2</span></span><br><span style="font-size:85%"><span class="p">syst.operac.-2/2</span></span></td>
                    <td class="l"><span class="p">matematyka</span></td>
                    </tr>
                    <tr>
                    <td class="nr">5</td>
                    <td class="g">11:35-12:20</td>
                    <td class="l"><span class="p">filozofia</span></td>
                    <td class="l"><span class="p">historia</span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">obsł.syst.op-1/2</span></span><br><span style="font-size:85%"><span class="p">j.niemiecki-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">serwis kom.-1/2</span></span><br><span style="font-size:85%"><span class="p">UTK-2/2</span></td>
                    <td class="l"><span class="p">biologia</span></td>
                    </tr>
                    <tr>
                    <td class="nr">6</td>
                    <td class="g">12:25-13:10</td>
                    <td class="l"><span class="p">j.polski</span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">j.niemiecki-1/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">e_dla_bezp-1/2</span> </span><br><span style="font-size:85%"><span class="p">j.angielski-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">serwis kom.-1/2</span></span><br><span style="font-size:85%"><span class="p">UTK-2/2</span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">j.niemiecki-1/2</span></span><br><span style="font-size:85%"><span class="p">oprogr.użyt-2/2</span></span></td>
                    </tr>
                    <tr>
                    <td class="nr">7</td>
                    <td class="g">13:20-14:05</td>
                    <td class="l"><span class="p">historia</span></td>
                    <td class="l">&nbsp;</td>
                    <td class="l"><span class="p">fizyka</span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">UTK-1/2</span></span><br><span style="font-size:85%"><span class="p">serwis kom.-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">r_ang_n-1/2</span></span><br><span style="font-size:85%"><span class="p">oprogr.użyt-2/2</span></span></td>
                    </tr>
                    <tr>
                    <td class="nr">8</td>
                    <td class="g">14:10-14:55</td>
                    <td class="l"><span class="p">religia</span>-1/1 <span class="p">#1re</span></td>
                    <td class="l">&nbsp;</td>
                    <td class="l"><span class="p">chemia</span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">UTK-1/2</span></span><br><span style="font-size:85%"><span class="p">serwis kom.-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">wf-1/2</span></span><br><span style="font-size:85%"><span class="p">r_ang_n-2/2</span></span></td>
                    </tr>
                    <tr>
                    <td class="nr">9</td>
                    <td class="g">15:00-15:45</td>
                    <td class="l"><span class="p">religia</span>-1/1 <span class="p">#1re</span></td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    </tr>
                    </table>
                </div>
                <div id="plan5">
                    <table border="1" cellspacing="0" cellpadding="4" class="tabela">
                    <tr>
                    <th>Nr</th>
                    <th>Godz</th>
                    <th>Poniedziałek</th>
                    <th>Wtorek</th>
                    <th>Środa</th>
                    <th>Czwartek</th>
                    <th>Piątek</th>
                    </tr>
                    <tr>
                    <td class="nr">0</td>
                    <td class="g"> 7:05- 7:50</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    </tr>
                    <tr>
                    <td class="nr">1</td>
                    <td class="g"> 8:00- 8:45</td>
                    <td class="l"><span class="p">org.pr.mag</span></td>
                    <td class="l"><span class="p">mag.dystr</span></td>
                    <td class="l"><span class="p">mag.dystr</span></td>
                    <td class="l"><span class="p">GD</span></td>
                    <td class="l">EB 107 geo</td>
                    </tr>
                    <tr>
                    <td class="nr">2</td>
                    <td class="g"> 8:50- 9:35</td>
                    <td class="l"><span class="p">matematyka</span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">j.angielski-1/2</span></span><br><span style="font-size:85%"><span class="p">j.angielski-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">j.niemiecki-1/2</span></span><br><span style="font-size:85%"><span class="p">r_ang_n-2/2</span></span></td>
                    <td class="l"><span class="p">procesy mag</span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">wf-1/2</span> </span><br><span style="font-size:85%"><span class="p">wf-2/2</span> </span></td>
                    </tr>
                    <tr>
                    <td class="nr">3</td>
                    <td class="g"> 9:40-10:25</td>
                    <td class="l"><span style="font-size:85%"><span class="p">informatyka-1/2</span></span><br><span style="font-size:85%"><span class="p">j.angielski-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">j.niemiecki-1/2</span></span><br><span style="font-size:85%"><span class="p">wf-2/2</span></span></td>
                    <td class="l"><span class="p">matematyka</span></td>
                    <td class="l"><span class="p">biologia</span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">wf-1/2</span> </span><br><span style="font-size:85%"><span class="p">wf-2/2</span> </span></td>
                    </tr>
                    <tr>
                    <td class="nr">4</td>
                    <td class="g">10:35-11:20</td>
                    <td class="l"><span style="font-size:85%"><span class="p">r_ang_n-1/2</span></span><br><span style="font-size:85%"><span class="p">j.niemiecki-2/2</span></span></td>
                    <td class="l"><span class="p">godz.wych</span></td>
                    <td class="l"><span class="p">fizyka</span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">j.angielski-1/2</span> </span><br><span style="font-size:85%"><span class="p">e_dla_bezp-2/2</span> </span></td>
                    <td class="l"><span class="p">gosp.mag</span></td>
                    </tr>
                    <tr>
                    <td class="nr">5</td>
                    <td class="g">11:35-12:20</td>
                    <td class="l"><span style="font-size:85%"><span class="p">wf-1/2</span> </span><br><span style="font-size:85%"><span class="p">informatyka-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">e_dla_bezp-1/2</span> </span><br><span style="font-size:85%"><span class="p">j.niemiecki-2/2</span></span></td>
                    <td class="l"><span class="p">chemia</span></td>
                    <td class="l"><span class="p">historia</span></td>
                    <td class="l"><span class="p">mag.prod</span></td>
                    </tr>
                    <tr>
                    <td class="nr">6</td>
                    <td class="g">12:25-13:10</td>
                    <td class="l"><span class="p">j.polski</span></td>
                    <td class="l"><span class="p">org.pr.mag</span></td>
                    <td class="l"><span class="p">historia</span></td>
                    <td class="l"><span class="p">BHP</span> </td>
                    <td class="l"><span class="p">procesy mag</span></td>
                    </tr>
                    <tr>
                    <td class="nr">7</td>
                    <td class="g">13:20-14:05</td>
                    <td class="l"><span class="p">j.polski</span></td>
                    <td class="l"><span class="p">geografia</span></td>
                    <td class="l"><span class="p">filozofia</span></td>
                    <td class="l"><span class="p">mag.prod</span></td>
                    <td class="l"><span class="p">j.polski</span></td>
                    </tr>
                    <tr>
                    <td class="nr">8</td>
                    <td class="g">14:10-14:55</td>
                    <td class="l"><span class="p">geografia</span></td>
                    <td class="l">&nbsp;</td>
                    <td class="l"><span class="p">gosp.mag</span></td>
                    <td class="l">&nbsp;</td>
                    <td class="l"><span class="p">religia</span>-1/1 <span class="p">#rel</span></td>
                    </tr>
                    <tr>
                    <td class="nr">9</td>
                    <td class="g">15:00-15:45</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l"><span class="p">religia</span>-1/1 <span class="p">#rel</span></td>
                    </tr>
                    </table>
                </div>
                <div id="plan6">
                    <table border="1" cellspacing="0" cellpadding="4" class="tabela">
                    <tr>
                    <th>Nr</th>
                    <th>Godz</th>
                    <th>Poniedziałek</th>
                    <th>Wtorek</th>
                    <th>Środa</th>
                    <th>Czwartek</th>
                    <th>Piątek</th>
                    </tr>
                    <tr>
                    <td class="nr">0</td>
                    <td class="g"> 7:05- 7:50</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    <td class="l">&nbsp;</td>
                    </tr>
                    <tr>
                    <td class="nr">1</td>
                    <td class="g"> 8:00- 8:45</td>
                    <td class="l"><span style="font-size:85%"><span class="p">mont.ukł-1/3</span><br><span style="font-size:85%"><span class="p">mont.ukł-2/3</span> </span></td>
                    <td class="l"><span class="p">el.i el.</span> </td>
                    <td class="l"><span style="font-size:85%"><span class="p">pom.el.i el.-3/3</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">rys.tech.-1/2</span></span></td>
                    <td class="l"><span class="p">chemia</span></td>
                    </tr>
                    <tr>
                    <td class="nr">2</td>
                    <td class="g"> 8:50- 9:35</td>
                    <td class="l"><span style="font-size:85%"><span class="p">mont.ukł-1/3</span><br><span style="font-size:85%"><span class="p">mont.ukł-2/3</span> </span></td>
                    <td class="l"><span class="p">el.i el.</span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">pom.el.i el.-3/3</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">rys.tech.-1/2</span></span><br><span style="font-size:85%"><span class="p">j.angielski-2/2</span></span></td>
                    <td class="l"><span class="p">j.polski</span></td>
                    </tr>
                    <tr>
                    <td class="nr">3</td>
                    <td class="g"> 9:40-10:25</td>
                    <td class="l"><span style="font-size:85%"><span class="p">mont.ukł-1/3</span><br><span style="font-size:85%"><span class="p">mont.ukł-2/3</span> </span></td>
                    <td class="l"><span class="p">matematyka</span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">j.niemiecki-1/2</span><br><span style="font-size:85%"><span class="p">j.niemiecki-2/2</span></span></td>
                    <td class="l"><span class="p">matematyka</span></td>
                    <td class="l"><span class="p">j.polski</span></td>
                    </tr>
                    <tr>
                    <td class="nr">4</td>
                    <td class="g">10:35-11:20</td>
                    <td class="l"><span style="font-size:85%"><span class="p">j.angielski-1/2</span></span><br><span style="font-size:85%"><span class="p">r_ang_n-2/2</span></span></td>
                    <td class="l"><span class="p">j.polski</span></td>
                    <td class="l"><span class="p">el.i el.</span></td>
                    <td class="l"><span class="p">biologia</span></td>
                    <td class="l"><span class="p">GD</span></td>
                    </tr>
                    <tr>
                    <td class="nr">5</td>
                    <td class="g">11:35-12:20</td>
                    <td class="l"><span class="p">geografia</span></td>
                    <td class="l"><span class="p">wf</span></td>
                    <td class="l"><span class="p">filozofia</span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">r_ang_n-1/2</span></span><br><span style="font-size:85%"><span class="p">informatyka-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">j.angielski-1/2</span></span><br><span style="font-size:85%"><span class="p">e_dla_bezp-2/2</span></span></td>
                    </tr>
                    <tr>
                    <td class="nr">6</td>
                    <td class="g">12:25-13:10</td>
                    <td class="l"><span class="p">fizyka</span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">j.niemiecki-1/2</span> </span><br><span style="font-size:85%"><span class="p">rys.tech.-2/2</span></span></td>
                    <td class="l"><span class="p">godz.wych</span> <a href="n45.html" class="n">KU</a> </td>
                    <td class="l"><span class="p">historia</span> <a href="n15.html" class="n">VB</a> </td>
                    <td class="l"><span class="p">historia</span> <a href="n15.html" class="n">VB</a> </td>
                    </tr>
                    <tr>
                    <td class="nr">7</td>
                    <td class="g">13:20-14:05</td>
                    <td class="l"><span style="font-size:85%"><span class="p">e_dla_bezp-1/2</span></span><br><span style="font-size:85%"><span class="p">j.niemiecki-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">informatyka-1/2</span></span><br><span style="font-size:85%"><span class="p">rys.tech.-2/2</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">pom.el.i el.-2/3</span></span><br><span style="font-size:85%"><span class="p">mont.ukł-3/3</span></td>
                    <td class="l"><span class="p">BHP</span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">j.angielski-2/2</span></span></td>
                    </tr>
                    <tr>
                    <td class="nr">8</td>
                    <td class="g">14:10-14:55</td>
                    <td class="l"><span class="p">religia</span>-1/1 <span class="p">#1re</span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">pom.el.i el.-1/3</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">pom.el.i el.-2/3</span></span><br><span style="font-size:85%"><span class="p">mont.ukł-3/3</span></td>
                    <td class="l"><span class="p">wf</span></td>
                    <td class="l">&nbsp;</td>
                    </tr>
                    <tr>
                    <td class="nr">9</td>
                    <td class="g">15:00-15:45</td>
                    <td class="l"><span class="p">religia</span>-1/1 <span class="p">#1re</span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">pom.el.i el.-1/3</span></span></td>
                    <td class="l"><span style="font-size:85%"><span class="p">mont.ukł-3/3</span></td>
                    <td class="l"><span class="p">wf</span></td>
                    <td class="l">&nbsp;</td>
                    </tr>
                    </table>
                </div>
            </div>


            <?php include 'templates/footer.php' ?>
       </div>
   </body>
</html>
