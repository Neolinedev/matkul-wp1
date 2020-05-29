<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumus-Rumus</title>
</head>

<body>
    <form action="tugas04output.php" method="POST">
        <h1>RUMUS-RUMUS</h1>
        <table border="3" bgcolor="cyan">
            <tr>
                <td>Nilai 1</td>
                <td><input type="text" name="nilai1"></td>
            </tr>
            <tr>
                <td>Nilai 2</td>
                <td><input type="text" name="nilai2"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="radio" name="rumus" value="Segitiga">Segitiga
                    <input type="radio" name="rumus" value="PersegiPanjang">Persegi Panjang
                </td>
            </tr>
        </table>
        <input type="submit" value="Hitung"><input type="reset" value="Batal">
    </form>
</body>

</html>