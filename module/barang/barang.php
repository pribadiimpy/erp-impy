<?php

if ($controller == 'form') {
	if ($action=='tambah') {
		$id=0;
	} else {
		$id=isset($_POST['id']) ? $_POST['id'] : '';
	}
	if ($id > 0 && in_array($action, array('salin', 'ubah', 'hapus'))) {
		include 'barang-form.php';
	} else if (in_array($action, array('tambah'))) {
		include 'barang-form.php';
	} else {
		header('location: '.index($mid));
	}
} else if ($controller == 'aksi') {
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	$id_kategori = isset($_POST['id_kategori']) ? $_POST['id_kategori'] : '';
	$id_satuan = isset($_POST['id_satuan']) ? $_POST['id_satuan'] : '';
	$id_merek = isset($_POST['id_merek']) ? $_POST['id_merek'] : '';
	include 'barang-aksi.php';
} else {
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	include 'barang-form-cari.php';
	include 'barang-data.php';
}
