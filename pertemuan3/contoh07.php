<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Lingkaran</title>
</head>

<body>
    <?php
    // Konstanta untuk nilai judul
    define("Judul", "Hitung Luas Lingkaran");
    // Konstanta nilai phi
    define("PHI", 3.14);
    echo Judul;
    $r = 15;
    echo "<br>Jari-Jari : $r<br>\n";
    $luas = PHI * $r * $r;
    echo "Luas Lingkaran = $luas cm";
    ?>
</body>

</html>