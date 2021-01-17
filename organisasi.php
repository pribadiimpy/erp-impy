<?php

require 'db.php';

$controller = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : '';
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
$submit = isset($_REQUEST['submit']) ? $_REQUEST['submit'] : '';

include 'menu_atas.php';

if ($controller == 'form') {
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	if ($id > 0 && in_array($action, array('salin', 'ubah', 'hapus'))) {
		include 'organisasi-form.php';
	} else if (in_array($action, array('tambah'))) {
		include 'organisasi-form.php';
	} else {
		header('location: organisasi.php');
	}
} else if ($controller == 'aksi') {
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	include 'organisasi-aksi.php';
} else {
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	include 'organisasi-form-cari.php';
	include 'organisasi-data.php';
}
