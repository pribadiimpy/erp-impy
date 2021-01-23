<?php

if ($submit == 'tambah') {
	$sql = "INSERT INTO gedung (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: gedung.php');
}

if ($submit == 'salin') {
	$sql = "INSERT INTO gedung (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: gedung.php');
}

if ($submit == 'ubah') {
	$sql = "UPDATE gedung SET nama = '{$nama}' WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: gedung.php');
}

if ($submit == 'hapus') {
	$sql = "DELETE FROM gedung WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: gedung.php');
}
