<?php 
// Bikin Variable Nilai
$grade = "E";
// Bikin Predikat
$predikat;

// Bikin Percabangan Switch
switch ($grade) {
    case "A":
        $predikat = "Sangat Baik";
        break;
    case "B":
        $predikat = "Baik";
        break;
    case "C":
        $predikat = "Cukup";
        break;
    case "D":
        $predikat = "Kurang";
        break;
    case "E":
        $predikat = "Buruk";
        break;
    default:
        $predikat = "Nilai Tidak Ditemukan";
        break;
}

echo "Predikat : " . $predikat;
?>