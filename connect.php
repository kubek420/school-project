<?php

    $connection = @mysqli_connect('localhost', 'kaudekjg', 'Testujehosting123!')
    or die ('Brak po³¹czenia z baz¹ danych. </br> B³¹d:'
    .mysqli_error($connection));
    echo "</br>Po³¹czenie udane";

    $db = @mysqli_select_db($connection, 'kaudekjg_ep')
    or die ('</br>Nie mo¿emy po³¹czyæ siê z baz¹ danych. </br> B³¹d:'
    .mysqli_error($connection));

    echo "</br>huraaaaa";

    mysqli_close($connection);
?>