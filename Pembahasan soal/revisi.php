<?php
// ini memanggil file php yang ada function-nya
include 'function.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisi Acakaduk</title>
</head>

<body>
    <a href="?bangun=kubus">Kubus</a><br>
    <a href="?bangun=balok">balok</a><br>
    <a href="?bangun=limas">Limas Segi Empat</a><br>
    <a href="?bangun=tabung">Tabung</a><br>
    <a href="?bangun=bola">Bola</a><br>
    <form action="?bangun=<?= isset($_GET['bangun']) ? $_GET['bangun'] : '' ?>" method="post">
        <?php
        if (isset($_GET['bangun']) && $_GET['bangun'] == 'kubus') {
        ?>
            <br><br>
            <!-- # codenya... -->
            <label for="">Kubus</label><br>
            <input type="number" step="any" name="kubus">

        <?php
        } else if (isset($_GET["bangun"]) && $_GET["bangun"] == "balok") {
        ?>
            <br>
            <label for="">Panjang</label><br>
            <input type="number" name="panjang" id=""><br>
            <label for="">Lebar</label><br>
            <input type="number" name="lebar" id=""><br>
            <label for="">Tinggi</label><br>
            <input type="number" name="tinggi" id=""><br>

        <?php
        } else if (isset($_GET["bangun"]) && $_GET["bangun"] == "limas") {
        ?>
            <label for="">Sisi</label>
            <input type="number" name="sisi" step="any">
            <label for="">Tinggi</label>
            <input type="number" name="tinggi" step="any">


        <?php
        } else if (isset($_GET['bangun']) && $_GET['bangun'] == "bola") {
        ?>
            <label for=""></label><br>
        <?php
        }
        ?>
        <br><br>
        <button method="post">Hitung</button><br><br>
    </form>

    <?php

    //    INI HITUNG KUBUS
    $bangun = $_GET['bangun'] ?? '';
    switch ($_GET["bangun"]) {
        case "kubus":
            $sisi = $_POST["kubus"] ?? 0;
            $vol = volume_kubus($sisi);
            $lp = lp_kubus($sisi);
            echo "kubus = $sisi <br>";
            echo "<strong>(sisi^3) =" . round($vol, 3) . "</strong><br>";
            echo "<strong> (6 x s^2) =" . round(6 * $lp, 2) . "</strong><br>";
            break;
    }

    // INI HITUNG BALOK
    $bangun = $_GET["bangun"] ?? "";
    switch ($_GET["bangun"]) {
        case "balok":
            $panjang = $_POST["panjang"] ?? 0;
            $lebar = $_POST["lebar"] ?? 0;
            $tinggi = $_POST["tinggi"] ?? 0;

            echo "Panjang = $panjang<br>";
            echo "Lebar = $lebar<br>";
            echo "Tinggi = $tinggi<br>";

            echo "volumenya =" . round($panjang * $lebar * $tinggi);
            echo "<strong> (2x(p x l + p x t + l x t)) = " . round(2 * ($panjang * $lebar + $panjang * $tinggi + $lebar * $tinggi)) . "</strong>";
            break;
    }

    // INI HITUNG LIMAS
    $bangun = $_GET['bangun'] ?? '';
    switch ($_GET['bangun']) {
        case "limas";
            $sisi = $_POST['sisi'] ?? 0;
            $tinggi = $_POST['tinggi'] ?? 0;
            $vol = volume_limas($sisi, $tinggi);

            echo "Sisi = $sisi<br>";
            echo "tinggi = $tinggi<br>";
            echo 'Ini hasil perhitungan limas 1/3 x Luas alas x tinggi :' . round(1 / 3 * pow($vol, 2) * $tinggi) . '';
    }

    ?>
</body>

</html>