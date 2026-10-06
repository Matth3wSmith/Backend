<?php
$honap = 10;
honapNeve($honap);
function honapNeve2($honap)
{
    switch ($honap) {
        case "Január":
            echo 1;
            break;
        case "Február":
            echo 2;
            break;
        case "Március":
            echo 3;
            break;
        case "Április":
            echo 4;
            break;
        case "Május":
            echo 5;
            break;
        case "Június":
            echo 6;
            break;
        case "Július":
            echo 7;
            break;
        case "Augusztus":
            echo 8;
            break;
        case "Szeptember":
            echo 9;
            break;
        case "Október":
            echo 10;
            break;
        case "November":
            echo 11;
            break;
        case "December":
            echo 12;
            break;
        default:
            echo "Nincs ilyen hónap";
            break;
    }
}
function honapNeve($honap)
{
    switch ($honap) {
        case 1:
            echo "Január";
            break;
        case 2:
            echo "Február";
            break;
        case 3:
            echo "Március";
            break;
        case 4:
            echo "Április";
            break;
        case 5:
            echo "Május";
            break;
        case 6:
            echo "Június";
            break;
        case 7:
            echo "Július";
            break;
        case 8:
            echo "Augusztus";
            break;
        case 9:
            echo "Szeptember";
            break;
        case 10:
            echo "Október";
            break;
        case 11:
            echo "November";
            break;
        case 12:
            echo "December";
            break;
        default:
            echo "Nincs ilyen hónap";
            break;
    }
}
?>