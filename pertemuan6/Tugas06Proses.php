<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 06</title>
</head>

<body>
    <?php
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $jeniskel = $_POST['jeniskel'];
    $pendidikan = $_POST['pendidikan'];
    ?>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?php echo $alamat; ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><?php echo $tempat; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><?php echo $tanggal; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $jeniskel; ?></td>
        </tr>
        <tr>
            <td>Pendidikan</td>
            <td><?php echo $pendidikan; ?></td>
        </tr>
    </table>
    <a href="Tugas06.php">Back To Home</a>
</body>

</html>