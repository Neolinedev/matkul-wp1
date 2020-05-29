<html>

<head>
	<title>Form Komentar</title>
</head>

<body bgcolor="#1cd0b4">
	<h1>
		<width="50%" bgcolor="#000099">
			<font color="red">BUKU TAMU<br /></font>
	</h1>
	<p> Komentar Dan Saran Anda Sangat Kami Butuhkan.<br />
		Untuk Meningkatkan Kualitas Situs Kami.<br />
		<hr>
	</p>
	<form action="tampilkankomentar.php" method="POST">
		Nama Anda : <input type="text" name="nama" size="25">
		<br><br>
		Email Anda : <input type="text" name="email" size="25">
	</form>&ensp;
	Komentar : <textarea rows="5" cols="50" name="komentar">
</textarea><br><br>&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;
	<button type="submit">Kirim</button>
	<input type="reset" value="Batal">

</body>

</html>