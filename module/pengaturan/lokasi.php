<?php

if ($controller == 'form') {
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	if ($id > 0 && in_array($action, array('salin', 'ubah', 'hapus'))) {
		include 'lokasi-form.php';
	} else if (in_array($action, array('tambah'))) {
		include 'lokasi-form.php';
	} else {
		header('location: '.index($mid));
	}
} else if ($controller == 'aksi') {
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	include 'lokasi-aksi.php';
} else {
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	include 'lokasi-form-cari.php';
	include 'lokasi-data.php';
}
