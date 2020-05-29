<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar</title>
    <style>
        h1 {
            color: red;
        }

        body {
            background-color: #1cd0b4;
        }
    </style>
</head>

<body>
    <h1>Data Komentar Anda</h1>
    <hr>
    <p>Nama : <?= $_POST["nama"]; ?></p>
    <p>Email : <?= $_POST["email"]; ?></p>
    <p>Komentar : <?= $_POST["komentar"]; ?></p>

    <a href="forminputkomentar.php">INPUT DATA LAGI</a>
</body>

</html>