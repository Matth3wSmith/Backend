<?php
if (isset($_POST["kilepes"])) {
    session_destroy();
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit;
}

if (isset($_POST['user']) && isset($_POST['jelszo'])) {
    $login = $_POST['user'] === "admin" && $_POST['jelszo'] === "admin";

    if ($login) {
        $_SESSION["use"] = htmlspecialchars($_POST['user']);
        $_SESSION["belepve"] = true;
        header("Location: " . $_SERVER['REQUEST_URI']);
        exit;
    }

}

?>