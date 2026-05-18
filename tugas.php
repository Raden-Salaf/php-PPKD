<?php

if (isset($_POST['tampil'])) {
    $kubus = $_POST['kubus'];
    // $angka = $_POST['angka'];
    $volume = pow($kubus, 3);
    $luas_permukaan = 6 * pow($kubus, 2);

    echo "ini hasil perhitungan volume :" . $volume . "<br>";
    echo "ini hasil perhtingan luas volume :"  . $luas_permukaan;
};
if (isset($_POST['tampil'])) {
    $kubus = $_POST['kubus'];
    // $angka = $_POST['angka'];
    $volume = pow($kubus, 3);
    $luas_permukaan = 6 * pow($kubus, 2);

    echo "ini hasil perhitungan volume :" . $volume . "<br>";
    echo "ini hasil perhtingan luas volume :"  . $luas_permukaan;
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

</body>

</html>