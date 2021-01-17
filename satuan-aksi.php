<?php

if ($submit == 'tambah') {
	$sql = "INSERT INTO satuan (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: satuan.php');
}

if ($submit == 'salin') {
	$sql = "INSERT INTO satuan (id, nama) VALUES (NULL, '{$nama}')";
	$rs = $db->query($sql);
	header('location: satuan.php');
}

if ($submit == 'ubah') {
	$sql = "UPDATE satuan SET nama = '{$nama}' WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: satuan.php');
}

if ($submit == 'hapus') {
	$sql = "DELETE FROM satuan WHERE id = '{$id}'";
	$rs = $db->query($sql);
	header('location: satuan.php');
}
