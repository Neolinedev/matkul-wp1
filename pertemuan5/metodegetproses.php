<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method Get Proses</title>
    <style>
        body {
            background-color: black;
            display: block;
            margin: auto;
        }

        .nama {
            box-sizing: border-box;
            padding: 50px;
            border: 3px solid white;
        }

        hr {
            width: 60%;
        }

        h1,
        h2,
        p {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: 50px;
            color: lightskyblue;
        }
    </style>
</head>

<body>
    <div class="nama">
        <h1>Hai Namaku, <?php echo $_GET["nama"]; ?></h1>
    </div>
    <h2>Welcome to my website.</h2>
    <hr>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam odio recusandae quisquam molestias illum amet laboriosam iusto, omnis quas dignissimos assumenda! Explicabo a et nostrum doloribus dolore tempore fuga assumenda!</p>
</body>

</html>