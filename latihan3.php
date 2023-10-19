<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
</head>
<body>
    <?php
    if (isset($_GET['angka']) && isset($_GET['hasil'])) {
        $angka = $_GET['angka'];
        $hasil = $_GET['hasil'];
        echo "<h1>Hasil perhitungan untuk angka $angka adalah: $hasil</h1>";
    } else {
        echo "<h1>Hasil tidak tersedia.</h1>";
    }
    ?>
</body>
</html>

