<?php
if (isset($_POST['egyuttes']))  {
    // Fájlba írás PHP-val (hozzáfűzés)
    file_put_contents('egyuttesek.txt', $_POST['egyuttes'] ." ". date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']) . PHP_EOL, FILE_APPEND);
    echo "Fájl sikeresen elmentve!";
}
?>