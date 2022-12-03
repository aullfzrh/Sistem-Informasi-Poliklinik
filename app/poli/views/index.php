<?php
require_once 'app/functions/MY_model.php';
$polis = get("SELECT * FROM poli");

$no = 1;

?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Poli</h4>
          <a href="?page=tambah-poli" class="btn btn-primary round waves-effect waves-light">
            Tambah Poli
          </a>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped dataex-html5-selectors">
                <thead>
                  <tr>
                    <th></th>
                    <th>Nama Poli</th>
                    <th>Nama Dokter</th>
                    <th>Layanan</th>
                    <th>Ruangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($polis as $poli) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $poli['nama_poli']; ?></td>
                      <td><?= $poli['nama_dokter']; ?></td>
                      <td><?= $poli['layanan']; ?></td>
                      <td><?= $poli['ruangan']; ?></td>
                      <td>
                        <a href="?page=edit-poli&id=<?= $poli['id']; ?>"><i class="m-1 feather icon-edit-2"></i></a>
                        <a href="?page=hapus-poli&id=<?= $poli['id']; ?>" class="btn-hapus">
                          <i class="feather icon-trash"></i>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- User Table -->