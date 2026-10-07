<?php
function urlap(){
    return '<form action="'.uri(3).'" method="post">
        <label for="nev">Név</label>
        <input type="text" name="nev" id="nev" class="form-control">
        <label for="cegnev">Cégnév:</label>
        <input type="text" name="cegnev" id="cegnev" class="form-control">
        <label for="szoveg">Szöveg</label>
        <textarea name="szoveg" id="szoveg" rows="4" columns="50" class="form-control"></textarea>
        <button type="submit" name="submit" class="btn btn-primary mt-2">Mentés</button>
    </form>';
}

function feldolgozas(){
    //phpinfo(32);
    
}
?>