<?php

require 'db.php';

$controller = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : '';
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
$submit = isset($_REQUEST['submit']) ? $_REQUEST['submit'] : '';

include 'menu_atas.php';

if ($controller == 'form') {
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	if ($id > 0 && in_array($action, array('salin', 'ubah', 'hapus'))) {
		include 'ruangan-form.php';
	} else if (in_array($action, array('tambah'))) {
		include 'ruangan-form.php';
	} else {
		header('location: ruangan.php');
	}
} else if ($controller == 'aksi') {
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	include 'ruangan-aksi.php';
} else {
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	include 'ruangan-form-cari.php';
	include 'ruangan-data.php';
}
