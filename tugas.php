<?php

// Rumus Kubus
if (isset($_POST['tampil'])) {
    $kubus = $_POST['kubus'];
    // $angka = $_POST['angka'];
    $volume = pow($kubus, 3);
    $luas_permukaan = 6 * pow($kubus, 2);

    echo "ini hasil perhitungan volume :" . $volume . "<br>";
    echo "ini hasil perhtingan luas volume :"  . $luas_permukaan;
};

// Rumus Balok
if (isset($_POST['tampil_balok'])) {
    
    // $angka = $_POST['angka'];
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $tinggi = $_POST['tinggi'];
    $volume = $panjang * $lebar * $tinggi;
    $luas_permukaan = 2 * (($panjang * $lebar) + ($panjang * $tinggi) + ($lebar * $tinggi));

    echo "ini hasil perhitungan volume Balok :" . $volume . "<br>";
    echo "ini hasil perhtingan luas volume Balok :"  . $luas_permukaan;
};

// Rumus Limas Segi Empat
if (isset($_POST['tampil_limas_segiempat'])) {
    $tinggi_limas_segiempat = $_POST['tinggi_limas_segiempat'];
    $sisi = $_POST['sisi_limas_segiempat'];
    $luas_alas = pow($_POST['sisi_limas_segiempat'], 2);
    $volume_limas_segiempat = (1/3) * $luas_alas * $tinggi_limas_segiempat;

    echo "ini hasil perhitungan volume Limas Segi Empat :" . $volume_limas_segiempat . "<br>";
};

// Rumus Bola
if (isset($_POST['tampil_bola'])) {
    $jari_jari = $_POST['jari_jari'];
    $volume_bola = (4/3) * PI() * pow($jari_jari, 3);
    $luas_permukaan_bola = 4 * M_PI * pow($jari_jari, 2);

    echo "ini hasil perhitungan volume Bola :" . $volume_bola . "<br>";
    echo "ini hasil perhitungan luas permukaan Bola :" . $luas_permukaan_bola;
};



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas acakaduk</title>
</head>

<body>
    <h1>Ini menghitung rumus KUBUS</h1>
    <form action="" method="post">
        <label for="" name="kubus">cari volumenya</label><br>
        <input type="number" name="kubus" id="" placeholder="rumusnya S³"><br> <br>
        <!-- <label for="">angka</label><br>
        <input type="number" name="angka" id=""><br> <br> -->
        <!-- <label for="">Sisi 2</label>
        <input type="number" name="sisi2" id="">
        <label for="">Sisi 3</label>
        <input type="number" name="sisi3" id=""> -->
        <button type="submit" name="tampil">menghitung rumus kubus</button>
    </form>

    <h1>Ini menghitung rumus Balok</h1>
    <form action="" method="post">
        <!-- <label for="" name="balok">cari volumenya</label><br>
        <input type="number" name="balok" id="" placeholder="P x L x T"><br> <br> -->
        <label for="">Panjang</label><br>
        <input type="number" name="panjang" id=""><br> <br>
        <label for="">Lebar</label><br><br>
        <input type="number" name="lebar" id=""> <br><br>
        <label for="">Tinggi</label><br><br>
        <input type="number" name="tinggi" id=""> <br><br>
        <button type="submit" name="tampil_balok">menghitung rumus balok</button>
    </form>

    <h1>Menghitung Limas Segi Empat</h1>
    <form action="" method="post">
        <label for="">sisi</label><br>
        <input type="number" name="sisi_limas_segiempat" id=""><br> <br>
        <!-- <label for="">Lebar</label><br><br>
        <input type="number" name="lebar_limas_segiempat" id=""> <br><br> -->
        <label for="number">Tinggi</label><br><br>
        <input type="text" name="tinggi_limas_segiempat" id=""><br><br>
        <button type="submit" name="tampil_limas_segiempat">menghitung rumus limas segi empat</button>
        
    </form>

    <h1>Menghitung Bola</h1>
    <form action="" method="post">
        <label for="" name="jari_jari">Jari-jari</label><br>
        <input type="number" name="jari_jari" id="" placeholder="rumusnya 4/3 * π * r³"><br> <br>
        <button type="submit" name="tampil_bola">menghitung rumus bola</button>
    </form>

</body>

</html>