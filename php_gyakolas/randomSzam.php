<?php
function randomTomb($kezd, $veg, $db){
    $szamok = [];
    for ($i = 0; $i < $db; $i++) {
        $szamok[] = rand($kezd, $veg);
    }
    return $szamok;
}
var_dump(randomTomb(1,10,10));
?>