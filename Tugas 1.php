<?php

$namaPanggilan = "Hanif";
$tanggalHariIni = date("j");

if (strlen($namaPanggilan) == ($tanggalHariIni - 2)) {
    echo "Berhasil";
} elseif (strlen($namaPanggilan) < $tanggalHariIni) {
    echo "Sedikit lagi";
} else {
    echo "Coba lagi";
}

echo "\n\n";

$anggotaKelompok = [
    ["nama" => "Yodhimas Geffananda", "nim" => "56734"],
    ["nama" => "Muhammad Farhan Nugrohor", "nim" => "69032"],
    ["nama" => "Zefanya Diego", "nim" => "45398"],
    ["nama" => "Bima Bayu Sofana", "nim" => "98745"],
    ["nama" => "Muhammad Rizky Aziz", "nim" => "29456"]
];

foreach ($anggotaKelompok as $anggota) {
    $nama = $anggota["nama"];
    $nim = $anggota["nim"];
    $peran = ($nim % 2 == 0) ? "Back-end Developer" : "Front-end Developer";
    echo "Nama: $nama, NIM: $nim, Peran: $peran\n";
}

echo "\n";

$kotaKKN = [
    "Ponororgo",
    "Madiun",
    "Jambi",
    "Surabaya",
    "Riaur",
    "Lampung",
    "Nusa Tenggara Barat",
    "Samarinda",
    "Papua",
    "Malang"
];

$namaDepan = str_split($namaPanggilan);
$tujuanKKN = "Jawa Timur"; // Jika tidak ditemukan kota tujuan

foreach ($namaDepan as $huruf) {
    foreach ($kotaKKN as $kota) {
        if (strtolower(substr($kota, 0, 1)) === strtolower($huruf)) {
            $tujuanKKN = $kota;
            break 2;
        }
    }
}

echo "Nama: $namaPanggilan\n";
echo "Tujuan KKN: $tujuanKKN\n";

?>
