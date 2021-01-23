<?php

if ($submit == 'tambah') {
	$sql = "INSERT INTO organisasi (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: organisasi.php');
}

if ($submit == 'salin') {
	$sql = "INSERT INTO organisasi (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: organisasi.php');
}

if ($submit == 'ubah') {
	$sql = "UPDATE organisasi SET nama = '{$nama}' WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: organisasi.php');
}

if ($submit == 'hapus') {
	$sql = "DELETE FROM organisasi WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: organisasi.php');
}
