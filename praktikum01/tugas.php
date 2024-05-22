<?php
    // Bikin Nilai 1
    $Nilai1 = ["id" => 1, "Nim" => "01101293", "Uas" => "90", "Uts" => "96", "Tugas" => "96"];
    $Nilai2 = ["id" => 2, "Nim" => "01101254", "Uas" => "86", "Uts" => "87", "Tugas" => "97"];
    $Nilai3 = ["id" => 3, "Nim" => "01101276", "Uas" => "79", "Uts" => "100", "Tugas" => "98"];
    $Nilai4 = ["id" => 4, "Nim" => "01101223", "Uas" => "89", "Uts" => "99", "Tugas" => "99"];

    //Buat array multi
    $kumpulan_nilai = [$Nilai1, $Nilai2, $Nilai3, $Nilai4];   
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Tugas!</title>
  </head>
  <body>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nim</th>
      <th scope="col">Tugas</th>
      <th scope="col">Uts</th>
      <th scope="col">Uas</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($kumpulan_nilai as $nilai): ?>
        <tr>
            <td> <?php echo $nilai["id"]; ?> </td>
            <td> <?php echo $nilai["Nim"]; ?> </td>
            <td> <?php echo $nilai["Tugas"]; ?> </td>
            <td> <?php echo $nilai["Uts"]; ?> </td>
            <td> <?php echo $nilai["Uas"]; ?> </td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>
  </body>
</html>