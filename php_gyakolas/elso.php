<?php
    echo "<h1>Hello world!</h1>";
    echo "valami";
    echo "valami" . "más <br>";

    $alma = "Jonatán";
    $Alma = "Idared";
    $korte = "Vilmos";

    echo $korte . " " . $alma . "<br>";

    $korte = 3;
    $alma = false;

    echo $korte . " " . $alma . "<br>";

    var_dump($korte);
    var_dump($alma);
    var_dump($Alma);

    $tomb = [];
    var_dump($tomb);
    $tomb[] = 12;
    $tomb[] = 15;
    $tomb[] = "15";
    //asszociatív tömb
    $tomb["geza"] = "Kresz";
    $tomb["szoveg"] = "almafa";

    $tomb["geza"] = [4,2, "Mézga" => "Géza"];
    //Formázattan kiíratás
    echo "<pre>";
    var_dump($tomb);
    echo "</pre>";

    echo "Kedvenc gyümölcs: $Alma";

    for($i=0; $i<10; $i++){
        echo $i ."<br>";
    }

    $i = 0;
    while($i < 5) {
        echo $i ."<br>";
        $i++;
    }

    do {
    echo "$i<br>";
    $i--;
    }
    while($i > 0);
    echo "foreach<br>";
    foreach($tomb as $ertek) {
        echo gettype($ertek)."<br>";
        if(gettype($ertek) != "array") {
            echo $ertek ."<br>";
        }
    }




?>