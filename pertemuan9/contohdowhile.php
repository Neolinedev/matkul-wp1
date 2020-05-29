<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan DO WHILE</title>
</head>

<body>
    Menggunakan DO WHILE
    <br>
    <?php
    $jumlah = 10;
    do {
        echo $jumlah++;
        echo "<br>";
    } while ($jumlah <= 1)
    ?>
</body>

</html>