<?php

require 'db.php';

$controller = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : '';
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
$submit = isset($_REQUEST['submit']) ? $_REQUEST['submit'] : '';

if ($controller == 'form') {
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	if ($id > 0 && in_array($action, array('salin', 'ubah', 'hapus'))) {
		include 'gedung-form.php';
	} else if (in_array($action, array('tambah'))) {
		include 'gedung-form.php';
	} else {
		header('location: gedung.php');
	}
} else if ($controller == 'aksi') {
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	include 'gedung-aksi.php';
} else {
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	include 'gedung-form-cari.php';
	include 'gedung-data.php';
}
