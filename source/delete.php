<?php
require('../config/db-config.php');

$id = $_GET['id'];
$query = "DELETE FROM data_film WHERE id=$id";
$delete = mysqli_query($mysqli, $query);

header("Location:../index.php?delete=".$delete);