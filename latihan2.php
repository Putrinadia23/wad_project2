<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="container mt-5">
    <?php
    $judul = "Selamat Datang";
    $angka = $pilihan = $hasil = "";

    if (isset($_POST['hitung'])) {
        $angka = $_POST['angka'];
        $pilihan = $_POST['pilihan'];

        switch ($pilihan) {
            case "pilihan1":
                $hasil = $angka + 1;
                break;
            case "pilihan2":
                $hasil = $angka * 2;
                break;
            case "pilihan3":
                $hasil = $angka * 3;
                break;
            case "pilihan4":
                $hasil = $angka * 4;
                break;
            case "pilihan5":
                $hasil = $angka * 5;
                break;
            default:
                $hasil = "Pilihan tidak valid";
        }
    }

    
    if (!empty($hasil)) {
        header("Location: latihan3.php?angka=$angka&hasil=$hasil");
        exit;
    }
    ?>

    <h1 class="text-center font-weight-bold"><?php echo $judul; ?></h1>

    <form method="post">
        <div class="form-group">
            <label for="angka">Masukkan Angka:</label>
            <input type="number" class="form-control" name="angka" required value="<?php echo $angka; ?>">
        </div>
        <div class="form-group">
            <label for="pilihan">Pilih angka:</label>
            <select class="form-control" name="pilihan">
                <option value="pilihan1" <?php if ($pilihan === "pilihan1") echo "selected"; ?>>1</option>
                <option value="pilihan2" <?php if ($pilihan === "pilihan2") echo "selected"; ?>>2</option>
                <option value="pilihan3" <?php if ($pilihan === "pilihan3") echo "selected"; ?>>3</option>
                <option value="pilihan4" <?php if ($pilihan === "pilihan4") echo "selected"; ?>>4</option>
                <option value="pilihan5" <?php if ($pilihan === "pilihan5") echo "selected"; ?>>5</option>
            </select>
        </div>
        <div class="form-group text-center">
            <button type="submit" name="hitung" class="btn btn-primary mt-3">Submit</button>
        </div>
    </form>
</body>
</html>
