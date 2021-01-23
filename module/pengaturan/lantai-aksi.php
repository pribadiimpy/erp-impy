<?php

if ($submit == 'tambah') {
	$sql = "INSERT INTO lantai (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: lantai.php');
}

if ($submit == 'salin') {
	$sql = "INSERT INTO lantai (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: lantai.php');
}

if ($submit == 'ubah') {
	$sql = "UPDATE lantai SET nama = '{$nama}' WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: lantai.php');
}

if ($submit == 'hapus') {
	$sql = "DELETE FROM lantai WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: lantai.php');
}
