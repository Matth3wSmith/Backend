<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Űrlap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    </style>
</head>

<body>
    <div class=" container">
        <div class="row ">
            <div class="col-4"></div>
            <div class="col-6">
                <div class="row">
                    <div class="col border text-center">
                        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
                            <h1>Űrlap</h1>
                            <div>
                                <label for="nev" class="">Név:</label>
                                <input type="text" name="nev" id="nev" class="m-2 bg-success text-white">
                            </div>
                            <div>
                                <label for="email" class="">Email:</label>
                                <input type="text" name="email" id="email" class="bg-success text-white">
                            </div>
                            <div>
                                <label for="file" class="">Fájl:</label>
                                <input type="file" name="file" id="file" class="bg-success text-white">
                            </div>
                            <div>
                                <button type="submit" class="mt-1 btn btn-success" onclick="bekuld()">Beküld</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col border border-warning text-warning">
                        <p>Név: <span id="nevAdat" class="text-danger"></span></p>
                        <p>Email: <span id="emailAdat" class="text-danger"></span></p>
                    </div>
                </div>



            </div>
            <div class="col-4"></div>
        </div>

    </div>
    <?php
    if (isset($_POST["nev"])) {
        echo htmlspecialchars($_POST["nev"]) . "<br>";
    }
    if (isset($_POST["email"])) {
        echo htmlspecialchars($_POST["email"]) . "<br>";
    }

    echo "<pre>";
    var_dump($_GET);
    var_dump($_POST);
    echo "</pre>";

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if (isset($_FILES["file"])) {
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;

            //Mentés nagyobb és kisebb képként
            echo "<br>".$_FILES['file']['tmp_name']."<br>";
            img()
            
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        //Check file size
        if ($_FILES["file"]["size"] > 50000000) {
            echo "Túl nagy a fájl mérete";
            $uploadOk = 0;
        }

        //engedélyezett formátumok
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Csak JPG, JPEG, PNG és GIF engedélyezett";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

    }


    phpinfo(32);
    function img($eredetiKepNev,$eredetiKepEleres,$width, $er_width, $er_height, $eleres){
            $height = $width * $er_height / $er_width;
            $eredeti = imagecreatefromjpeg($eredetiKepEleres);
            $target = $eleres."/".basename($eredetiKepNev);
            $canvas = imagecreatetruecolor($width, $height);
            imagecopyresampled($canvas,$eredeti,0,0,0,0,$width,$height,$er_width,$er_height);
            imagejpeg($canvas,$target);
    }
    ?>


</body>
<script>
    function bekuld() {
        document.querySelector("#nevAdat").innerHTML = document.querySelector("#nev").value;
        document.querySelector("#emailAdat").innerHTML = document.querySelector("#email").value;

    }
</script>

</html>