<?php

if ($submit == 'tambah') {
	$sql = "INSERT INTO pelanggan (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: pelanggan.php');
}

if ($submit == 'salin') {
	$sql = "INSERT INTO pelanggan (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: pelanggan.php');
}

if ($submit == 'ubah') {
	$sql = "UPDATE pelanggan SET nama = '{$nama}' WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: pelanggan.php');
}

if ($submit == 'hapus') {
	$sql = "DELETE FROM pelanggan WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: pelanggan.php');
}
