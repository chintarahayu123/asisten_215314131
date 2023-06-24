<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Delete Data</title>
    <style>
        body {
            background-color: #D2B48C; /* Warna putih */
        }

        .jumbotron {
            background-color: #FFC0CB; /* Warna pink */
            padding: 2rem;
            border-radius: 10px;
        }

        h1.display-4 {
            color: #FFFFFF; /* Warna putih */
            font-size: 2.5rem;
        }

        .p-4 {
            background-color: #FFC0CB; /* Warna pink */
            color: #FFFFFF; /* Warna putih */
            border-radius: 10px;
        }

        .form-label {
            color: #000000; /* Warna hitam */
        }

        input[type="text"] {
            background-color: #FFFFFF; /* Warna putih */
            color: #000000; /* Warna hitam */
        }

        input[type="submit"] {
            background-color: #FFC0CB; /* Warna pink */
            color: #FFFFFF; /* Warna putih */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <center>
                <h1 class="display-4">DELETE DATA ASISTEN</h1>
            </center>
        </div>

        <form action="/asisten/delete" method="post">
            <?= csrf_field() ?>
            <div class="p-4 text-black rounded">
                <div class="mb-3 mt-3">
                    <label for="nim" class="form-label">Nim</label>
                    <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim" required>
                </div>
            </div>
            <center><input type="submit" class="btn btn-primary" value="Delete" /></center>
        </form>
    </div>
</body>

</html>
