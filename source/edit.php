
<!doctype html>
<html lang="en">

<head>
    <?php 
    require('../config/db-config.php');
    include_once('../detail/bootstrap.php');

    $id = $_GET['id'];
    $query = "SELECT * FROM data_film WHERE id=$id";
    $data_films = mysqli_query($mysqli, $query);
    
    if(isset($_POST['submit'])){
    $judul_film = $_POST['judul_film'];
    $tahun_rilis = $_POST['tahun_rilis'];
    $genre = $_POST['genre'];
    $jumlah_ep = $_POST['jumlah_ep'];
    $status = $_POST['status'];

    $query="UPDATE data_film SET judul_film='$judul_film', tahun_rilis='$tahun_rilis', genre='$genre', jumlah_ep='$jumlah_ep', status='$status'
    WHERE id = $id";

    $result = mysqli_query($mysqli, $query);
    
 }?>
    <title>Edit Film</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <form class="col-7 mx-auto" action="" method="POST">
                <h2 class="mb-3"> Masukkan Detail Film pada borang berikut</h2>
                <form action="" method="POST">

                    <?php if(isset($result) && $result === true):?>
                    <div class="alert alert-success" role="alert">
                        Film berhasil diedit
                    </div>

                    <?php endif ?>
                    <?php foreach ($data_films as $data_film) : ?>
                    <div class="form-group">
                        <label for="judul_film">Judul Film</label>
                        <input type="judul_film" class="form-control" name="judul_film" id="judul_film"
                        placeholder="Masukkan judul film" value="<?= $data_film['judul_film']?>" required>
                    </div>

                    <div class="form-group">
                        <label for="tahun_rilis">Tahun Rilis</label>
                        <input type="tahun_rilis" class="form-control" name="tahun_rilis" id="tahun_rilis"
                        placeholder="Masukkan tahun rilis film" value="<?= $data_film['tahun_rilis']?>" required>
                    </div>

                    <div class="form-group">
                        <label for="genre">Genre</label>
                        <input type="genre" class="form-control" name="genre" id="genre" 
                        placeholder= "Masukkan genre film" value="<?= $data_film['genre']?>" required>
                    </div>

                    <div class="form-group">
                        <label for="jumlah_ep">Jumlah Episode/Sequel</label>
                        <input type="jumlah_ep" class="form-control" name="jumlah_ep" id="jumlah_ep"
                        placeholder= "Masukkan jumlah episode" value="<?= $data_film['jumlah_ep']?>" required>
                        <small class=>Jika tidak ada sequel, masukkan 0</small>
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="status" class="form-control" name="status" id="status"
                        placeholder= "Masukkan status film" value = "<?= $data_film['status']?>" required>
                    </div>
                    <?php endforeach ?>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-primary mu-3" href="/data-show/index.php" role="button">Kembali ke list</a>
                </form>
        </div>
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
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>