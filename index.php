<!DOCTYPE html>
<html lang="hu">
    <?php
if(isset($_POST["submit"])){
    //[YYYY-MM-DD HH:MM:SS] | Név: <név> | Üzenet: <üzenet> + soremelés (PHP_EOL).
    $szoveg = "[".date("Y-m-d H:i:s",$_SERVER["REQUEST_TIME"])."] | Név: ".$_POST["nev"]." | Üzenet: ".str_replace(["\r\n","\n","\r"],"<br>",$_POST["uzenet"]).PHP_EOL;
    file_put_contents("hiba.txt", $szoveg, FILE_APPEND);
    header("location:".$_SERVER["PHP_SELF"]);
    exit();
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helpdesk - hibajegyek</title>
    <!-- Bootstrap 5 CSS betöltése -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 2rem;
        }
        .main-container {
            max-width: 900px;
            background-color: white;
            padding: 2rem;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
        }
        .card-header {
            background-color: #fcfcfc;
            color: #555;
        }
        .text-label {
            color: #6c757d;
        }
    </style>
</head>
<body>
<div class="container main-container">
    
    <h2 class="mb-4 text-dark">Helpdesk - hibajegyek</h2>

    <!-- 1. Kártya: Környezeti adatok -->
    <div class="card mb-4">
        <div class="card-header">
            Környezeti adatok
        </div>
        <div class="card-body">
            <p class="mb-1 text-label">Látogató IP-címe: <strong class="text-dark"><?php echo $_SERVER["REMOTE_ADDR"] ?></strong></p>
            <p class="mb-0 text-label">Kérés ideje: <strong class="text-dark"><?php echo date("Y-m-d H:i:s",$_SERVER["REQUEST_TIME"]) ?></strong></p>
        </div>
    </div>

    <!-- 2. Kártya: Új hibajegy -->
    <div class="card mb-4">
        <div class="card-header">
            Új hibajegy
        </div>
        <div class="card-body">
            <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
                <div class="mb-3">
                    <label for="bejelentoNeve" class="form-label text-label">Bejelentő neve</label>
                    <input type="text" class="form-control" id="bejelentoNeve" name="nev">
                </div>
                <div class="mb-3">
                    <label for="hibaLeirasa" class="form-label text-label">Hiba / Üzenet leírása</label>
                    <textarea class="form-control" id="hibaLeirasa" rows="3" name="uzenet"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Hibajegy leadása</button>
            </form>
        </div>
    </div>

    <!-- 3. Kártya: Eddigi hibajegyek -->
    <div class="card mb-2">
        <div class="card-header">
            Eddigi hibajegyek
        </div>
        <div class="card-body">
            <div class="border rounded p-2 text-label" style="background-color: #fdfdfd;">
                <ol class="list-group list-group-numbered">
                    <?php
                    if(file_exists("hiba.txt")){
                        $adatok = file("hiba.txt");
                        foreach($adatok as $sor){
                            echo "<li>";
                            echo $sor;
                            echo "</li>";
                        }
                    }
                        
                    ?>
                </ol>
            </div>
        </div>
    </div>

</div>


<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>