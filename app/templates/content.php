<?php
if (isset($_GET['page'])) {

	switch ($_GET['page']) {
		case 'poli':
			require_once 'app/poli/views/index.php';
			break;
		case 'tambah-poli':
			require_once 'app/poli/views/create.php';
			break;
		case 'edit-poli':
			require_once 'app/poli/views/edit.php';
			break;
		case 'hapus-poli':
			require_once 'app/poli/proses/delete.php';
			break;
		case 'pasien':
			require_once 'app/pasien/views/index.php';
			break;
		case 'tambah-pasien':
			require_once 'app/pasien/views/create.php';
			break;
		case 'edit-pasien':
			require_once 'app/pasien/views/edit.php';
			break;
		case 'hapus-pasien':
			require_once 'app/pasien/proses/delete.php';
			break;
		case 'obat':
			require_once 'app/obat/views/index.php';
			break;
		case 'tambah-obat':
			require_once 'app/obat/views/create.php';
			break;
		case 'edit-obat':
			require_once 'app/obat/views/edit.php';
			break;
		case 'hapus-obat':
			require_once 'app/obat/proses/delete.php';
			break;
		case 'ruang':
			require_once 'app/ruang/views/index.php';
			break;
		case 'tambah-ruang':
			require_once 'app/ruang/views/create.php';
			break;
		case 'edit-ruang':
			require_once 'app/ruang/views/edit.php';
			break;
		case 'hapus-ruang':
			require_once 'app/ruang/proses/delete.php';
			break;
		case 'rekam-medis':
			require_once 'app/rekam-medis/views/index.php';
			break;
		case 'tambah-rekam-medis':
			require_once 'app/rekam-medis/views/create.php';
			break;
		case 'edit-rekam-medis':
			require_once 'app/rekam-medis/views/edit.php';
			break;
		case 'hapus-rekam-medis':
			require_once 'app/rekam-medis/proses/delete.php';
			break;
		case 'lap-rekam-medis':
			require_once 'app/laporan/views/rekam-medis.php';
			break;
	}
} else {
	require_once 'app/dashboard/views/index.php';
}
