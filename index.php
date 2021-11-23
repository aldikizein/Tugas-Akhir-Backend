<?php
//Konek ke database
require('./config/db-config.php');
require('./detail/bootstrap.php');

$query = "SELECT * FROM data_film ORDER BY created_at DESC";
$data_films = mysqli_query($mysqli, $query);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Home - Data show</title>
</head>
<body>
    <div class="container">
        <h2 class="mb-3"> Daftar Film yang Tersedia </h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Film id</th>
                    <th scope="col">Judul Film</th>
                    <th scope="col">Tahun Rilis</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Jumlah Sequel</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_films as $key => $data_film) : ?>
                <tr>
                    <th scope="row"><?php echo $key+1?>.</th>
                    <td><?= $data_film['judul_film'];?></td>
                    <td><?= $data_film['tahun_rilis'];?></td>
                    <td><?= $data_film['genre'];?></td>
                    <td><?= $data_film['jumlah_ep'];?></td>
                    <td><?= $data_film['status'];?></td>
                    <td>
                    <a class="btn btn-info" href="./source/edit.php?id=<?= $data_film['id']?>" role="button">Ubah</a>
                    <a class="btn btn-danger" href="./source/delete.php?id=<?= $data_film['id']?>" role="button"
                    onclick="return confirm('Yakin mau mengahpus film?');">Hapus</a>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a class="btn btn-primary mu-3" href="./source/create.php" role="button">Tambah Film</a>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>

</body>

</html>