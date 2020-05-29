<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>

<body>
    <h1>Form Registrasi</h1>
    <br>
    <p>Isi Data Dibawah ini : </p>
    <form action="Tugas06Proses.php" method="POST">
        Nama <input type="text" name="nama" size="25" maxlength="50">
        <br>
        Alamat <textarea name="alamat" cols="40" rows="5"></textarea>
        <br>
        Tempat Lahir <input type="text" name="tempat" size="25" maxlength="50">
        <br>
        Tanggal Lahir <input type="text" name="tanggal" size="25" maxlength="50">
        <br>
        Kelamin <input type="radio" name="jeniskel" value="Laki-Laki">Laki-Laki <input type="radio" name="jeniskel" value="Perempuan">Perempuan
        <p>
            Pendidikan <select name="pendidikan">
                <option value="-Pilih-"></option>
                <option value="S1">S1</option>
                <option value="D3">D3</option>
                <option value="SMA">SMA</option>
                <option value="Lain-Lain">Lain-Lain</option>
            </select>
        </p>
        <input type="submit" value="Submit"><input type="reset" value="Cancel">
    </form>
</body>

</html>