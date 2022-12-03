<?php
session_start();
require_once '../../functions/MY_model.php';

$id = $_POST['id'];
$nama_poli = $_POST['nama_poli'];
$nama_dokter = $_POST['nama_dokter'];
$layanan = $_POST['layanan'];
$ruangan = $_POST['ruangan'];
$updated_at = date('Y-m-d H:i:s');
$updated_by = $_SESSION['user']['id'];
$query = "UPDATE poli SET nama_poli = '$nama_poli', nama_dokter = '$nama_dokter', layanan = '$layanan', ruangan = '$ruangan', updated_at = '$updated_at', updated_by = '$updated_by' WHERE id = '$id'";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=poli";</script>';
} else {
  echo mysqli_error($conn);
}
