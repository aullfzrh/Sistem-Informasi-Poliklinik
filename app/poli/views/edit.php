<?php
require_once 'app/functions/MY_model.php';

$id = $_GET['id'];
$poli = get_where("SELECT * FROM poli WHERE id = '$id' ");

?>
<div class="content-header row">

  <div class="content-header-right col-md-12">
    <a href="?page=poli" class="btn btn-light float-right mb-2">Kembali</a>
  </div>
</div>
<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Edit Poli</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="app/poli/proses/update.php" method="post">
              <input type="hidden" name="id" value="<?= $poli['id']; ?>">
              <div class="form-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Nama </label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" placeholder="Nama" class="form-control" name="nama_poli" value="<?= $poli['nama_poli']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Nama</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" placeholder="Nama" class="form-control" name="nama_dokter" value="<?= $poli['nama_dokter']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Layanan</label>
                      </div>
                      <div class="col-md-8">
                        <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Layanan" name="layanan"><?= $poli['layanan']; ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Ruangan</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" placeholder="Ruangan" class="form-control" name="ruangan" value="<?= $poli['ruangan']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-8 offset-md-4">
                    <button type="submit" name="save" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>