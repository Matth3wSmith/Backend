<?php
switch ($_GET["menu"] ?? 0) {
    case 1:
    default:
        include("include/urlap.php");
        $mainContent = urlapHtml();
        feldolgozas();
        break;
    case 2:
        include("include/tablazat.php");
        $mainContent = tablazat();
        break;
}
?>