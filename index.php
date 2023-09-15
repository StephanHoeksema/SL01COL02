<?php

$persons =
    [
        "JeRiCan" => [
            "rickb" => ["hobby" => "php, gamen"],
            "ricks" => ["hobby" => "gamen, voetbal"],
            "djimairo" => ["hobby" => "vissen"]],
        "Keep" => [
            "kim" => ["hobby" => "gamen"],
            "ebram" => ["hobby" => "php, gamen"],
            "emma" => ["hobby" => "php, gamen"],
            "pedro" => ["hobby" => "php, gamen"]
        ]
    ];

//die(var_dump($persons));
//echo "$persons[0]";
foreach ($persons as $key => $value) {
    echo "<br><hr>Team: <b>" .$key . "</b><br><hr>";
    //die(var_dump($value));
    foreach($value as $name => $hobby) {
         echo $name . "<br>";

    };
}