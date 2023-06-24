<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: pink;
        }

        .container {
            background-color: pink;
            color: black;
        }

        .jumbotron {
            background-color: pink;
            color: black;
            margin-bottom: 0;
        }

        .form-control {
            background-color: pink;
            color: black;
            border: none;
            border-bottom: 2px solid black;
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
    <div class="container">
        <div class="jumbotron">
            <h1>Update Asisten</h1>
        </div>
        <form action="/asisten/update" method="post">
            <?= csrf_field() ?>
            <div class="p-4 text-black rounded">
                <div class="mb-3 mt-3">
                    Nim<br>
                    <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim" required>
                </div>
                <div class="mb-3 mt-3">
                    Nama<br>
                    <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required>
                </div>
                <div class="mb-3 mt-3">
                    Praktikum<br>
                    <input type="text" class="form-control" placeholder="Masukkan Mata Kuliah Praktikum" name="praktikum" required>
                </div>
                <div class="mb-3 mt-3">
                    IPK<br>
                    <input type="text" class="form-control" placeholder="Masukkan IPK" name="ipk" required>
                </div>
            </div>
            <center><input type="submit" name="" value="Update" /></center>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
