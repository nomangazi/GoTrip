<?php
session_start();
require_once "../models/HeaderMeta.php";
require_once "../models/Preloader.php";
require_once "../models/Footer.php";
require_once "../config/database.php";

if (!isset($_SESSION['id'])) {
    header("Location: /gotrip");
}

$sql = "SELECT * FROM users WHERE id = {$_SESSION['id']}";

$userArr = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tag's -->
    <?= HeaderMeta::getMeta() ?>

    <!-- Fonts -->
    <?= HeaderMeta::getFonts() ?>

    <!-- CSS -->
    <?= HeaderMeta::getAssetsCss() ?>
    <link rel="shortcut icon" href="/gotrip/<?=$userArr[0]['img_url']?>" type="image/x-icon">
    <title><?= $_SESSION['name'] ? "{$_SESSION['name']} | GoTrip" : "GoTrip"; ?></title>

</head>

<body>

    <!-- Preloader -->
    <div class="preloader js-preloader">
        <?= Preloader::getLoader() ?>
    </div>

    <!-- Header Menu -->
    <header data-add-bg="bg-dark-1" class="header bg-green js-header bg-dark-1 text-white" data-x="header" data-x-toggle="is-menu-opened">
        <?= HeaderMeta::getMenu(); ?>
    </header>

    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Profile</h1>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <!-- JS -->
    <?= HeaderMeta::getAssetsJs() ?>

</body>

</html>