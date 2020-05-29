<html>

<head>
	<title>Data Komentar</title>
</head>

<body bgcolor="#1cd0b4">
	<h1>
		<width="50%" bgcolor="#000099">
			<font color="red">Data Komentar Anda<br /></font>
	</h1>
	<hr>
	<p> Nama : <?php echo $_POST["nama"]; ?></p><br>
	<p>Email : <?php echo $_POST["email"]; ?></p><br>
	<p>Komentar : <?php echo $_POST["komentar"]; ?></p><br>
	<a href="forminputkomentar.php">INPUT DATA LAGI</a>
</body>

</html>