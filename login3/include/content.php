<?php
function content()
{
    global $url;

    echo "<h1>Üdv kishaver!</h1>";
    echo '<form method="post" action="' . $url . '">';
    echo '<button type="submit" name="kilepes">Kilépés</button><br>';
    echo '</form>';
    echo '<a href="' . $url . '">Katt ide!</a>';
}

?>