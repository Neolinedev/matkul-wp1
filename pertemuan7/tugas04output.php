<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Hitung Rumus</title>
</head>

<body>
    <h1>HASIL HITUNG RUMUS</h1>

    Nilai a adalah = <?php echo $_POST["nilai1"]; ?><br>
    Nilai b adalah = <?php echo $_POST["nilai2"]; ?><br>
    Rumus yang dipilih adalah = <?php echo $_POST["rumus"]; ?><br>
    <?php
    $rumus = $_POST['rumus'];
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $segitiga = 1 / 2 * ($nilai1 * $nilai2);
    $persegi_panjang = $nilai1 * $nilai2;
    if ($nilai1 == "0" && $nilai2 == "0") {
        echo "Tidak ada hasil perhitungan!!";
    } else if ($rumus == "Segitiga") {
        echo "Hasil Perhitungan Rumus = " . $segitiga;
    } else if ($rumus == "PersegiPanjang") {
        echo "Hasil Perhitungan Rumus = " . $persegi_panjang;
    }
    ?>
</body>

</html>