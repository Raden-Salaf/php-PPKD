<?php
// cara memanggil fungsi dari luar
// include "";

// Kubus
function volume_kubus($kubus)
{
    return pow($kubus, 3);
}
function lp_kubus($kubus)
{
    return 6 * pow($kubus, 2);
}

// balok
function volume_balok($panjang, $lebar, $tinggi)
{
    return $panjang * $lebar + $tinggi;
}
function lp_balok($panjang, $lebar, $tinggi)
{
    return 2 * $panjang * $lebar + $panjang * $tinggi + $lebar + $tinggi;
}

// Limas
function volume_limas($sisi, $tinggi)
{
    return 1 / 3 * pow($sisi, 2) * $tinggi;
}
