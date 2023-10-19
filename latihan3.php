<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasil Perhitungan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7Rxnatzjc-dSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php
    if (isset($_GET['angka']) && isset($_GET['hasil'])) {
        $angka = $_GET['angka'];
        $hasil = $_GET['hasil'];
        echo "<h1 class='text-center font-weight-bold small'>Hasil perhitungan untuk angka $angka adalah: $hasil</h1>";
    } else {
        echo "<h1 class='text-center font-weight-bold small'>Hasil tidak tersedia.</h1>";
    }
    ?>
</body>
</html>
