<!--Nomor 9-->
<?php
// Membuat array dengan nama dan umur
$data = [
    ["nama" => "Shaffa", "umur" => 20],
    ["nama" => "Ambatron", "umur" => 30],
    ["nama" => "Rusdi", "umur" => 28],
    ["nama" => "Bangkit", "umur" => 35],
    ["nama" => "Devan", "umur" => 40],
    ["nama" => "Eka", "umur" => 22],
    ["nama" => "Fuad", "umur" => 29],
    ["nama" => "Gilang", "umur" => 32],
    ["nama" => "Hideung", "umur" => 27],
    ["nama" => "Iwan", "umur" => 31],
    ["nama" => "Jarwo", "umur" => 38],
    ["nama" => "Kakap", "umur" => 26],
    ["nama" => "Lesti", "umur" => 33],
    ["nama" => "Mawar", "umur" => 34],
    ["nama" => "Nami", "umur" => 36]
];

// Konversi array ke JSON
$json_data = json_encode($data);

// Tampilkan JSON
echo $json_data;
?>