<?php

if ($submit == 'tambah') {
	$sql = "INSERT INTO lokasi (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: lokasi.php');
}

if ($submit == 'salin') {
	$sql = "INSERT INTO lokasi (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: lokasi.php');
}

if ($submit == 'ubah') {
	$sql = "UPDATE lokasi SET nama = '{$nama}' WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: lokasi.php');
}

if ($submit == 'hapus') {
	$sql = "DELETE FROM lokasi WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: lokasi.php');
}
