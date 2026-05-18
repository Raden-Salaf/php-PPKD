<?php
const email = "bejopaijo@gmail.com";
const tel = "";

echo email;
define("nama", "Bejo");

echo "<br>"; // -> Untuk teks space line kebawah
echo "<br>";
echo nama; // -> bisa dibilang pengganti variabel

echo "<br>";
$fruits = array("Apel", "Jeruk", "Mangga", "Sirsak", "Durian", "Semongko", "melon",); // -> Array
$mobil = array("Toyota", "Avanza", "Brio", "Fortuner", "Ferrari", "Mustang",);
echo "<br>";

// var_dump($fruits);
echo "<br>";
// var_dump($mobil);
echo "<br>";
echo "<br>";
echo $fruits["2"]; // -> Cara pemanggilan Array

echo "<br>";
array_push($fruits, "Quldi", "Anggur"); // -> Ini untuk menambahkan array dengan Inputan
echo "<br>";
foreach ($fruits as $key => $fruit) {
    #code nya....
    echo "Nama buah adalah   $fruit  <br>";
    // echo "Nama Buah adalah" . $fruit . "<br>";
}

echo $fruits["8"];

// Array Assosiative
/*Array asosiatif adalah struktur data yang menyimpan data dalam bentuk pasangan kunci-nilai (key-value). Alih-alih menggunakan angka indeks numerik seperti array biasa, array asosiatif menggunakan string atau label unik sebagai kunci untuk mengakses datanya */

$motorcycles = [[
    'Merek' => 'Supra',
    'Warna' => 'Pink',
    'Tahun' => 2019,
    'cc' => 300
], [
    'Merek' => 'Vario 150 old',
    'Warna' => 'Hijau Muda',
    'Tahun' => 2015,
    'cc' => 150
], [
    'Merek' => 'N-Max',
    'Warna' => 'Biru',
    'Tahun' => 2024,
    'cc' => 350
], [
    'Merek' => 'Genio',
    'Warna' => 'Merah',
    'Tahun' => 2019,
    'cc' => 150
], [
    'Merek' => 'Ninja',
    'Warna' => 'Hitam',
    'Tahun' => 2009,
    'cc' => 300
]];

// var_dump($motorcycles);

echo '<br>';

foreach ($motorcycles as $index => $motorcycle) {
    /* 
?>
    <ul>
        <li><?php echo "Nama Motor :" . $motorcycle['Merek'] ?></li>
        <li><?php echo "Tahun Rilis :" . $motorcycle['Tahun'] ?></li> -> Yang bisa diemplementasikan ke HTML
        <li><?php echo "warna Motor :" . $motorcycle['Warna'] ?></li>
        <li><?php echo "CC Motor :" . $motorcycle['cc'] ?></li>
    </ul>
<?php
*/

    // dibawah pake php langsung
    if ($index != 3) {
        # code...
        echo "<ul>
        <li>Nama Motor : " . $motorcycle["Merek"] . " </li>
        <li>Warna Motor : " . $motorcycle["Warna"] . " </li>
        <li>Tahun Motor : " . $motorcycle['Tahun'] . " </li>
        <li>CC Motor : " . $motorcycle['cc'] . " </li>
    </ul>";
    }
}

echo $motorcycles[2]["cc"];
echo "<br>";
echo $motorcycles[2]["Merek"];


//  < : lebih kecil dari...
//  > : lebih besar dari...
// <= : Lebih kecil sama dengan
// >= : Lebih besar sama dengan
// == : Samadengaan
// !==: Tidak Samadengan


echo "<br>";
echo "<br>";
$nama = "Bejo";
if ($nama == "Paijo") {
    echo "Bukan";
} else {
    echo "Benar";
}

echo "<br>";
echo "<br>";

$nilai = -18;
if ($nilai >= 90 && $nilai <= 100) {
    echo "A";
} elseif ($nilai >= 80 && $nilai <= 89) {
    echo "B";
} elseif ($nilai <= 79 && $nilai <= 0) {
    echo "C";
} else {
    echo "Koe ki mendem tah???";
}

echo "<br>";

$hasil = ($nilai >= 90 && $nilai <= 100) ? "A" : ($nilai >= 80 && $nilai <= 89 ? "B" : ($nilai >= 79 ? 'C' : 'Nilai tidaak diketahui'));

echo $hasil . "<br>";

$warna = "hijau";

switch ($warna) {
    case "biru":
        echo "Ini Warna Biru";
        break;
    case "orange":
        echo "Ini Warna Orange";
        break;
    case "hijau":
        echo "Ini Warna Hijau";
        break;
    case "pink":
        echo "Ini Warna Hijau";
        break;
    default:
        echo "Bukan Warna";
        break;
}

echo "<br>";

// Lopping atau perulangan = struktur kode yang digunakan untuk menjalankan blok kode selama
// kondisi tertentu terpenuhi

// for, while, do..while

// Ini For 
for ($i = 0; $i < 15; $i++) {
    # code...
    echo "Saya lagi belajar di PPKD Jakpus $i" . "<br>";
}

echo "<br>";

// while
$a = 1;
while ($a <= 10) {
    # code...
    echo "Ini angka ke $a" . "<br>";
    $a++;
}

echo "<br>";

$b = -1;
do {
    echo "Halo ke-$b" . "<br>";
    $b++;
} while ($b <= 20);

echo "<br>";
echo "<br>";
echo "<br>";


// Function : blok kode yang diberi nama, yang bisa dipanggil kapan saja untuk menjalankan tugas tertentu
// Menghindari perulangan kode (code reuse), memecah logika menjadi bagian terkecil 
// - array_push() , substr(), strln(), str_word_count(), ucfirst()

function nama_anda($nama, $usia)
{
    return "<br> Nama Anda adalah $nama, Usai anda sekarang adalah $usia Tahun . <br>";
}

nama_anda("Beti", 20) . "<br>";
nama_anda("Istrinya maskuh", 30) . "<br>";
nama_anda("Bejo", 18);

$string_name = "saya sedang belajar pemrogaman dasar dengan bahasa PHP";

echo substr($string_name, 5) . "<br>"; // -> menghapus isi teks bahkan spasi
echo strlen($string_name) . "<br>"; // jumlah huruf dalam kalimat
echo str_word_count($string_name) . "<br>"; // jumlah kata dalam kalimat
echo ucfirst($string_name) . "<br>"; // huruf awal itu kapital
echo ucwords($string_name) . "<br>"; // Uppercase
