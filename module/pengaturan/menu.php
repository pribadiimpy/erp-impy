<?php

if ($controller=='form') {
	if ($action=='tambah') {
		$id=0;
	} else {
		$id=isset($_POST['id']) ? $_POST['id'] : '';
	}
	if ($id > 0 && in_array($action, array('salin', 'ubah', 'hapus'))) {
		include('menu-form.php');
	} else if (in_array($action, array('tambah'))) {
		include('menu-form.php');
	} else {
		header('location: '.index($mid));
	}
} else if ($controller == 'aksi') {
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	$module = isset($_POST['module']) ? $_POST['module'] : '';
	$posisi_menu = isset($_POST['posisi_menu']) ? $_POST['posisi_menu'] : '';
	$aktif = isset($_POST['aktif']) ? $_POST['aktif'] : '';
	include('menu-aksi.php');
} else {
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	include('menu-form-cari.php');
	include('menu-data.php');
}
