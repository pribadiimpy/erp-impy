<?php

if ($submit == 'tambah') {
	$sql = "INSERT INTO ruangan (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: ruangan.php');
}

if ($submit == 'salin') {
	$sql = "INSERT INTO ruangan (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: ruangan.php');
}

if ($submit == 'ubah') {
	$sql = "UPDATE ruangan SET nama = '{$nama}' WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: ruangan.php');
}

if ($submit == 'hapus') {
	$sql = "DELETE FROM ruangan WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: ruangan.php');
}
