<?php

    $data = '{
        "name": "Alex",
        "age": "25",
        "address": "Paris",
        "emails": [ "eee@zzz.com", "rr@ee" ]
    }';

    $obj = json_decode($data);
    // var_dump($obj);
    echo gettype($obj);
    echo "<br>";
    echo $obj->name . "<br>";
    echo $obj->age . "<br>";
    echo $obj->emails[0] . "<br>";
    echo $obj->emails[1] . "<br>";
    echo sizeof($obj->emails);

?>