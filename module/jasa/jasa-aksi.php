<?php

if ($submit == 'tambah') {
	$sql = "INSERT INTO jasa (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: jasa.php');
}

if ($submit == 'salin') {
	$sql = "INSERT INTO jasa (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: jasa.php');
}

if ($submit == 'ubah') {
	$sql = "UPDATE jasa SET nama = '{$nama}' WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: jasa.php');
}

if ($submit == 'hapus') {
	$sql = "DELETE FROM jasa WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: jasa.php');
}