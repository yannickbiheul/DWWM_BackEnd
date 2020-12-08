<?php

    $fcontents = file("coucou.txt");
    var_dump($fcontents);
    foreach ($fcontents as $line_num => $line) {
        echo "<br>", $line, "<br>";
    }

?>