<?php
/** @var string $mainContent */
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oldal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <?php include("include/navbar.php"); ?>
            </div>
            <div class="col-9">
                <?php echo $mainContent; ?>

            </div>
        </div>
        <footer class="row">Kokszos Károj since 1997 &copy;</footer>
    </div>
</body>

</html>