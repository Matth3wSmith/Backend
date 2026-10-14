<?php
/** @var string $mainContent */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Becenév</title>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap Navigációs Weboldal</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <style>
            /* Sima görgetés beállítása az egész oldalra */
            html {
                scroll-behavior: smooth;
            }

            /* A szekciók formázása, hogy a rögzített menü ne takarja ki a címet, és kitöltsék a képernyőt */
            section {
                padding-top: 80px;
                /* Hely a menünek */
                min-height: 100vh;
                /* Minden szekció legalább képernyő méretű legyen */
                padding-bottom: 50px;
            }

            /* Egyedi háttérszínek a szekciók elkülönítéséhez */
            #kezdo {
                background-color: #f8f9fa;
            }

            #rolunk {
                background-color: #e9ecef;
            }

            #kapcsolat {
                background-color: #dee2e6;
            }
            .gradient-header {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: #ffffff;
        }

        .th-gradient-1 {
            background: linear-gradient(90deg, #4f46e5 0%, #3b82f6 100%) !important;
            color: white !important;
        }

        .th-gradient-2 {
            background: linear-gradient(90deg, #0d9488 0%, #10b981 100%) !important;
            color: white !important;
        }

        .th-gradient-3 {
            background: linear-gradient(90deg, #d97706 0%, #f59e0b 100%) !important;
            color: white !important;
        }

        .custom-card {
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.95);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .table > :not(caption) > * > * {
            padding: 1.25rem 1.5rem;
        }
        </style>
    </head>

<body data-bs-spy="scroll" data-bs-target="#fejlec-menu" data-bs-offset="90" tabindex="0">

    <?php include("include/navbar.php") ?>

    <?php echo $mainContent?>
</body>

</html>