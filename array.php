<!--Nomor 9-->
<?php
// Membuat array dengan nama dan umur
$data = array(
    array("nama" => "Shaffa", "umur" => 20),
    array("nama" => "Ambatron", "umur" => 30),
    array("nama" => "Rusdi", "umur" => 28),
    array("nama" => "Bangkit", "umur" => 35),
    array("nama" => "Devan", "umur" => 40),
    array("nama" => "Eka", "umur" => 22),
    array("nama" => "Fuad", "umur" => 29),
    array("nama" => "Gilang", "umur" => 32),
    array("nama" => "Hideung", "umur" => 27),
    array("nama" => "Iwan", "umur" => 31),
    array("nama" => "Jarwo", "umur" => 38),
    array("nama" => "Kakap", "umur" => 26),
    array("nama" => "Lesti", "umur" => 33),
    array("nama" => "Mawar", "umur" => 34),
    array("nama" => "Nami", "umur" => 36)
);

// Konversi array ke JSON
$json_data = json_encode($data);

// Tampilkan JSON
echo $json_data;
?>