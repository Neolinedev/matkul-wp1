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
    <form action="tampilkomentar.php" method="POST"><br>
        Nama Anda : <input type="text" name="nama" size="25"><br>
        Email Anda : <input type="text" name="email" size="25"><br>
        Komentar Anda : <textarea name="komentar" cols="50" rows="5">
        </textarea><br>

        <input type="submit" value="Kirim">
        <input type="reset" value="Reset">
    </form>
</body>

</html>