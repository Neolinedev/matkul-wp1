<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Komentar</title>
    <style>
        h1 {
            color: red;
        }
    </style>
</head>

<body bgcolor="#1cd0b4">
    <h1>BUKU TAMU</h1>
    <p>Komentar Dan Saran Anda Sangat Kami Butuhkan.<br>
        Untuk Meningkatkan Kualitas Situs Kami.</p>
    <hr>
    <form action="komentar.php" method="POST">
        <label for="nama">Nama Anda : </label>
        <input type="text" name="nama" size="25"><br>

        <label for="email">Email Anda : </label>
        <input type="text" name="email" size="25"><br>

        Komentar : <textarea name="komentar" id="komentar" cols="50" rows="5"></textarea>
        <br>
        <button type="submit">Kirim</button>
    </form>
</body>

</html>