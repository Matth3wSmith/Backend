<?php

function urlap(){
    return '
        <form action="'.uri(3).'" method="post">
            <label for="nev">Név</label>
            <input type="text" name="nev" class="form-control" id="nev">
            <label for="uzenet">Üzenet</label>
            <textarea name="uzenet" id="uzenet" class="form-control" rows="4" cols="50"></textarea>
            <button type="submit" name="submit" class="btn-primary btn mt-2">Mentés</button>
        </form>';
}

function feldolgozas(){
    if(isset($_POST["submit"])){
        $szoveg = str_replace(["\r\n","\n","\r"],"<br>",$_POST["uzenet"]);
        file_put_contents("adatok.txt",$_POST["nev"].";". $szoveg . PHP_EOL,FILE_APPEND);
        header("location:".uri(3));
        exit();
    }
}

?>