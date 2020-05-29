<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>WELCOME, <?= $_POST["nama"]; ?></h1>
    <h2>Table Data Siswa</h2>
    <hr>
    <br>
    <table border="2">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tempat, Tanggal Lahir</th>
            <th>Jurusan</th>
        </tr>
        <tr>
            <th>10190130</th>
            <th>Muhammad Saddam Pradana</th>
            <th>Jl.Pemuda Asli 1</th>
            <th>Jakarta, 18 April 2002</th>
            <th>Rekayasa Perangkat Lunak</th>
        </tr>
    </table>
</body>

</html>