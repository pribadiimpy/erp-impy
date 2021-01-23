<?php

if ($controller == 'form') {
	if ($action=='tambah') {
		$id=0;
	} else {
		$id=isset($_POST['id']) ? $_POST['id'] : '';
	}
	if ($id > 0 && in_array($action, array('salin', 'ubah', 'hapus'))) {
		include 'jasa-form.php';
	} else if (in_array($action, array('tambah'))) {
		include 'jasa-form.php';
	} else {
		header('location: '.index($mid));
	}
} else if ($controller == 'aksi') {
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	include 'jasa-aksi.php';
} else {
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	include 'jasa-form-cari.php';
	include 'jasa-data.php';
}
