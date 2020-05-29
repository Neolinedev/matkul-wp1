<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
</head>
<style>
    body {
        color: black;
    }

    .form-register {
        width: 200px;
        margin: auto;
        padding: 4px;
    }
</style>

<body>
    <h1>Form Registrasi</h1>
    <br>
    <p>Isi data dibawah ini : </p>
    <form action="outputform.php" method="POST">
        Nama <input type="text" name="nama" class="form-register">
        <br>
        Alamat <textarea class="form-register" name="alamat" id="alamat" cols="30" rows="5"></textarea>
        <br>
        Tempat Lahir <input class="form-register" type="text" name="ttl"><br>
        Tanggal Lahir <input type="text" class="form-register" name="tgl"><br>
        <input type="radio" name="jeniskel" value="Laki-Laki">Laki-Laki
        <input type="radio" name="jeniskel" value="Perempuan">Perempuan
        <br>
        Pekerjaan : <select name="pekerjaan" id="pekerjaan">
            <option value="-Pilih-">
            <option value="Mahasiswa">Mahasiswa
            <option value="Karyawan Swasta">Karyawan Swasta
            <option value="Youtuber">Youtuber
            <option value="Tukang Rusuh">Tukang Rusuh
        </select>
        <br>
        <input type="submit" value="Kirim">
        <input type="reset" value="Batal">
    </form>
</body>

</html>