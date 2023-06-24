<!DOCTYPE html>
<html>
<head>
    <title>Status Kelulusan Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .bordered {
            border: 1px solid #8B4513; /* Warna coklat pekat */
            background-color: #D2B48C; /* Warna coklat muda */
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
            font-family: 'Rockwell', serif;
            text-align: center;
        }

        .title {
            font-family: 'Akura Popo', cursive;
            text-align: center;
            color: #8B4513; /* Warna coklat pekat */
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Akura+Popo&family=Rockwell&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-4 title">Status Kelulusan Mahasiswa</h2>
        <div class="bordered">
            <p>Mahasiswa atas nama <?= $nama ?> (NIM: <?= $nim ?>) berhasil menyelesaikan studi S1 dengan predikat <?= $statusKelulusan ?></p>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Status Kelulusan Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .bordered {
            border: 2px solid #343a40; /* Warna border */
            background-color: #f8f9fa; /* Warna latar belakang */
            padding: 20px;
            margin-top: 50px;
            border-radius: 5px;
            font-family: 'Montserrat', sans-serif;
            text-align: center;
        }
css
Copy code
    .title {
        font-family: 'Akaya Telivigala', cursive;
        text-align: center;
        color: #343a40; /* Warna judul */
        margin-bottom: 20px;
    }
</style>
<link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-4 title">Status Kelulusan Mahasiswa</h2>
        <div class="bordered">
            <p>Mahasiswa dengan nama <strong><?= $nama ?></strong> (NIM: <strong><?= $nim ?></strong>) berhasil menyelesaikan studi S1 dengan predikat <strong><?= $statusKelulusan ?></strong></p>
        </div>
    </div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>