<?php
session_start();
require_once '../../functions/MY_model.php';
$nama_poli = $_POST['nama_poli'];
$nama_dokter = $_POST['nama_dokter'];
$layanan = $_POST['layanan'];
$ruangan = $_POST['ruangan'];
$created_at = date('Y-m-d H:i:s');
$created_by = $_SESSION['user']['id'];
$query = "INSERT INTO poli VALUES('', '$nama_poli', '$nama_dokter', '$layanan', '$ruangan', '$created_at', '', '', '$created_by', '', '')";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=poli";</script>';
} else {
  echo mysqli_error($conn);
}
