<?php
    // Bikin Variable
    $Mahasiswa = [
        "nama" => "Wahyu",
        "umur" => "19",
        "alamat" => "Medan"
    ];

    echo $Mahasiswa["nama"];
    foreach ($Mahasiswa as $mhs) {
        echo $mhs . "<br>";
    }
?>