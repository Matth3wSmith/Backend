<?php
function urlap(){
    $szoveg = "";
    $szoveg .= '<form action="'.uri(3).'" method="post">';
    $szoveg .= '<label>Add meg a neved</label>';
    $szoveg .= '<input class="form-control type="text" name="nev">';
    $szoveg .= '<label>Add meg az email címed</label>';
    $szoveg .= '<input class="form-control type="text" name="email">';
    $szoveg .= '<label>Add meg a szöveged</label>';
    $szoveg .= '<textarea class="form-control type="text" name="szoveg" rows="4" cols="50"></textarea>';
    $szoveg .= '<button type="submit" name="adatMentes" class="btn btn-primary mt-2">Mentés</button>';
    $szoveg .= '</form>';
    return $szoveg;
}
function feldolgozas(){
        if(isset($_POST["adatMentes"])){
            $szoveg = str_replace(["\r\n","\n","\r"], "\\n",$_POST['szoveg']);
            file_put_contents('save.txt', $_POST['nev'] .";". $_POST['email'] . ';'. $szoveg  . PHP_EOL, FILE_APPEND);
            header("location:". uri(3));
            exit();
            ///phpinfo(32);
        }
    }
?>