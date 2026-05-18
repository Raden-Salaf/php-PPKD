<?php

// if ($_SERVER["REQUEST_METHOD"] == "POST") 
// if (isset($_POST["tampil"]) && isset($_POST['nim']) && isset ($_POST['alamat'])) { -> ini ribet
if (isset($_POST["tampil"])) {
    $name = $_POST["name"];
    $nim = $_POST["nim"];
    $alamat = $_POST["alamat"];
    $angka1 = floatval($_POST['angka1'] ?? 0);
    $angka2 = floatval($_POST['angka2'] ?? 0);
    // $perkalian = $angka1 * $angka2;
    // $pembagian = $angka1 / $angka2;
    // $penjumlahan = $angka1 + $angka2;
    // $pengurangan = $angka1 - $angka2;
    $operator = $_POST['operator'];
    function hasil_perhitungan($angka1, $angka2, $operator)
    {
        switch ($operator) {
            case 'perkalian':
                return 'hasil perkalian adalah :' . $angka1 * $angka2;

            case 'pembagian':
                return 'hasil pembagian adalah :' . $angka1 / $angka2;

            case 'penjumlahan':
                return 'hasil penjumlahan adalah :' . $angka1 + $angka2;

            case "pengurangan":
                return 'hasil pengurangan :' . $angka1 - $angka2;

            default:
                return 'tidak ada lagi aksi';
                break;
        }
    }
    // $hasil = $angka1 * $angka2;

    echo "Nama Saya adalah :" . $name . "Nim Saya :" . $nim . "Alamat Saya di : " . $alamat . "Hasilnya adalah : ";

    echo hasil_perhitungan($angka1, $angka2, $operator);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <label for="">Nama</label><br>
        <input type="text" name="name" id=""><br>
        <label for="">NIM</label><br>
        <input type="number" name="nim" id=""><br>
        <label for="">Alamat</label> <br>
        <textarea type="text" name="alamat" cols="30" rows="5" id=""></textarea> <br>
        <label for="">Angka 1</label><br>
        <input type="number" name="angka1" id=""><br>
        <label for="">Angka 2</label><br>
        <input type="text" name="angka2" id=""><br>
        <label for="">Operator</label><br>
        <select name="operator">
            <option value="perkalian">Perkalian</option>
            <option value="pembagian">Pembagian</option>
            <option value="penjumlahan">Penjumlahan</option>
            <option value="pengurangan">Pengurangan</option>
        </select><br>
        <button type="submit" name="tampil">Tampilkan Data</button>
    </form>

</body>

</html>