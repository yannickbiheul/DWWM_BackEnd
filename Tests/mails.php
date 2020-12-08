<?php

    $email = array (
        "toto" => "toto@univ-lille3.fr",
        "titi" => "titi@wanadoo.fr",
        "tata" => "tata@pareilquetiti.fr",
        "tutu" => "tutu@nulpart.com"
    );

    function LigneMail($id,$ad) {
        echo "<tr>\n";
        echo "<th>$id</th>\n";
        echo "<td><a href='mailto:$ad'>$ad</a></td>\n";
        echo "</tr>\n";
    }

    echo "<TABLE BORDER=1>\n";
    foreach ($email as $nom=>$mail) {
        LigneMail($nom,$mail);
    }
    echo "</TABLE>\n";

?>