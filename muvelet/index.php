<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
        <h1>Űrlap</h1>
        <div>
            <label for="szam1" class="">Első szám:</label>
            <input type="text" name="szam1" id="szam1" class="m-2 bg-success text-white">
        </div>
        <div>
            <label for="muvelet" class="">Művelet:</label>
            <input type="text" name="muvelet" id="muvelet" class="bg-success text-white">
        </div>
        <div>
            <label for="szam2" class="">Második szám:</label>
            <input type="text" name="szam2" id="szam2" class="bg-success text-white">
        </div>
        <div>
            <button type="submit" class="mt-1 btn btn-success" >Beküld</button>
        </div>
    </form>
</body>
<?php
    $muveletek = ["+", "*" , "-", "/"];
    if (isset($_POST["szam1"]) && isset($_POST["szam2"]) && isset($_POST["muvelet"])) {
        echo htmlspecialchars($_POST["szam1"]) . "<br>";
        echo htmlspecialchars($_POST["szam1"]) . "<br>";
        echo htmlspecialchars($_POST["muvelet"]) . "<br>";

        if(!is_nan(intval($_POST["szam1"])) && !is_nan(intval($_POST["szam2"]))) {
            $szam1 = intval($_POST["szam1"]);
            $szam2 = intval($_POST["szam2"]);
            if(in_array($_POST["muvelet"], $muveletek)) {
                $muvelet = $_POST["muvelet"];    
                
                $file = fopen("megoldas.txt","w");
                if($muvelet == "+"){
                   fwrite($file,$szam1.$muvelet.$szam2."=".$szam1+$szam2);
                   echo $szam1.$muvelet.$szam2."=".$szam1+$szam2;
                }else if($muvelet == "-"){
                   fwrite($file,$szam1.$muvelet.$szam2."=".$szam1-$szam2);
                   echo $szam1.$muvelet.$szam2."=".$szam1-$szam2;
                }if($muvelet == "/"){
                   fwrite($file,$szam1.$muvelet.$szam2."=".$szam1/$szam2);
                   echo $szam1.$muvelet.$szam2."=".$szam1/$szam2;
                }
                if($muvelet == "*"){
                   fwrite($file,$szam1.$muvelet.$szam2."=".$szam1*$szam2);
                   echo $szam1.$muvelet.$szam2."=".$szam1*$szam2;
                }
                fclose($file);

            }   
            else{
                echo "Helytelen művelet.";
            }
    
        } 
        else{
            echo "Nem számot adtál ";
        }
    }
?>

</html>