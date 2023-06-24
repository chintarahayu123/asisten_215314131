<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <style>
        body {
            background-color: pink;
            color: black;
        }

        h1 {
            color: black;
        }

        input[type="text"] {
            background-color: pink;
            color: black;
            border: none;
            border-bottom: 2px solid black;
            margin-bottom: 10px;
            padding: 5px;
        }

        input[type="submit"] {
            background-color: pink;
            color: black;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h1>PENDAFTARAN ASISTEN PRAKTIKUM</h1>
    <form action="/asisten/simpan" method="post">
        <?= csrf_field() ?>
        NIM:<input type="text" name="nim" /><br />
        NAMA:<input type="text" name="nama" /><br />
        PRAKTIKUM:<input type="text" name="praktikum" /><br />
        IPK:<input type="text" name="ipk" /><br />
        <input type="submit" name="" value="Simpan" />
    </form>
</body>
</html>
