<!DOCTYPE html>
<html>

<head>
    <title>APLIKASI TO-DOLIST</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: pink;
        }

        h1 {
            color: blue;
        }

        h3 {
            color: blue;
        }

        .btn-primary {
            background-color: blue;
        }

        .btn-primary:hover {
            background-color: lightblue;
        }

        .btn-success {
            background-color: blue;
        }

        .btn-success:hover {
            background-color: lightblue;
        }

        .btn-danger {
            background-color: blue;
        }

        .btn-danger:hover {
            background-color: lightblue;
        }

        th {
            background-color: blue;
            color: white;
        }

        td {
            color: blue;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>APLIKASI TO-DOLIST</h1>
        <form method="post" action="<?= base_url('todolist/addTask') ?>">
            <div class="form-group">
                <label for="kegiatan">Masukkan kegiatan:</label>
                <input type="text" class="form-control" id="kegiatan" name="kegiatan" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambahkan</button>
        </form>
        <br>
        <h3>Daftar Kegiatan:</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kegiatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($todolist as $task) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $task['kegiatan'] ?></td>
                        <td>
                            <a href="<?= base_url('todolist/markAsDone/' . $task['idkegiatan']) ?>" class="btn btn-success">Selesai</a>
                            <a href="<?= base_url('todolist/deleteTask/' . $task['idkegiatan']) ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
