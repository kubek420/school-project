<?php

    $connection = @mysqli_connect('localhost', 'kaudekjg', 'Testujehosting123!')
    or die ('Brak po��czenia z baz� danych. </br> B��d:'
    .mysqli_error($connection));
    echo "</br>Po��czenie udane";

    $db = @mysqli_select_db($connection, 'kaudekjg_ep')
    or die ('</br>Nie mo�emy po��czy� si� z baz� danych. </br> B��d:'
    .mysqli_error($connection));

    echo "</br>huraaaaa";

    mysqli_close($connection);
?>