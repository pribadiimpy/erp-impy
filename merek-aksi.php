<?php

if ($submit == 'tambah') {
	$sql = "INSERT INTO merek (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: merek.php');
}

if ($submit == 'salin') {
	$sql = "INSERT INTO merek (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: merek.php');
}

if ($submit == 'ubah') {
	$sql = "UPDATE merek SET nama = '{$nama}' WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: merek.php');
}

if ($submit == 'hapus') {
	$sql = "DELETE FROM merek WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: merek.php');
}
