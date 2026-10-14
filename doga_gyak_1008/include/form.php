<?php

function urlap(){
    return '<form action="'.uri(3).'" method="post">
                    <label for="nev">Név:</label>    
                    <input type="text" class="form-control" name="nev">
                    <label for="uzenet">Üzenet:</label>    
                    <textarea type="text" class="form-control" name="uzenet" rows="4" cols="50"></textarea>
                    <button type="submit" class="btn btn-primary mt-2" name="submit">Mentés</button>
                </form>';

}


function feldolgozas(){
    if(isset($_POST["submit"])){
        $szoveg = str_replace(["\r\n","\n","\r"],"\\n",$_POST["uzenet"]);
        file_put_contents("save.txt", $_POST["nev"].";". $szoveg. PHP_EOL, FILE_APPEND);
        header("location:".uri(3));
        exit;
    }
}
?>