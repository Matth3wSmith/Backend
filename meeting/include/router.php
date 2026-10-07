<?php

switch($_GET['menu'] ?? 0){
    case 1:
    default:
        include("include/fooldal.php");
        $mainContent = fooldal();
        break;
    case 2:
        include("include/programok.php");
        $mainContent = programok();
        break;
    case 3:
        include("include/urlap.php");
        $mainContent = urlap();

        if(isset($_POST["submit"])){
            $szoveg = str_replace(["\r\n","\n","\r"]," ",$_POST["szoveg"]);
            $adat = $_POST["nev"].";".$_POST["cegnev"] . ";" . $szoveg . PHP_EOL;
            file_put_contents("save.txt", $adat, FILE_APPEND);
            header("location:".uri(3));
            exit;
        }

        break;
}

?>