<?php
//Szöveg hossza
echo strlen("Hello Bigany")."<br>";
//Szavak száma
echo str_word_count("Hello Bigany")."<br>";
//Tömböt ad vissza ami a szavakat tartalmazza
var_dump(str_word_count("Hello Bigany",1));
var_dump(str_word_count("Hello Bigany",2));
//Substring benne van-e a stringben
echo "<br> Substring: ";
var_dump (strpos("Hello cibbony","Hell"));
var_dump (strpos("Hello cibbony","sem"));
//String kezdete
echo "<br>string kezdete és vége:  ";
var_dump(str_starts_with("Hello","Hell"));
//String vége
var_dump(str_ends_with("Hello","lo"));



?>