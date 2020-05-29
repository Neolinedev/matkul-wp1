<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrasi</title>
</head>

<body>
    <h1>Data Registrasi</h1>
    <?php
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $ttl = $_POST['ttl'];
    $tgl = $_POST['tgl'];
    $jeniskel = $_POST['jeniskel'];
    $pekerjaan = $_POST['pekerjaan'];
    ?>
    <table border="2">
        <tr>
        <tr>
            <td>Nama</td>
            <td><?= $nama; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?= $alamat; ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><?= $ttl; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><?= $tgl; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?= $jeniskel; ?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td><?= $pekerjaan; ?></td>
        </tr>
        </tr>
    </table>
    <a href="inputform.php">INPUT LAGI ?</a>
</body>

</html>